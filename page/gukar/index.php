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
      <div class="container direction-rtl">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row g-3">
              <div class="col-4">
                <div class="feature-card mx-auto text-center">
                  <div class="card mx-auto bg-gray"><img src="img/demo-img/gulp.png" alt=""></div>
                  <p class="mb-0">Gulp 4</p>
                </div>
              </div>
              <div class="col-4">
                <div class="feature-card mx-auto text-center">
                  <div class="card mx-auto bg-gray"><i class="bi bi-moon text-dark"></i></div>
                  <p class="mb-0">Dark Mode</p>
                </div>
              </div>
              <div class="col-4">
                <div class="feature-card mx-auto text-center">
                  <div class="card mx-auto bg-gray"><i class="bi bi-box-arrow-left text-info"></i></div>
                  <p class="mb-0">RTL Ready</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card mb-3">
          <div class="card-body">
            <h3>Customer Review</h3>
            <div class="testimonial-slide-three-wrapper">
              <div class="testimonial-slide3 testimonial-style3">
                <!-- Single Testimonial Slide -->
                <div class="single-testimonial-slide">
                  <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                    <h6 class="mb-2">The code looks clean, and the designs are excellent. I recommend.</h6><span class="d-block">Mrrickez, Themeforest</span>
                  </div>
                </div>
                <!-- Single Testimonial Slide -->
                <div class="single-testimonial-slide">
                  <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                    <h6 class="mb-2">All complete, <br> great craft.</h6><span class="d-block">Mazatlumm, Themeforest</span>
                  </div>
                </div>
                <!-- Single Testimonial Slide -->
                <div class="single-testimonial-slide">
                  <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                    <h6 class="mb-2">Awesome template! <br> Excellent support!</h6><span class="d-block">Vguntars, Themeforest</span>
                  </div>
                </div>
                <!-- Single Testimonial Slide -->
                <div class="single-testimonial-slide">
                  <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                    <h6 class="mb-2">Nice modern design, <br> I love the product.</h6><span class="d-block">electroMEZ, Themeforest</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card shadow-sm">
          <div class="card-body pb-0">
            <div class="chart-wrapper" style="position: relative;">
              <div id="lineChart1" style="min-height: 235px;"><div id="apexchartsqd72im1ji" class="apexcharts-canvas apexchartsqd72im1ji apexcharts-theme-light" style="width: 436px; height: 220px;"><svg id="SvgjsSvg1001" width="436" height="220" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(33.359375, 46)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMaskqd72im1ji"><rect id="SvgjsRect1010" width="400.8037109375" height="141.348" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqd72im1ji"></clipPath><clipPath id="nonForecastMaskqd72im1ji"></clipPath><clipPath id="gridRectMarkerMaskqd72im1ji"><rect id="SvgjsRect1011" width="395.8037109375" height="140.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1009" x1="0" y1="0" x2="0" y2="136.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="136.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1017" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1018" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1020" font-family="Helvetica, Arial, sans-serif" x="0" y="165.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1021">Jan</tspan><title>Jan</title></text><text id="SvgjsText1023" font-family="Helvetica, Arial, sans-serif" x="78.3607421875" y="165.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1024">Feb</tspan><title>Feb</title></text><text id="SvgjsText1026" font-family="Helvetica, Arial, sans-serif" x="156.721484375" y="165.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1027">Mar</tspan><title>Mar</title></text><text id="SvgjsText1029" font-family="Helvetica, Arial, sans-serif" x="235.0822265625" y="165.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1030">Apr</tspan><title>Apr</title></text><text id="SvgjsText1032" font-family="Helvetica, Arial, sans-serif" x="313.44296875000003" y="165.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1033">May</tspan><title>May</title></text><text id="SvgjsText1035" font-family="Helvetica, Arial, sans-serif" x="391.80371093750006" y="165.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1036">Jun</tspan><title>Jun</title></text></g><line id="SvgjsLine1037" x1="0" y1="137.348" x2="391.8037109375" y2="137.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1056" class="apexcharts-grid"><g id="SvgjsG1057" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1058" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1059" x1="0" y1="0" x2="0" y2="136.348" stroke="#dbeaea" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1061" x1="78.3607421875" y1="0" x2="78.3607421875" y2="136.348" stroke="#dbeaea" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1063" x1="156.721484375" y1="0" x2="156.721484375" y2="136.348" stroke="#dbeaea" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1065" x1="235.08222656249998" y1="0" x2="235.08222656249998" y2="136.348" stroke="#dbeaea" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1067" x1="313.44296875" y1="0" x2="313.44296875" y2="136.348" stroke="#dbeaea" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1069" x1="391.8037109375" y1="0" x2="391.8037109375" y2="136.348" stroke="#dbeaea" stroke-dasharray="4" class="apexcharts-gridline"></line></g><line id="SvgjsLine1060" x1="0" y1="137.348" x2="0" y2="143.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1062" x1="78.3607421875" y1="137.348" x2="78.3607421875" y2="143.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1064" x1="156.721484375" y1="137.348" x2="156.721484375" y2="143.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1066" x1="235.08222656249998" y1="137.348" x2="235.08222656249998" y2="143.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1068" x1="313.44296875" y1="137.348" x2="313.44296875" y2="143.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1070" x1="391.8037109375" y1="137.348" x2="391.8037109375" y2="143.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1072" x1="0" y1="136.348" x2="391.8037109375" y2="136.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1071" x1="0" y1="1" x2="0" y2="136.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1012" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1013" class="apexcharts-series" seriesName="DesigningxWorld" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1016" d="M0 116.8697142857143C27.426259765625 116.8697142857143 50.934482421875 58.2400742857143 78.36074218750001 58.2400742857143C105.78700195312501 58.2400742857143 129.29522460937503 76.93922857142859 156.72148437500002 76.93922857142859C184.147744140625 76.93922857142859 207.65596679687502 38.76178857142858 235.0822265625 38.76178857142858C262.508486328125 38.76178857142858 286.01670898437504 56.681811428571436 313.44296875000003 56.681811428571436C340.869228515625 56.681811428571436 364.377451171875 19.08872000000001 391.8037109375 19.08872000000001C391.8037109375 19.08872000000001 391.8037109375 19.08872000000001 391.8037109375 19.08872000000001 " fill="none" fill-opacity="1" stroke="rgba(1,52,212,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqd72im1ji)" pathTo="M 0 116.8697142857143C 27.426259765625 116.8697142857143 50.934482421875 58.2400742857143 78.36074218750001 58.2400742857143C 105.78700195312501 58.2400742857143 129.29522460937503 76.93922857142859 156.72148437500002 76.93922857142859C 184.147744140625 76.93922857142859 207.65596679687502 38.76178857142858 235.0822265625 38.76178857142858C 262.508486328125 38.76178857142858 286.01670898437504 56.681811428571436 313.44296875000003 56.681811428571436C 340.869228515625 56.681811428571436 364.377451171875 19.08872000000001 391.8037109375 19.08872000000001" pathFrom="M -1 136.348L -1 136.348L 78.36074218750001 136.348L 156.72148437500002 136.348L 235.0822265625 136.348L 313.44296875000003 136.348L 391.8037109375 136.348"></path><g id="SvgjsG1014" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1078" r="0" cx="0" cy="0" class="apexcharts-marker wydf8tvcci no-pointer-events" stroke="#ffffff" fill="#0134d4" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1015" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1073" x1="0" y1="0" x2="391.8037109375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1074" x1="0" y1="0" x2="391.8037109375" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1075" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1076" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1077" class="apexcharts-point-annotations"></g></g><text id="SvgjsText1005" font-family="Helvetica, Arial, sans-serif" x="10" y="14" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="400" fill="#8480ae" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Last 6 month sales</text><rect id="SvgjsRect1008" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1038" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG1039" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1040" font-family="Helvetica, Arial, sans-serif" x="20" y="47.7" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1041">700</tspan><title>700</title></text><text id="SvgjsText1042" font-family="Helvetica, Arial, sans-serif" x="20" y="67.17828571428572" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1043">600</tspan><title>600</title></text><text id="SvgjsText1044" font-family="Helvetica, Arial, sans-serif" x="20" y="86.65657142857144" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1045">500</tspan><title>500</title></text><text id="SvgjsText1046" font-family="Helvetica, Arial, sans-serif" x="20" y="106.13485714285716" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1047">400</tspan><title>400</title></text><text id="SvgjsText1048" font-family="Helvetica, Arial, sans-serif" x="20" y="125.61314285714288" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1049">300</tspan><title>300</title></text><text id="SvgjsText1050" font-family="Helvetica, Arial, sans-serif" x="20" y="145.09142857142857" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1051">200</tspan><title>200</title></text><text id="SvgjsText1052" font-family="Helvetica, Arial, sans-serif" x="20" y="164.56971428571427" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1053">100</tspan><title>100</title></text><text id="SvgjsText1054" font-family="Helvetica, Arial, sans-serif" x="20" y="184.04799999999997" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1055">0</tspan><title>0</title></text></g></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 110px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(1, 52, 212);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 437px; height: 236px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
        </div>
      </div>
      <div class="pb-3"></div>
    </div>
    
<?php include 'footer.php';?>