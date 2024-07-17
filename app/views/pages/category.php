<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>

<!-- Events Start -->
<div class="container-fluid event py-6">
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s" >
          <small
            class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3" 
            >Latest Categories</small
          >
          <!-- <h1 class="display-5 mb-5" style="color:#ff7433">
            Our Categories
          </h1> -->
        </div>
        <div class="tab-class text-center">
          <ul
            class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp"
            data-wow-delay="0.1s"
          >
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active"
                data-bs-toggle="pill"
                href="#tab-1"
              >
                <span class="text-dark" style="width: 150px">All Category</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-2"
              >
                <span class="text-dark" style="width: 150px">Breakfast</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-3"
              >
                <span class="text-dark" style="width: 150px">Lunch</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-4"
              >
                <span class="text-dark" style="width: 150px">Dinner</span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.1s"
                    >
                      <div class="event-img position-relative">
                        <a href="<?php echo URLROOT; ?>/pages/detail">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_1.png"
                          alt=""
                        />
                        </a>
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Breakfast</h4>
                          <!-- <a
                            href="<?php echo URLROOT; ?>/images/food_2.png"
                            data-lightbox="event-1"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a> -->
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.3s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_3.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Lunch</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_4.png"
                            data-lightbox="event-2"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.5s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_1.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Breakfast</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_1.png"
                            data-lightbox="event-3"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.7s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_5.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Dinner</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_1.png"
                            data-lightbox="event-4"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.1s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_1.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Breakfast</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_7.png"
                            data-lightbox="event-5"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.3s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_8.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Lunch</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_1.png"
                            data-lightbox="event-6"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.5s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_9.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Lunch</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_9.png"
                            data-lightbox="event-7"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-6 col-lg-3 wow bounceInUp"
                      data-wow-delay="0.7s"
                    >
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_1.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Dinner</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_10.png"
                            data-lightbox="event-17"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_12.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Dinner</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_11.png"
                            data-lightbox="event-8"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_13.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Lunch</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_5.png"
                            data-lightbox="event-9"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_5.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Lunch</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_15.png"
                            data-lightbox="event-10"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_5.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Lunch</h4>
                          <a
                            href="<?php echo URLROOT; ?>/images/food_13.png"
                            data-lightbox="event-11"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-4" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_5.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Dinner</h4>
                          <a
                            href="img/01.jpg"
                            data-lightbox="event-12"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="<?php echo URLROOT; ?>/images/food_5.png"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Dinner</h4>
                          <a
                            href="img/01.jpg"
                            data-lightbox="event-13"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-5" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/event-7.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Dinner</h4>
                          <a
                            href="img/01.jpg"
                            data-lightbox="event-14"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="event-img position-relative">
                        <img
                          class="img-fluid rounded w-100"
                          src="img/event-8.jpg"
                          alt=""
                        />
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="me-auto">Breakfast</h4>
                          <a
                            href="img/01.jpg"
                            data-lightbox="event-15"
                            class="my-auto"
                            ><i class="fas fa-search-plus text-dark fa-2x"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    <!-- Events End -->

    <?php require_once APPROOT . '/views/inc/footer.php' ?>