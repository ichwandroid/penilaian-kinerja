/*
 Copyright 2016 Google Inc. All Rights Reserved.
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 http://www.apache.org/licenses/LICENSE-2.0
 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
 */

// Names of the two caches used in this version of the service worker.
// Change to v2, etc. when you update any of the local resources, which will
// in turn trigger the install event again.
const PRECACHE = 'precache-v2';
const RUNTIME = 'runtime';

// A list of local resources we always want to be cached.
const PRECACHE_URLS = [
    '/',
    'img/core-img/dot-blue.png',
    'img/core-img/dot.png',
    'img/core-img/logo-anaksaleh.png',
    'img/core-img/logo-dark.png',
    'img/core-img/favicon.ico',

    'js/pwa.js',
    'index.php',

    'css/bootstrap.min.css',
    'css/tiny-slider.css',
    'css/baguetteBox.min.css',
    'css/rangeslider.css',
    'css/vanilla-dataTables.min.css',
    'css/apexcharts.css',
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css',
    'style.css',
    'manifest.json',
    'css/jquery.signaturepad.css',
    'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
    'js/numeric-1.2.6.min.js', 
    'js/bezier.js',
    'js/jquery.signaturepad.js', 
    
    'https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js',
    'js/json2.min.js',
    'https://code.jquery.com/jquery-3.4.1.js',
    'css/app_style.css',

    'js/slideToggle.min.js',
    'js/internet-status.js',
    'js/tiny-slider.js',
    'js/baguetteBox.min.js',
    'js/rangeslider.min.js',
    'js/vanilla-dataTables.min.js',
    'js/index.js',
    'js/magic-grid.min.js',
    'js/dark-rtl.js',
    'js/active.js'
];

// The install handler takes care of precaching the resources we always need.
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(PRECACHE)
      .then(cache => cache.addAll(PRECACHE_URLS))
      .then(self.skipWaiting())
  );
});

// The activate handler takes care of cleaning up old caches.
self.addEventListener('activate', event => {
  const currentCaches = [PRECACHE, RUNTIME];
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return cacheNames.filter(cacheName => !currentCaches.includes(cacheName));
    }).then(cachesToDelete => {
      return Promise.all(cachesToDelete.map(cacheToDelete => {
        return caches.delete(cacheToDelete);
      }));
    }).then(() => self.clients.claim())
  );
});

// The fetch handler serves responses for same-origin resources from a cache.
// If no response is found, it populates the runtime cache with the response
// from the network before returning it to the page.
self.addEventListener('fetch', event => {
  // Skip cross-origin requests, like those for Google Analytics.
  if (event.request.url.startsWith(self.location.origin)) {
    event.respondWith(
      caches.match(event.request).then(cachedResponse => {
        if (cachedResponse) {
          return cachedResponse;
        }

        return caches.open(RUNTIME).then(cache => {
          return fetch(event.request).then(response => {
            // Put a copy of the response in the runtime cache.
            return cache.put(event.request, response.clone()).then(() => {
              return response;
            });
          });
        });
      })
    );
  }
});