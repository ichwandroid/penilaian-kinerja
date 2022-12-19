<?php 
  include 'header.php';
  include 'navbar.php';
?>

    <div class="page-content-wrapper">
      <!-- Welcome Toast -->
      <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
        <div class="toast-body">
          <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
          </svg>
          <div class="toast-text ms-3 me-2"><small class="d-block">Click the "Add to Home Screen" button &amp; enjoy it like an app.</small>
          </div>
        </div>
        <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="pt-3"></div>
      <div class="container">
        <div class="card card-bg-img bg-img bg-overlay mb-3" style="background-image: url('https://sekolahanaksaleh.sch.id/wp-content/uploads/2020/10/anak-saleh-IMG_0077.jpg')">
          <div class="card-body direction-rtl p-5">
            <h2 class="text-white">Selamat Datang</h2>
            <p class="mb-4 text-white">More than 220+ reusable modern design elements. Just it on your desired page.</p><a class="btn btn-warning" href="elements.html">All elements</a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card mb-3">
          <div class="card-body direction-rtl">
            <div class="row">
              <div class="col-4">
                <!-- Single Counter -->
                <div class="single-counter-wrap text-center"><i class="bi bi-heart-fill mb-2 text-danger"></i>
                  <h4 class="mb-1 text-success"><span class="counter is-visible" style="visibility: visible;">1399</span>+</h4>
                  <p class="mb-0">Total Sales</p>
                </div>
              </div>
              <div class="col-4">
                <!-- Single Counter -->
                <div class="single-counter-wrap text-center"><i class="bi bi-cup-fill mb-2 text-warning"></i>
                  <h4 class="mb-1 text-warning"><span class="counter is-visible" style="visibility: visible;">11</span>k</h4>
                  <p class="mb-0">Coffee Served</p>
                </div>
              </div>
              <div class="col-4">
                <!-- Single Counter -->
                <div class="single-counter-wrap text-center"><i class="bi bi-people-fill mb-2 text-danger"></i>
                  <h4 class="mb-1 text-danger"><span class="counter is-visible" style="visibility: visible;">479</span>+</h4>
                  <p class="mb-0">Happy Clients</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">               
        <div class="testimonial-slide-one-wrapper mb-3">
          <div class="testimonial-slide testimonial-style1">
            <!-- Single Testimonial Slide -->
            <div>
              <div class="card">
                <div class="card-body">
                  <div class="single-testimonial-slide">
                    <div class="image-wrapper shadow"><img src="https://via.placeholder.com/500x500.png?" alt=""></div>
                    <div class="text-content">
                      <p class="mb-2">I strongly recommend this agency to everyone interested in running a business.</p><span class="d-block">- Riyadh</span>
                    </div><i class="bi bi-chat-quote text-warning"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Testimonial Slide -->
            <div>
              <div class="card">
                <div class="card-body">
                  <div class="single-testimonial-slide">
                    <div class="image-wrapper shadow"><img src="https://via.placeholder.com/500x500.png?" alt=""></div>
                    <div class="text-content">
                      <p class="mb-2">You've saved our business! Thanks guys, keep up the good work! The best on the net!</p><span class="d-block">- Affan</span>
                    </div><i class="bi bi-chat-quote text-warning"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Testimonial Slide -->
            <div>
              <div class="card">
                <div class="card-body">
                  <div class="single-testimonial-slide">
                    <div class="image-wrapper shadow"><img src="https://via.placeholder.com/500x500.png?" alt=""></div>
                    <div class="text-content">
                      <p class="mb-2">Absolutely wonderful! I wish I would have thought of it first. I would be lost without agency.</p><span class="d-block">- Designing World</span>
                    </div><i class="bi bi-chat-quote text-warning"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card shadow-sm mb-3">
          <div class="card-body pb-2">
            <div class="chart-wrapper" style="position: relative;">
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-img bg-overlay py-4 mb-3" style="background-image: url('https://via.placeholder.com/500x500.png')">
        <div class="container direction-rtl">
          <div class="row align-items-center">
            <div class="col-6">
              <div class="single-counter-wrap">
                <h6 class="text-white mt-2">Some of <br> our milestones.</h6><span class="solid-line ms-0 bg-warning"></span>
              </div>
            </div>
            <div class="col-3">
              <!-- Single Counter -->
              <div class="single-counter-wrap text-center"><i class="bi bi-calendar2-check-fill mb-1 text-white"></i>
                <h6 class="mb-0 text-white"><span class="counter is-visible" style="visibility: visible;">361</span></h6>
              </div>
            </div>
            <div class="col-3">
              <!-- Single Counter -->
              <div class="single-counter-wrap text-center"><i class="bi bi-handbag mb-1 text-white"></i>
                <h6 class="mb-0 text-white"><span class="counter is-visible" style="visibility: visible;">1378</span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <!-- Single Task Progress -->
            <div class="single-task-progress">
              <!-- Progress Info -->
              <div class="progress-info d-flex align-items-center justify-content-between">
                <h6 class="mb-1">Project Affan</h6><span class="mt-0 mb-1">70% done</span>
              </div>
              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-danger" style="width: 70%;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="task-member-info d-flex align-items-center justify-content-between">
                <!-- Who working -->
                <div class="who-working mt-2"><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/7.jpg" alt=""></a><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/8" alt=""></a><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/9.jpg" alt=""></a></div>
                <!-- Add New Member -->
                <div class="addnew-member mt-2"><a class="btn btn-sm btn-danger btn-round" href="#">Add New</a></div>
              </div>
            </div>
            <!-- Single Task Progress -->
            <div class="single-task-progress">
              <!-- Progress Info -->
              <div class="progress-info d-flex align-items-center justify-content-between">
                <h6 class="mb-1">Project Suha</h6><span class="mt-0 mb-1">93% done</span>
              </div>
              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-success" style="width: 93%;" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="task-member-info d-flex align-items-center justify-content-between">
                <!-- Who working -->
                <div class="who-working mt-2"><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/7.jpg" alt=""></a><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/8" alt=""></a><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/9.jpg" alt=""></a><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/7.jpg" alt=""></a><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/8" alt=""></a></div>
                <!-- Add New Member -->
                <div class="addnew-member mt-2"><a class="btn btn-sm btn-success btn-round" href="#">Add New</a></div>
              </div>
            </div>
            <!-- Single Task Progress -->
            <div class="single-task-progress">
              <!-- Progress Info -->
              <div class="progress-info d-flex align-items-center justify-content-between">
                <h6 class="mb-1">Project Saasbox</h6><span class="mt-0 mb-1">89% done</span>
              </div>
              <!-- Progress -->
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-warning" style="width: 89%;" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="task-member-info d-flex align-items-center justify-content-between">
                <!-- Who working -->
                <div class="who-working mt-2"><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/7.jpg" alt=""></a><a href="#"><img class="shadow-sm" src="https://via.placeholder.com/8" alt=""></a></div>
                <!-- Add New Member -->
                <div class="addnew-member mt-2"><a class="btn btn-sm btn-warning btn-round" href="#">Add New</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pb-3"></div>
    </div>
    
    <!-- Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>

<?php include 'footer.php';?>