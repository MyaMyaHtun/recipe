<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>
<?php $database = new Database(); ?>
<?php $foods = $database->readAll('view_foods') ?>

<!-- category Start -->
<div class="container-fluid event py-6">
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s" >
          <small
            class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3" 
            >Latest Categories</small
          >
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
                            <?php foreach($foods as $food){ ?>
                            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                <div class="event-img position-relative">
                                    <img class="img-fluid rounded custom-img" src="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>" alt="Food Image" />
                                    <div class="event-overlay d-flex flex-column p-4">
                                        <h4 class="me-auto"><?php echo $food['category_name']; ?></h4>
                                    </div>
                                </div>
                                <div class="view-detail-container text-center">
                                    <!-- <a href="<?php echo URLROOT; ?>/pages/detail" class="btn view-detail-btn">View Detail</a> -->
                                    <a href="<?php echo URLROOT; ?>/categoryController/viewDetail?id=<?php echo $food['id']; ?>" class="btn view-detail-btn">View Detail</a>

                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // Assuming you have already fetched data from the database into $foods

            // Filter the array to include only breakfast items
            $breakfastFoods = array_filter($foods, function($food) {
                return $food['category_name'] === 'Breakfast';
            });
            ?>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <?php foreach($breakfastFoods as $food){ ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="event-img position-relative">
                                    <img
                                      class="img-fluid rounded w-100"
                                      src="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>"
                                      alt="Food Image"
                                    />
                                    <div class="event-overlay d-flex flex-column p-4">
                                      <h4 class="me-auto"><?php echo $food['name']; ?></h4>
                                      <a
                                        href="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>"
                                        data-lightbox="event-<?php echo $food['category_name']; ?>"
                                        class="my-auto"
                                        ><i class="fas fa-search-plus text-dark fa-2x"></i
                                      ></a>
                                      <div class="view-detail-container text-center">
                                      <a href="<?php echo URLROOT; ?>/categoryController/viewDetail?id=<?php echo $food['id']; ?>" class="btn view-detail-btn">View Detail</a>
                                </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>


            <?php

              $lunchFoods = array_filter($foods, function($food) {
                  return $food['category_name'] === 'Lunch';
              });
              ?>
              <div id="tab-3" class="tab-pane fade show p-0">
                  <div class="row g-4">
                      <div class="col-lg-12">
                          <div class="row g-4">
                              <?php foreach($lunchFoods as $food){ ?>
                              <div class="col-md-6 col-lg-3">
                                  <div class="event-img position-relative">
                                      <img
                                        class="img-fluid rounded w-100"
                                        src="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>"
                                        alt="Food Image"
                                      />
                                      <div class="event-overlay d-flex flex-column p-4">
                                          <h4 class="me-auto"><?php echo $food['name']; ?></h4>
                                          <a
                                            href="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>"
                                            data-lightbox="event-<?php echo $food['category_name']; ?>"
                                            class="my-auto"
                                          ><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                          <div class="view-detail-container text-center">
                                          <a href="<?php echo URLROOT; ?>/categoryController/viewDetail?id=<?php echo $food['id']; ?>" class="btn view-detail-btn">View Detail</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php } ?>
                          </div>
                      </div>
                  </div>
              </div>



              <?php

            $dinnerFoods = array_filter($foods, function($food) {
                return $food['category_name'] === 'Dinner';
            });
            ?>
            <div id="tab-4" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <?php foreach($dinnerFoods as $food){ ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="event-img position-relative">
                                    <img
                                      class="img-fluid rounded w-100"
                                      src="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>"
                                      alt="Food Image"
                                    />
                                    <div class="event-overlay d-flex flex-column p-4">
                                        <h4 class="me-auto"><?php echo $food['name']; ?></h4>
                                        <a
                                          href="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>"
                                          data-lightbox="event-<?php echo $food['category_name']; ?>"
                                          class="my-auto"
                                        ><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        <div class="view-detail-container text-center">
                                        <a href="<?php echo URLROOT; ?>/categoryController/viewDetail?id=<?php echo $food['id']; ?>" class="btn view-detail-btn">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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


    <style>
   .event-img {
    position: relative;
    width: 100%; /* Ensure the image container takes full width of its parent */
    height: 300px; /* Set a fixed height for the image container */
}

.event-img img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure the image covers the entire container without stretching */
}

.event-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
}

.event-img:hover .event-overlay {
    opacity: 1;
}

.event-overlay h4 {
    margin: 0;
}

.view-detail-container {
    margin-top: 10px; /* Adjust the spacing as needed */
}

.view-detail-btn {
    background-color: #ff7433;
    color: white;
    border: none;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.view-detail-btn:hover {
    background-color: #ff5522; /* Darker shade for hover effect */
}

    </style>