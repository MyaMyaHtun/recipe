<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>

<?php $database = new Database(); ?>
<?php $foods = $database->readAll('view_foods') ?>

<!-- Events Start -->
<div class="container-fluid event py-6">
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s" >
        </div>
        <div class="tab-class text-center">
          <ul
            class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp"
            data-wow-delay="0.1s"
          >
            <li class="nav-item p-2">
              <!-- <a
                class="d-flex mx-2 py-2 border bg rounded-pill active"
                data-bs-toggle="pill"
                href="#tab-1" style="color:aliceblue"
              >
                <span class="" style="width: 150px">All Cuisine</span>
              </a> -->
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex py-2 mx-2 border bg rounded-pill"
                data-bs-toggle="pill"
                href="#tab-2" style="color:aliceblue"
              >
                <span class="" style="width: 150px">Italian Food</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border bg rounded-pill"
                data-bs-toggle="pill"
                href="#tab-3" style="color:aliceblue"
              >
                <span class="" style="width: 150px">Japanese Food</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 border bg rounded-pill"
                data-bs-toggle="pill"
                href="#tab-4" style="color:aliceblue"
              >
                <span class="" style="width: 150px">Korean Food</span>
              </a>
            </li>
            <li class="nav-item p-2">
              <a
                class="d-flex mx-2 py-2 borde bg rounded-pill"
                data-bs-toggle="pill"
                href="#tab-5" style="color:aliceblue"
              >
                <span class="" style="width: 150px">Myanmar Food</span>
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
                                        <h4 class="me-auto"><?php echo $food['name']; ?></h4>
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
              $italianFoods = array_filter($foods, function($food) {
                  return $food['cuisine_name'] === 'Italian Food';
              });
              ?>
              <div id="tab-2" class="tab-pane fade show p-0">
                  <div class="row g-4">
                      <div class="col-lg-12">
                          <div class="row g-4">
                              <?php foreach($italianFoods as $food){ ?>
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
                                          data-lightbox="event-<?php echo $food['name']; ?>"
                                          class="my-auto"
                                          ><i class="uil uil-search-plus text-dark fa-2x"></i
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
            $japaneseFoods = array_filter($foods, function($food) {
                return $food['cuisine_name'] === 'Japanese Food';
            });
            ?>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <?php foreach($japaneseFoods as $food){ ?>
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
                                        data-lightbox="event-<?php echo $food['name']; ?>"
                                        class="my-auto"
                                        ><i class="uil uil-search-plus text-dark fa-2x"></i
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
              $koreanFoods = array_filter($foods, function($food) {
                  return $food['cuisine_name'] === 'Korean Food';
              });
              ?>
              <div id="tab-4" class="tab-pane fade show p-0">
                  <div class="row g-4">
                      <div class="col-lg-12">
                          <div class="row g-4">
                              <?php foreach($koreanFoods as $food){ ?>
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
                                          data-lightbox="event-<?php echo $food['name']; ?>"
                                          class="my-auto"
                                          ><i class="uil uil-search-plus text-dark fa-2x"></i
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
            $burmeseFoods = array_filter($foods, function($food) {
                return $food['cuisine_name'] === 'Myanmar Food';
            });
            ?>
            <div id="tab-5" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <?php foreach($burmeseFoods as $food){ ?>
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
                                        data-lightbox="event-<?php echo $food['name']; ?>"
                                        class="my-auto"
                                        ><i class="uil uil-search-plus text-dark fa-2x"></i
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
.drop:hover {
            background-color: rgba(0, 0, 0, 0.5); /* Darker green on hover */
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
.bg {
    background-color: #ff7433;
  }
  .bg :hover{
    
    color: #333; /* Text color on hover */
  }

</style>
<script>
    function changeActiveTab(element) {
        // Remove 'active' class from all tabs
        var tabs = document.querySelectorAll('.nav-pills .nav-item .nav-link');
        tabs.forEach(function(tab) {
            tab.classList.remove('active');
        });

        // Add 'active' class to the clicked tab
        element.classList.add('active');
    }
    
</script>
