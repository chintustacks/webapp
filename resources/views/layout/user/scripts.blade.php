 <!-- JS Global Compulsory -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/popper.js/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../../assets/vendor/appear.js"></script>
    <script src="../../assets/vendor/circles/circles.min.js"></script>
    <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="../../assets/vendor/jquery.easypin.custom/dist/jquery.easypin.js"></script>

    <!-- JS Unify -->
    <script src="../../assets/js/hs.core.js"></script>
    <script src="../../assets/js/components/hs.header.js"></script>
    <script src="../../assets/js/helpers/hs.hamburgers.js"></script>
    <script src="../../assets/js/components/hs.scroll-nav.js"></script>
    <script src="../../assets/js/components/hs.progress-bar.js"></script>
    <script src="../../assets/js/components/hs.chart-pie.js"></script>
    <script src="../../assets/js/components/hs.carousel.js"></script>
    <script src="../../assets/js/components/hs.map.pin.js"></script>
    <script src="../../assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="../../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of progressbar
        var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
          direction: 'horizontal',
          indicatorSelector: '.js-hr-progress-bar-indicator'
        });

        // initialization of chart pie
        var items = $.HSCore.components.HSChartPie.init('.js-pie');

        // initialization of pin map
        var markers1 = {
          0: {
            "image_url": "assets/img-temp/800x450/img1.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget1",
            "coords": {
              "lat": "149",
              "long": "168"
            }
          },
          1: {
            "image_url": "assets/img-temp/800x450/img2.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget2",
            "coords": {
              "lat": "179",
              "long": "205"
            }
          },
          2: {
            "image_url": "assets/img-temp/800x450/img3.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget3",
            "coords": {
              "lat": "241",
              "long": "373"
            }
          },
          3: {
            "image_url": "assets/img-temp/800x450/img4.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget4",
            "coords": {
              "lat": "543",
              "long": "244"
            }
          },
          4: {
            "image_url": "assets/img-temp/800x450/img5.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget5",
            "coords": {
              "lat": "601",
              "long": "268"
            }
          },
          5: {
            "image_url": "assets/img-temp/800x450/img6.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget6",
            "coords": {
              "lat": "636",
              "long": "260"
            }
          },
          6: {
            "image_url": "assets/img-temp/800x450/img7.jpg",
            "date": "117:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget7",
            "coords": {
              "lat": "614",
              "long": "118"
            }
          },
          7: {
            "image_url": "assets/img-temp/800x450/img1.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget8",
            "coords": {
              "lat": "701",
              "long": "70.125"
            }
          },
          8: {
            "image_url": "assets/img-temp/800x450/img2.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget9",
            "coords": {
              "lat": "950",
              "long": "177"
            }
          },
          9: {
            "image_url": "assets/img-temp/800x450/img3.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget10",
            "coords": {
              "lat": "1079",
              "long": "463"
            }
          },
          10: {
            "image_url": "assets/img-temp/800x450/img4.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget 11",
            "coords": {
              "lat": "717",
              "long": "455"
            }
          },
          11: {
            "image_url": "assets/img-temp/800x450/img5.jpg",
            "date": "17:48, April 27, 2015",
            "location": "South Africa",
            "title": "Proin egestas purus eget 12",
            "coords": {
              "lat": "625",
              "long": "510"
            }
          },
          canvas: {
            src: 'assets/img/maps/map.svg',
            width: 1170,
            height: 594
          }
        };

        $.HSCore.components.HSPinMap.init('.js-pin-map', {
          data: {
            "map-pin": markers1
          }
        });
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700
        });
      });
    </script>