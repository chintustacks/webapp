@extends('layout.user.master')

@section('content')

<main>

   @include('layout.user.header')

      <!-- Section Promo -->
      <section id="home">
        <div class="js-carousel"
             data-infinite="true"
             data-fade="true"
             data-speed="5000"
             data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-30">
          <div class="js-slide u-bg-overlay g-color-white g-bg-black-opacity-0_5--after g-bg-img-hero" style="background-image: url(assets/img-temp/1920x1280/img2.jpg);">
            <div class="u-bg-overlay__inner g-flex-centered g-height-100vh g-min-height-600 g-py-40">
              <div class="container">
                <h2 class="h2 text-uppercase g-line-height-1_2 g-letter-spacing-1 g-font-size-40 g-font-size-65--md g-color-white g-mb-40">For some,
                  <br> <strong class="g-font-weight-700er">food is a luxury</strong></h2>

                <div class="g-mb-45">
                  <div class="d-inline-flex text-uppercase g-font-weight-600 g-font-size-11 g-mr-10 g-mb-10 g-mb-0--md">
                    <span class="u-label u-ns-bg-v7-right g-bg-black g-px-20 g-py-14">Need</span>
                    <span class="u-label g-color-gray-dark-v1 g-font-weight-700 g-bg-primary g-px-20 g-py-14">$1 250 000</span>
                  </div>

                  <div class="d-inline-flex text-uppercase g-font-weight-600 g-font-size-11 g-mb-10 g-mb-0--md">
                    <span class="u-label u-ns-bg-v7-right g-bg-black g-px-20 g-py-14">We have</span>
                    <span class="u-label g-color-gray-dark-v1 g-font-weight-700 g-bg-primary g-px-20 g-py-14">$175 586</span>
                  </div>
                </div>

                <p class="g-max-width-800 g-color-white-opacity-0_7 g-mb-45">Donec erat urna, tincidunt at leo non, blandit finibus ante. Nunc venenatis risus in finibus dapibus. Ut ac massa sodales, mattis enim id, efficitur tortor</p>

                <div>
                  <a href="#" class="btn btn-xxl text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-color-gray-dark-v1--hover rounded-0 g-py-10 g-py-20--md g-px-15 g-px-25--md g-mr-10">
                    <i class="fa fa-heart"></i> Donate now</a>
                  <a href="#" class="btn btn-xxl text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-color-gray-dark-v1--hover rounded-0 g-py-10 g-py-20--md g-px-15 g-px-25--md">Learn more</a>
                </div>
              </div>
            </div>
          </div>

          <div class="js-slide u-bg-overlay g-color-white g-bg-black-opacity-0_5--after g-bg-img-hero" style="background-image: url(assets/img-temp/1920x1280/img1.jpg);">
            <div class="u-bg-overlay__inner g-flex-centered g-height-100vh g-min-height-600 g-py-40">
              <div class="container">
                <h2 class="h2 text-uppercase g-line-height-1_2 g-letter-spacing-1 g-font-size-40 g-font-size-65--md g-color-white g-mb-40">For some,
                  <br><strong class="g-font-weight-700er">support is a necessity</strong></h2>

                <div class="g-mb-45">
                  <div class="d-inline-flex text-uppercase g-font-weight-600 g-font-size-11 g-mr-10 g-mb-10 g-mb-0--md">
                    <span class="u-label u-ns-bg-v7-right g-bg-black g-px-20 g-py-14">Need</span>
                    <span class="u-label g-color-gray-dark-v1 g-font-weight-700 g-bg-primary g-px-20 g-py-14">$1 250 000</span>
                  </div>

                  <div class="d-inline-flex text-uppercase g-font-weight-600 g-font-size-11 g-mb-10 g-mb-0--md">
                    <span class="u-label u-ns-bg-v7-right g-bg-black g-px-20 g-py-14">We have</span>
                    <span class="u-label g-color-gray-dark-v1 g-font-weight-700 g-bg-primary g-px-20 g-py-14">$175 586</span>
                  </div>
                </div>

                <p class="g-max-width-800 g-color-white-opacity-0_7 g-mb-45">Donec erat urna, tincidunt at leo non, blandit finibus ante. Nunc venenatis risus in finibus dapibus. Ut ac massa sodales, mattis enim id, efficitur tortor</p>

                <div>
                  <a href="#" class="btn btn-xxl text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-color-gray-dark-v1--hover rounded-0 g-py-20 g-px-25 g-mr-10">
                    <i class="fa fa-heart"></i> Donate now</a>
                  <a href="#" class="btn btn-xxl text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-color-gray-dark-v1--hover rounded-0 g-py-20 g-px-25">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Promo -->
          
           <!-- Section Content -->
      <section id="ourProjects" class="g-bg-gray-light-v5 g-py-100">
        <div class="container g-max-width-780 text-center g-mb-60">
          <div class="text-center u-heading-v8-1 g-mb-35">
            <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 mb-0">Our
              <strong class="g-bg-gray-dark-v1 g-color-primary">projects</strong></h2>
          </div>

          <p class="mb-0">Nullam in diam arcu. Etiam nisl justo, tempor scelerisque sagittis vel, bibendum vestibulum metus. Donec eget nunc neque.</p>
        </div>

        <div class="container">
          <!-- Carousel -->
          <div class="js-carousel g-pb-60 g-mx-minus-15"
               data-slides-show="3"
               data-slides-scroll="3"
               data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-0 text-center"
               data-responsive='[{
                 "breakpoint": 1200,
                 "settings": {
                   "slidesToShow": 2,
                   "slidesToScroll": 2
                 }
               }, {
                 "breakpoint": 768,
                 "settings": {
                   "slidesToShow": 1,
                   "slidesToScroll": 1
                 }
               }]'>
            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="g-bg-white g-color-gray-light-v1">
                <!-- Article Image -->
                <img class="w-100" src="assets/img-temp/800x496/img1.jpg" alt="Image Description">
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="g-pa-20">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-gray-dark-v1 g-mb-15">Aenean bibendum purus eu nisi pulvinar venenatis vitae</h4>
                  <p class="g-mb-25">Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et. Vivamus sit amet scelerisque leo.</p>

                  <footer>
                    <div class="d-md-table">
                      <div class="d-block d-md-table-cell g-mb-15 g-mb-0--md">
                        <div class="d-flex justify-content-between">
                          <div class="g-width-70">
                            <!-- Chart Pie -->
                            <div class="js-pie g-color-gray-dark-v4"
                                 data-circles-value="16"
                                 data-circles-max-value="100"
                                 data-circles-bg-color="#dedede"
                                 data-circles-fg-color="#f5f219"
                                 data-circles-radius="35"
                                 data-circles-stroke-width="4"
                                 data-circles-font-size="14"
                                 data-circles-font-weight="700"
                                 data-circles-additional-text="%"
                                 data-circles-duration="2000"
                                 data-circles-scroll-animate="true"></div>
                            <!-- End Chart Pie -->
                          </div>

                          <div class="align-self-center text-right text-md-left g-font-size-13 g-px-20">
                            <strong class="g-color-gray-dark-v1">$ 258 750</strong>
                            <em class="g-font-style-normal d-block">25 days left</em>
                          </div>
                        </div>
                      </div>

                      <div class="d-block d-md-table-cell text-right g-valign-middle">
                        <a class="btn btn-block u-btn-primary text-uppercase g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-brd-none rounded-0 g-py-12 g-py-23--md g-px-15 g-px-25--md" href="#">Donate Now</a>
                      </div>
                    </div>
                  </footer>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="g-bg-white g-color-gray-light-v1">
                <!-- Article Image -->
                <img class="w-100" src="assets/img-temp/800x496/img2.jpg" alt="Image Description">
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="g-pa-20">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-gray-dark-v1 g-mb-15">Aenean bibendum purus eu nisi pulvinar venenatis vitae</h4>
                  <p class="g-mb-25">Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et. Vivamus sit amet scelerisque leo.</p>

                  <footer>
                    <div class="d-md-table">
                      <div class="d-block d-md-table-cell g-mb-15 g-mb-0--md">
                        <div class="d-flex justify-content-between">
                          <div class="g-width-70">
                            <!-- Chart Pie -->
                            <div class="js-pie g-color-gray-dark-v4"
                                 data-circles-value="26"
                                 data-circles-max-value="100"
                                 data-circles-bg-color="#dedede"
                                 data-circles-fg-color="#f5f219"
                                 data-circles-radius="35"
                                 data-circles-stroke-width="4"
                                 data-circles-font-size="14"
                                 data-circles-font-weight="700"
                                 data-circles-additional-text="%"
                                 data-circles-duration="2000"
                                 data-circles-scroll-animate="true"></div>
                            <!-- End Chart Pie -->
                          </div>

                          <div class="align-self-center text-right text-md-left g-font-size-13 g-px-20">
                            <strong class="g-color-gray-dark-v1">$ 258 750</strong>
                            <em class="g-font-style-normal d-block">25 days left</em>
                          </div>
                        </div>
                      </div>

                      <div class="d-block d-md-table-cell text-right g-valign-middle">
                        <a class="btn btn-block u-btn-primary text-uppercase g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-brd-none rounded-0 g-py-12 g-py-23--md g-px-15 g-px-25--md" href="#">Donate Now</a>
                      </div>
                    </div>
                  </footer>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="g-bg-white g-color-gray-light-v1">
                <!-- Article Image -->
                <img class="w-100" src="assets/img-temp/800x496/img3.jpg" alt="Image Description">
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="g-pa-20">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-gray-dark-v1 g-mb-15">Aenean bibendum purus eu nisi pulvinar venenatis vitae</h4>
                  <p class="g-mb-25">Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et. Vivamus sit amet scelerisque leo.</p>

                  <footer>
                    <div class="d-md-table">
                      <div class="d-block d-md-table-cell g-mb-15 g-mb-0--md">
                        <div class="d-flex justify-content-between">
                          <div class="g-width-70">
                            <!-- Chart Pie -->
                            <div class="js-pie g-color-gray-dark-v4"
                                 data-circles-value="36"
                                 data-circles-max-value="100"
                                 data-circles-bg-color="#dedede"
                                 data-circles-fg-color="#f5f219"
                                 data-circles-radius="35"
                                 data-circles-stroke-width="4"
                                 data-circles-font-size="14"
                                 data-circles-font-weight="700"
                                 data-circles-additional-text="%"
                                 data-circles-duration="2000"
                                 data-circles-scroll-animate="true"></div>
                            <!-- End Chart Pie -->
                          </div>

                          <div class="align-self-center text-right text-md-left g-font-size-13 g-px-20">
                            <strong class="g-color-gray-dark-v1">$ 258 750</strong>
                            <em class="g-font-style-normal d-block">25 days left</em>
                          </div>
                        </div>
                      </div>

                      <div class="d-block d-md-table-cell text-right g-valign-middle">
                        <a class="btn btn-block u-btn-primary text-uppercase g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-brd-none rounded-0 g-py-12 g-py-23--md g-px-15 g-px-25--md" href="#">Donate Now</a>
                      </div>
                    </div>
                  </footer>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="g-bg-white g-color-gray-light-v1">
                <!-- Article Image -->
                <img class="w-100" src="assets/img-temp/800x496/img4.jpg" alt="Image Description">
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="g-pa-20">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-gray-dark-v1 g-mb-15">Aenean bibendum purus eu nisi pulvinar venenatis vitae</h4>
                  <p class="g-mb-25">Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et. Vivamus sit amet scelerisque leo.</p>

                  <footer>
                    <div class="d-md-table">
                      <div class="d-block d-md-table-cell g-mb-15 g-mb-0--md">
                        <div class="d-flex justify-content-between">
                          <div class="g-width-70">
                            <!-- Chart Pie -->
                            <div class="js-pie g-color-gray-dark-v4"
                                 data-circles-value="16"
                                 data-circles-max-value="100"
                                 data-circles-bg-color="#dedede"
                                 data-circles-fg-color="#f5f219"
                                 data-circles-radius="35"
                                 data-circles-stroke-width="4"
                                 data-circles-font-size="14"
                                 data-circles-font-weight="700"
                                 data-circles-additional-text="%"
                                 data-circles-duration="2000"
                                 data-circles-scroll-animate="true"></div>
                            <!-- End Chart Pie -->
                          </div>

                          <div class="align-self-center text-right text-md-left g-font-size-13 g-px-20">
                            <strong class="g-color-gray-dark-v1">$ 258 750</strong>
                            <em class="g-font-style-normal d-block">25 days left</em>
                          </div>
                        </div>
                      </div>

                      <div class="d-block d-md-table-cell text-right g-valign-middle">
                        <a class="btn btn-block u-btn-primary text-uppercase g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-brd-none rounded-0 g-py-12 g-py-23--md g-px-15 g-px-25--md" href="#">Donate Now</a>
                      </div>
                    </div>
                  </footer>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="g-bg-white g-color-gray-light-v1">
                <!-- Article Image -->
                <img class="w-100" src="assets/img-temp/800x496/img5.jpg" alt="Image Description">
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="g-pa-20">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-gray-dark-v1 g-mb-15">Aenean bibendum purus eu nisi pulvinar venenatis vitae</h4>
                  <p class="g-mb-25">Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et. Vivamus sit amet scelerisque leo.</p>

                  <footer>
                    <div class="d-md-table">
                      <div class="d-block d-md-table-cell g-mb-15 g-mb-0--md">
                        <div class="d-flex justify-content-between">
                          <div class="g-width-70">
                            <!-- Chart Pie -->
                            <div class="js-pie g-color-gray-dark-v4"
                                 data-circles-value="26"
                                 data-circles-max-value="100"
                                 data-circles-bg-color="#dedede"
                                 data-circles-fg-color="#f5f219"
                                 data-circles-radius="35"
                                 data-circles-stroke-width="4"
                                 data-circles-font-size="14"
                                 data-circles-font-weight="700"
                                 data-circles-additional-text="%"
                                 data-circles-duration="2000"
                                 data-circles-scroll-animate="true"></div>
                            <!-- End Chart Pie -->
                          </div>

                          <div class="align-self-center g-font-size-13 g-px-20">
                            <strong class="g-color-gray-dark-v1">$ 258 750</strong>
                            <em class="g-font-style-normal d-block">25 days left</em>
                          </div>
                        </div>
                      </div>

                      <div class="d-block d-md-table-cell text-right g-valign-middle">
                        <a class="btn btn-block u-btn-primary text-uppercase g-font-size-11 g-font-weight-700 g-brd-none rounded-0 g-px-25 g-py-23" href="#">Donate Now</a>
                      </div>
                    </div>
                  </footer>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>
          </div>
          <!-- End Carousel -->
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="yourHelp" class="g-py-100">
        <div class="container g-max-width-780 text-center g-mb-60">
          <div class="text-center u-heading-v8-1 g-mb-35">
            <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 mb-0">How you
              <strong class="g-bg-gray-dark-v1 g-color-primary">can help</strong></h2>
          </div>

          <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <!-- Article -->
              <article class="row align-items-stretch text-center g-color-gray-dark-v5 g-bg-black mx-0">
                <!--Article Content-->
                <div class="col-sm-6 u-ns-bg-v1-bottom u-ns-bg-v1-right--md g-bg-black g-px-30 g-py-45">
                  <h3 class="text-uppercase g-font-size-20 g-color-white g-mb-25">Became a
                    <strong class="d-block g-font-weight-700 g-color-primary">Volunteer</strong></h3>
                  <p class="g-mb-25">Praesent pulvinar gravida efficitur. Aenean bibendum purus eu nisi pulvinar venenatis vitae non velit.</p>
                  <a class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-color-gray-dark-v1--hover rounded-0 g-py-10 g-px-25" href="#">Join Us</a>
                </div>
                <!-- End Article Content -->

                <!-- Article Image -->
                <div class="col-sm-6 px-0 u-bg-overlay g-bg-black-opacity-0_2--after g-bg-img-hero g-min-height-300"
                     data-bg-img-src="assets/img-temp/800x842/img1.jpg"></div>
                <!-- End Article Image -->
              </article>
              <!-- End Article -->
            </div>

            <div class="col-lg-6">
              <!-- Article -->
              <article class="row align-items-stretch text-center g-color-gray-dark-v5 g-bg-black mx-0">
                <!-- Article Image -->
                <div class="col-sm-6 px-0 u-bg-overlay g-bg-black-opacity-0_2--after g-bg-img-hero g-min-height-300"
                     data-bg-img-src="assets/img-temp/800x842/img2.jpg"></div>
                <!-- End Article Image -->

                <!--Article Content-->
                <div class="col-sm-6 u-ns-bg-v1-top u-ns-bg-v1-left--md g-bg-black g-px-30 g-py-45">
                  <h3 class="text-uppercase g-font-size-20 g-color-white g-mb-25">Make a
                    <strong class="d-block g-font-weight-700 g-color-primary">Dontation</strong></h3>
                  <p class="g-mb-25">Praesent pulvinar gravida efficitur. Aenean bibendum purus eu nisi pulvinar venenatis vitae non velit.</p>
                  <a class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-color-gray-dark-v1--hover rounded-0 g-py-10 g-px-25" href="#">Join Us</a>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->



      <!-- Section Content -->
      <section class="u-bg-overlay g-bg-black-opacity-0_7--after g-bg-img-hero g-py-100" style="background-image: url(assets/img-temp/1400x773/img1.jpg);">
        <div class="u-bg-overlay__inner">
          <div class="container">
            <!-- Products Block -->
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <!-- Article -->
                <article class="u-shadow-v19 g-bg-primary">
                  <!-- Article Image -->
                  <img class="w-100" src="assets/img-temp/1200x811/img1.jpg" alt="Image Description">
                  <!-- End Article Image -->

                  <!-- Article Content -->
                  <div class="g-py-40 g-px-35">
                    <h3 class="h6 text-uppercase g-font-weight-700 g-mb-15">
                      In total we collected
                      <span class="d-block g-color-black g-line-height-1_2 g-letter-spacing-minus-2 g-font-size-46">$8 789 576.00</span>
                    </h3>
                    <p class="g-color-black-opacity-0_5 g-mb-35">Runc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel odio gravida sollicitudin tortor.</p>
                    <a class="btn btn-block text-uppercase u-btn-black g-font-size-11 g-font-weight-700 g-brd-none rounded-0 g-px-25 g-py-16" href="#">
                      <i class="fa fa-heart g-font-size-18 g-color-primary g-valign-middle g-mr-6"></i>
                      <span class="g-valign-middle">Donate Now</span>
                    </a>
                  </div>
                  <!-- End Article Content -->
                </article>
                <!-- End Article -->
              </div>

              <div class="col-md-6 col-lg-8 g-py-20">
                <div class="g-color-white g-mb-45">
                  <h4 class="text-uppercase g-font-weight-700 g-font-size-26 g-color-primary mb-0">We make world better</h4>
                  <h2 class="display-5 text-uppercase g-color-white g-font-weight-700 g-font-size-46 g-mb-30">Let's do this together</h2>
                  <p class="mb-0">Aenean bibendum purus eu nisi pulvinar venenatis vitae non velit. Sed et eleifend mi. Fusce dictum orci libero, congue scelerisque lectus pulvinar eu. Suspendisse pulvinar facilisis ligula vel pharetra. Vestibulum volutpat porttitor ex a rutrum. Aenean consectetur risus ultricies enim finibus lobortis non at ipsum.</p>
                </div>

                <!-- Icon Blocks -->
                <div class="row g-mb-90">
                  <div class="col-md-6 g-mb-30 g-mb-0--md">
                    <!-- Icon Blocks -->

                    <div class="media g-mb-25">
                      <div class="d-flex align-self-center g-mr-5">
                        <span class="d-block g-color-primary g-font-size-38 g-line-height-1">
                          <i class="icon-education-024"></i>
                        </span>
                      </div>

                      <div class="media-body align-self-center">
                        <h3 class="h6 text-uppercase g-font-weight-700 g-color-white mb-0">Education</h3>
                      </div>
                    </div>

                    <p class="mb-0">Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis. Mauris molestie ullamcorper nisl eget hendrerit.</p>
                    <!-- End Icon Blocks -->
                  </div>

                  <div class="col-md-6">
                    <!-- Icon Blocks -->
                    <div class="media g-mb-25">
                      <div class="d-flex align-self-center g-mr-5">
                        <span class="d-block g-color-primary g-font-size-38 g-line-height-1">
                          <i class="icon-medical-004"></i>
                        </span>
                      </div>

                      <div class="media-body align-self-center">
                        <h3 class="h6 text-uppercase g-font-weight-700 g-color-white mb-0">Health</h3>
                      </div>
                    </div>

                    <p class="mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio purus a libero luctus. Proin tempor dolor ac dolor feugiat, placerat malesuada.</p>
                    <!-- End Icon Blocks -->
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Progress Bar -->
                <div class="js-hr-progress-bar progress g-height-20 rounded-0 g-overflow-visible g-bg-gray-dark-v2 g-px-6 g-mb-20">
                  <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel g-relative-centered--y g-height-6 g-bg-primary" role="progressbar" style="width: 56.7069%;" aria-valuenow="8789576" aria-valuemin="0" aria-valuemax="15500000">
                    <div class="text-center u-progress__pointer-v2 g-font-size-10 g-color-gray-dark-v1 g-bg-primary g-mb-20">$8 789 576</div>
                  </div>
                </div>
                <!-- End Progress Bar -->

                <div class="clearfix text-uppercase g-color-white g-font-size-11">
                  <em class="float-right g-font-style-normal g-font-weight-600">Our Goal:
                    <span class="g-color-primary">$15 500 000</span></em>
                  Time left: <span class="g-font-weight-600 g-color-primary">365</span> Days
                </div>
              </div>
            </div>
            <!-- End Products Block -->
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section class="g-py-100">
        <div class="container g-max-width-780 text-center g-mb-60">
          <div class="text-center u-heading-v8-1 g-mb-35">
            <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 mb-0">Emergency
              <strong class="g-bg-gray-dark-v1 g-color-primary">help</strong></h2>
          </div>

          <p class="mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio. Donec eu nulla leo. Vivamus risus lacus</p>
        </div>

        <div class="container">
          <!-- Carousel -->
          <div class="js-carousel g-pb-85 g-mx-minus-15"
               data-slides-show="2"
               data-arrows-classes="u-arrow-v1 g-pos-abs g-absolute-centered--x--md g-bottom-0 g-width-45 g-height-45 g-color-white g-color-black--hover g-theme-bg-gray-light-v3 g-bg-primary--hover g-transition-0_2 g-transition--ease-in"
               data-arrow-left-classes="fa fa-chevron-left g-left-15 g-left-50x--md g-ml-minus-40--md"
               data-arrow-right-classes="fa fa-chevron-right g-right-15 g-left-50x--md g-ml-40--md"
               data-responsive='[{
                 "breakpoint": 1200,
                 "settings": {
                   "slidesToShow": 2
                 }
               }, {
                 "breakpoint": 992,
                 "settings": {
                   "slidesToShow": 1
                 }
               }]'>
            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="clearfix g-bg-size-cover g-pos-rel"
                       data-bg-img-src="assets/img-temp/800x496/img7.jpg">
                <!-- Article Content -->
                <div class="float-right g-color-gray-light-v1 g-bg-black-opacity-0_7 g-width-50x--sm g-pa-30">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-white g-mb-15">Education Project</h4>
                  <p class="g-mb-45">Mauris molestie ullamcorper nisl eget hendrerit. Sed faucibus suscipit justo, eu dignissim tellus pretium et.</p>

                  <!-- Progress Bar -->
                  <div class="js-hr-progress-bar progress g-height-10 rounded-0 g-overflow-visible g-bg-gray-dark-v2 g-px-3 g-mb-20">
                    <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel g-relative-centered--y g-height-5 g-bg-primary" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                      <div class="text-center u-progress__pointer-v2 g-font-size-10 g-color-gray-dark-v1 g-bg-primary g-mb-20">76%</div>
                    </div>
                  </div>
                  <!-- End Progress Bar -->

                  <div class="clearfix text-uppercase g-color-white g-font-size-11 g-mb-35">
                    <em class="float-right g-font-style-normal g-font-weight-600"><span class="g-color-primary">274</span> Days Left</em> Our Goal:
                    <span class="g-font-weight-600 g-color-primary">$760 000</span>
                  </div>

                  <a class="btn btn-block text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 rounded-0 g-py-10 g-py-20--md g-px-15 g-px-25--md" href="#">
                    <i class="fa fa-heart g-font-size-18 g-valign-middle g-mr-6"></i>
                    <span class="g-valign-middle">Donate Now</span>
                  </a>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="clearfix g-bg-size-cover g-pos-rel"
                       data-bg-img-src="assets/img-temp/800x496/img6.jpg">
                <!-- Article Content -->
                <div class="float-right g-color-gray-light-v1 g-bg-black-opacity-0_7 g-width-50x--sm g-pa-30">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-white g-mb-15">Water Project</h4>
                  <p class="g-mb-45">Mauris molestie ullamcorper nisl eget hendrerit. Sed faucibus suscipit justo, eu dignissim tellus pretium et.</p>

                  <!-- Progress Bar -->
                  <div class="js-hr-progress-bar progress g-height-10 rounded-0 g-overflow-visible g-bg-gray-dark-v2 g-px-3 g-mb-20">
                    <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel g-relative-centered--y g-height-5 g-bg-primary" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100">
                      <div class="text-center u-progress__pointer-v2 g-font-size-10 g-color-gray-dark-v1 g-bg-primary g-mb-20">42%</div>
                    </div>
                  </div>
                  <!-- End Progress Bar -->

                  <div class="clearfix text-uppercase g-color-white g-font-size-11 g-mb-35">
                    <em class="float-right g-font-style-normal g-font-weight-600"><span class="g-color-primary">199</span> Days Left</em> Our Goal:
                    <span class="g-font-weight-600 g-color-primary">$2 600 000</span>
                  </div>

                  <a class="btn btn-block text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 rounded-0 g-py-10 g-py-20--md g-px-15 g-px-25--md" href="#">
                    <i class="fa fa-heart g-font-size-18 g-valign-middle g-mr-6"></i>
                    <span class="g-valign-middle">Donate Now</span>
                  </a>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="clearfix g-bg-size-cover g-pos-rel"
                       data-bg-img-src="assets/img-temp/800x496/img7.jpg">
                <!-- Article Content -->
                <div class="float-right g-color-gray-light-v1 g-bg-black-opacity-0_7 g-width-50x--sm g-pa-30">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-white g-mb-15">Education Project</h4>
                  <p class="g-mb-45">Mauris molestie ullamcorper nisl eget hendrerit. Sed faucibus suscipit justo, eu dignissim tellus pretium et.</p>

                  <!-- Progress Bar -->
                  <div class="js-hr-progress-bar progress g-height-10 rounded-0 g-overflow-visible g-bg-gray-dark-v2 g-px-3 g-mb-20">
                    <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel g-relative-centered--y g-height-5 g-bg-primary" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                      <div class="text-center u-progress__pointer-v2 g-font-size-10 g-color-gray-dark-v1 g-bg-primary g-mb-20">76%</div>
                    </div>
                  </div>
                  <!-- End Progress Bar -->

                  <div class="clearfix text-uppercase g-color-white g-font-size-11 g-mb-35">
                    <em class="float-right g-font-style-normal g-font-weight-600"><span class="g-color-primary">274</span> Days Left</em> Our Goal:
                    <span class="g-font-weight-600 g-color-primary">$760 000</span>
                  </div>

                  <a class="btn btn-block text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 rounded-0 g-py-10 g-py-20--md g-px-15 g-px-25--md" href="#">
                    <i class="fa fa-heart g-font-size-18 g-valign-middle g-mr-6"></i>
                    <span class="g-valign-middle">Donate Now</span>
                  </a>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="js-slide g-px-15">
              <!-- Article -->
              <article class="clearfix g-bg-size-cover g-pos-rel"
                       data-bg-img-src="assets/img-temp/800x496/img6.jpg">
                <!-- Article Content -->
                <div class="float-right g-color-gray-light-v1 g-bg-black-opacity-0_7 g-width-50x--sm g-pa-30">
                  <h4 class="text-uppercase g-font-weight-700 h6 g-color-white g-mb-15">Water Project</h4>
                  <p class="g-mb-45">Mauris molestie ullamcorper nisl eget hendrerit. Sed faucibus suscipit justo, eu dignissim tellus pretium et.</p>

                  <!-- Progress Bar -->
                  <div class="js-hr-progress-bar progress g-height-10 rounded-0 g-overflow-visible g-bg-gray-dark-v2 g-px-3 g-mb-20">
                    <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel g-relative-centered--y g-height-5 g-bg-primary" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100">
                      <div class="text-center u-progress__pointer-v2 g-font-size-10 g-color-gray-dark-v1 g-bg-primary g-mb-20">42%</div>
                    </div>
                  </div>
                  <!-- End Progress Bar -->

                  <div class="clearfix text-uppercase g-color-white g-font-size-11 g-mb-35">
                    <em class="float-right g-font-style-normal g-font-weight-600"><span class="g-color-primary">199</span> Days Left</em> Our Goal:
                    <span class="g-font-weight-600 g-color-primary">$2 600 000</span>
                  </div>

                  <a class="btn btn-block text-uppercase u-btn-primary g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 rounded-0 g-py-10 g-py-20--md g-px-15 g-px-25--md" href="#">
                    <i class="fa fa-heart g-font-size-18 g-valign-middle g-mr-6"></i>
                    <span class="g-valign-middle">Donate Now</span>
                  </a>
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>
          </div>
          <!-- End Carousel -->
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="successStories" class="u-bg-overlay g-bg-black-opacity-0_7--after g-bg-img-hero g-py-100" style="background-image: url(assets/img-temp/1920x964/img1.jpg);">
        <div class="u-bg-overlay__inner">
          <div class="container g-max-width-780 text-center g-mb-60">
            <div class="text-center u-heading-v8-1 g-mb-35">
              <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 g-color-white mb-0">Success
                <strong class="g-bg-gray-dark-v1 g-color-primary">stories</strong></h2>
            </div>

            <p class="mb-0">Sed faucibus suscipit justo, eu dignissim tellus pretium et. Nam volutpat placerat libero sit amet elementum. Curabitur et neque et mauris maximus efficitur.</p>
          </div>

          <div class="container">
            <!-- End Carousel v19 -->
            <section class="js-carousel g-pt-60 g-pt-0--md"
                     data-infinite="true"
                     data-arrows-classes="u-arrow-v1 g-pos-abs g-absolute-centered--x--md g-top-0 g-width-40 g-height-40 g-color-white g-color-black--hover g-bg-black g-bg-primary--hover g-transition-0_2 g-transition--ease-in"
                     data-arrow-left-classes="fa fa-chevron-left g-left-0 g-left-50x--md g-ml-35--md"
                     data-arrow-right-classes="fa fa-chevron-right g-right-0 g-right-50x--md g-ml-85--md">
              <div class="js-slide">
                <div class="row">
                  <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9 g-mb-0--md g-mb-30">
                      <iframe src="//player.vimeo.com/video/6202666" width="530" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                  </div>

                  <div class="col-md-6 g-color-white g-pt-80--md">
                    <h3 class="text-uppercase g-font-weight-700 g-font-size-18 g-color-white g-mb-5">Catherine Cameron</h3>
                    <h4 class="text-uppercase g-font-weight-700 g-font-size-10 g-color-primary g-mb-16">Molestie ullamcorper nisl eget</h4>
                    <p class="g-mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio. Donec eu nulla leo. Vivamus risus lacus, viverra eu maximus non, tincidunt sodales massa. Duis vulputate purus a libero luctus, sed dictum ante interdum. Nam vel leo ultricies, pretium magna at, consequat augue. Quisque bibendum vel enim quis pulvinar. Proin ac quam erat.</p>
                  </div>
                </div>
              </div>

              <div class="js-slide">
                <div class="row">
                  <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9 g-mb-0--md g-mb-30">
                      <iframe width="100%" src="//www.youtube.com/embed/Squv4KI751w" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>

                  <div class="col-md-6 g-color-white g-pt-80--md">
                    <h3 class="text-uppercase g-font-weight-700 g-font-size-18 g-color-white g-mb-5">Catherine Cameron</h3>
                    <h4 class="text-uppercase g-font-weight-700 g-font-size-10 g-color-primary g-mb-16">Molestie ullamcorper nisl eget</h4>
                    <p class="g-mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio. Donec eu nulla leo. Vivamus risus lacus, viverra eu maximus non, tincidunt sodales massa. Duis vulputate purus a libero luctus, sed dictum ante interdum. Nam vel leo ultricies, pretium magna at, consequat augue. Quisque bibendum vel enim quis pulvinar. Proin ac quam erat.</p>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Carousel v19 -->
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="donators" class="g-py-100">
        <div class="container g-max-width-780 text-center g-mb-60">
          <div class="text-center u-heading-v8-1 g-mb-35">
            <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 mb-0">Best
              <strong class="g-bg-gray-dark-v1 g-color-primary">donators</strong></h2>
          </div>

          <p class="mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio. Donec eu nulla leo. Vivamus risus lacus</p>
        </div>

        <!-- Team Block -->
        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-4 col-lg-2 g-mb-50 g-mb-0--lg">
              <!-- Figure -->
              <figure class="text-center">
                <!-- Figure Image -->
                <div class="mx-auto g-width-130 g-height-130 g-brd-around g-brd-5 g-brd-white rounded-circle g-mb-15">
                  <img class="g-width-120 g-height-120 rounded-circle" src="assets/img-temp/120x120/img1.jpg" alt="Image Description">
                </div>
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="h6 text-uppercase g-color-black g-font-weight-700 g-mb-5">Mark Spencer</h4>
                <p class="text-lowercase g-font-size-12">Molestie ullamcorper</p>
                <!-- End Info -->

                <!-- Figure Body -->
                <div class="d-inline-block">
                  <div class="d-flex justify-content-between w-100 g-max-width-145 g-bg-black g-color-white g-font-size-10 g-font-weight-700 text-uppercase">
                    <span class="u-ns-bg-v7-right g-bg-black g-px-15 g-py-4">Need</span>
                    <span class="g-bg-primary g-color-black g-font-weight-700 g-py-4 g-px-7 g-px-15--md">$11 250 000</span>
                  </div>
                </div>
                <!-- End Figure Body -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="col-6 col-sm-4 col-lg-2 g-mb-50 g-mb-0--lg">
              <!-- Figure -->
              <figure class="text-center">
                <!-- Figure Image -->
                <div class="mx-auto g-width-130 g-height-130 g-brd-around g-brd-5 g-brd-white rounded-circle g-mb-15">
                  <img class="g-width-120 g-height-120 rounded-circle" src="assets/img-temp/120x120/img2.jpg" alt="Image Description">
                </div>
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="h6 text-uppercase g-color-black g-font-weight-700 g-mb-5">Dorian Gray</h4>
                <p class="text-lowercase g-font-size-12">Molestie ullamcorper</p>
                <!-- End Info -->

                <!-- Figure Body -->
                <div class="d-inline-block">
                  <div class="d-flex justify-content-between w-100 g-max-width-145 g-bg-black g-color-white g-font-size-10 g-font-weight-700 text-uppercase">
                    <span class="u-ns-bg-v7-right g-bg-black g-px-15 g-py-4">Need</span>
                    <span class="g-bg-primary g-color-black g-font-weight-700 g-py-4 g-px-7 g-px-15--md">$690 000</span>
                  </div>
                </div>
                <!-- End Figure Body -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="col-6 col-sm-4 col-lg-2 g-mb-50 g-mb-0--lg">
              <!-- Figure -->
              <figure class="text-center">
                <!-- Figure Image -->
                <div class="mx-auto g-width-130 g-height-130 g-brd-around g-brd-5 g-brd-white rounded-circle g-mb-15">
                  <img class="g-width-120 g-height-120 rounded-circle" src="assets/img-temp/120x120/img3.jpg" alt="Image Description">
                </div>
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="h6 text-uppercase g-color-black g-font-weight-700 g-mb-5">Rebecca Kenton</h4>
                <p class="text-lowercase g-font-size-12">Molestie ullamcorper</p>
                <!-- End Info -->

                <!-- Figure Body -->
                <div class="d-inline-block">
                  <div class="d-flex justify-content-between w-100 g-max-width-145 g-bg-black g-color-white g-font-size-10 g-font-weight-700 text-uppercase">
                    <span class="u-ns-bg-v7-right g-bg-black g-px-15 g-py-4">Need</span>
                    <span class="g-bg-primary g-color-black g-font-weight-700 g-py-4 g-px-7 g-px-15--md">$420 000</span>
                  </div>
                </div>
                <!-- End Figure Body -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="col-6 col-sm-4 col-lg-2 g-mb-50 g-mb-0--md">
              <!-- Figure -->
              <figure class="text-center">
                <!-- Figure Image -->
                <div class="mx-auto g-width-130 g-height-130 g-brd-around g-brd-5 g-brd-white rounded-circle g-mb-15">
                  <img class="g-width-120 g-height-120 rounded-circle" src="assets/img-temp/120x120/img4.jpg" alt="Image Description">
                </div>
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="h6 text-uppercase g-color-black g-font-weight-700 g-mb-5">David Case</h4>
                <p class="text-lowercase g-font-size-12">Molestie ullamcorper</p>
                <!-- End Info -->

                <!-- Figure Body -->
                <div class="d-inline-block">
                  <div class="d-flex justify-content-between w-100 g-max-width-145 g-bg-black g-color-white g-font-size-10 g-font-weight-700 text-uppercase">
                    <span class="u-ns-bg-v7-right g-bg-black g-px-15 g-py-4">Need</span>
                    <span class="g-bg-primary g-color-black g-font-weight-700 g-py-4 g-px-7 g-px-15--md">$1 250 000</span>
                  </div>
                </div>
                <!-- End Figure Body -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
              <!-- Figure -->
              <figure class="text-center">
                <!-- Figure Image -->
                <div class="mx-auto g-width-130 g-height-130 g-brd-around g-brd-5 g-brd-white rounded-circle g-mb-15">
                  <img class="g-width-120 g-height-120 rounded-circle" src="assets/img-temp/120x120/img5.jpg" alt="Image Description">
                </div>
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="h6 text-uppercase g-color-black g-font-weight-700 g-mb-5">Jesica Alan</h4>
                <p class="text-lowercase g-font-size-12">Molestie ullamcorper</p>
                <!-- End Info -->

                <!-- Figure Body -->
                <div class="d-inline-block">
                  <div class="d-flex justify-content-between w-100 g-max-width-145 g-bg-black g-color-white g-font-size-10 g-font-weight-700 text-uppercase">
                    <span class="u-ns-bg-v7-right g-bg-black g-px-15 g-py-4">Need</span>
                    <span class="g-bg-primary g-color-black g-font-weight-700 g-py-4 g-px-7 g-px-15--md">$6 610 000</span>
                  </div>
                </div>
                <!-- End Figure Body -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
              <!-- Figure -->
              <figure class="text-center">
                <!-- Figure Image -->
                <div class="mx-auto g-width-130 g-height-130 g-brd-around g-brd-5 g-brd-white rounded-circle g-mb-15">
                  <img class="g-width-120 g-height-120 rounded-circle" src="assets/img-temp/120x120/img6.png" alt="Image Description">
                </div>
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="text-uppercase g-font-weight-700 h6 g-color-gray-dark-v1 g-mb-10">You can be here</h4>
                <a href="#" class="btn btn-block u-btn-primary text-uppercase g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-brd-none rounded-0 g-py-20 g-py-23--md g-px-10">Became a Donator</a>
                <!-- End Info -->
              </figure>
            </div>
          </div>
        </div>
        <!-- End Team Block -->
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="events" class="g-bg-gray-light-v5 g-py-100">
        <div class="container g-max-width-780 text-center g-mb-60">
          <div class="text-center u-heading-v8-1 g-mb-35">
            <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 mb-0">Upcoming
              <strong class="g-bg-gray-dark-v1 g-color-primary">events</strong></h2>
          </div>

          <p class="mb-0">Sed faucibus suscipit justo, eu dignissim tellus pretium et. Nam volutpat placerat libero sit amet elementum. Curabitur et neque et mauris maximus efficitur.</p>
        </div>

        <div class="container">
          <img class="js-pin-map img-fluid" src="assets/img/map.png"
               easypin-id="map-pin">

          <div style="display: none;"
               easypin-tpl>
            <popover>
              <div class="text-center text-uppercase u-ns-bg-v1-bottom g-absolute-centered--x g-bg-black g-width-170 g-mb-40">
                <img class="img-fluid" src="{[image_url]}" alt="{[title]}">

                <div class="g-pa-25">
                  <h5 class="g-color-primary g-font-weight-700 g-font-size-10 g-mb-9">{[date]}</h5>
                  <h4 class="g-color-gray-light-v1 g-font-weight-900 g-font-size-9 g-mb-10">
                    <i class="fa fa-map-marker g-valign-middle g-color-primary g-font-size-default"></i>
                    <span class="g-valign-middle">{[location]}</span>
                  </h4>
                  <h2 class="g-color-white g-font-weight-900 g-font-size-default mb-0">{[title]}</h2>
                </div>
              </div>
            </popover>

            <marker>
              <div class="point"></div>
            </marker>
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="blogAndNews" class="g-pt-100 g-pb-180">
        <div class="container g-max-width-780 text-center g-mb-60">
          <div class="text-center u-heading-v8-1 g-mb-35">
            <h2 class="h3 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 mb-0">Latest
              <strong class="g-bg-gray-dark-v1 g-color-primary">posts</strong></h2>
          </div>

          <p class="mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio. Donec eu nulla leo. Vivamus risus lacus</p>
        </div>

        <div class="js-carousel u-carousel-v5 g-mb-45"
             data-infinite="true"
             data-center-mode="true"
             data-center-padding="40px"
             data-slides-show="3"
             data-focus-on-select="true"
             data-responsive='[{
               "breakpoint": 1200,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
          <div class="js-slide g-px-15">
            <!-- Article -->
            <article class="g-bg-white g-brd-around g-theme-brd-color-gray-light-v2">
              <img class="img-fluid w-100" src="assets/img-temp/800x450/img1.jpg" alt="Image Description">

              <div class="g-pa-30">
                <h3 class="h6 text-uppercase g-font-weight-700 g-mb-20">
                  <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Mauris tellus magna, pretium</a>
                </h3>

                <p class="g-color-gray-dark-v5 mb-0">Integer vitae dolor eleifend, congue neque id, elementum mauris. Nullam molestie pretium velit, ut iaculis mauris hendrerit sedeget nibh commodo.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="js-slide g-px-15">
            <!-- Article -->
            <article class="g-bg-white g-brd-around g-theme-brd-color-gray-light-v2">
              <img class="img-fluid w-100" src="assets/img-temp/800x450/img2.jpg" alt="Image Description">

              <div class="g-pa-30">
                <h3 class="h6 text-uppercase g-font-weight-700 g-mb-20">
                  <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Mauris tellus magna, pretium</a>
                </h3>

                <p class="g-color-gray-dark-v5 mb-0">Integer vitae dolor eleifend, congue neque id, elementum mauris. Nullam molestie pretium velit, ut iaculis mauris hendrerit sedeget nibh commodo.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="js-slide g-px-15">
            <!-- Article -->
            <article class="g-bg-white g-brd-around g-theme-brd-color-gray-light-v2">
              <img class="img-fluid w-100" src="assets/img-temp/800x450/img3.jpg" alt="Image Description">

              <div class="g-pa-30">
                <h3 class="h6 text-uppercase g-font-weight-700 g-mb-20">
                  <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Mauris tellus magna, pretium</a>
                </h3>

                <p class="g-color-gray-dark-v5 mb-0">Integer vitae dolor eleifend, congue neque id, elementum mauris. Nullam molestie pretium velit, ut iaculis mauris hendrerit sedeget nibh commodo.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="js-slide g-px-15">
            <!-- Article -->
            <article class="g-bg-white g-brd-around g-theme-brd-color-gray-light-v2">
              <img class="img-fluid w-100" src="assets/img-temp/800x450/img4.jpg" alt="Image Description">

              <div class="g-pa-30">
                <h3 class="h6 text-uppercase g-font-weight-700 g-mb-20">
                  <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Mauris tellus magna, pretium</a>
                </h3>

                <p class="g-color-gray-dark-v5 mb-0">Integer vitae dolor eleifend, congue neque id, elementum mauris. Nullam molestie pretium velit, ut iaculis mauris hendrerit sedeget nibh commodo.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="js-slide g-px-15">
            <!-- Article -->
            <article class="g-bg-white g-brd-around g-theme-brd-color-gray-light-v2">
              <img class="img-fluid w-100" src="assets/img-temp/800x450/img5.jpg" alt="Image Description">

              <div class="g-pa-30">
                <h3 class="h6 text-uppercase g-font-weight-700 g-mb-20">
                  <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Mauris tellus magna, pretium</a>
                </h3>

                <p class="g-color-gray-dark-v5 mb-0">Integer vitae dolor eleifend, congue neque id, elementum mauris. Nullam molestie pretium velit, ut iaculis mauris hendrerit sedeget nibh commodo.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>

          <div class="js-slide g-px-15">
            <!-- Article -->
            <article class="g-bg-white g-brd-around g-theme-brd-color-gray-light-v2">
              <img class="img-fluid w-100" src="assets/img-temp/800x450/img6.jpg" alt="Image Description">

              <div class="g-pa-30">
                <h3 class="h6 text-uppercase g-font-weight-700 g-mb-20">
                  <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Mauris tellus magna, pretium</a>
                </h3>

                <p class="g-color-gray-dark-v5 mb-0">Integer vitae dolor eleifend, congue neque id, elementum mauris. Nullam molestie pretium velit, ut iaculis mauris hendrerit sedeget nibh commodo.</p>
              </div>
            </article>
            <!-- End Article -->
          </div>
        </div>

        <div class="text-center">
          <a class="btn u-btn-primary text-uppercase g-font-weight-700 g-font-size-11 g-color-gray-dark-v1 g-brd-none rounded-0 g-py-12 g-py-23--md g-px-15 g-px-25--md" href="#">View all posts</a>
        </div>
      </section>
      <!-- End Section Content -->

    

   @include('layout.user.footer')

</main>

@endsection

@push('head')

@endpush