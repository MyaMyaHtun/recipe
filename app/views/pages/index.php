<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require_once APPROOT . '/views/inc/nav.php' ?>
  <!-- Introduction start -->
  <div class="container introduction">
    <div class="row">
      <div class="left col-lg-6">
        <h2 style="color: #ff7433;">Don't know how to cook?</h2>

        <p>No worries!</p>

        <p>This is the perfect place to hone your cooking skills.</p>

        <p>Even if you are a beginner or an expert, just explore beautiful recipes here!</p>

        <div class="get-started" style="background-color: #ff7433;"><a href="<?php echo URLROOT; ?>/pages/dashboard" style="color:aliceblue">Get Started </a><i class="fa fa-chevron-right" style="color:aliceblue"></i></div>
      </div>

      <div class="right col-lg-6">
        <img src="<?php echo URLROOT; ?>/images/aboutUs.jpg" class="img-fluid">
      </div>
    </div>
  </div>
  <!-- Introduction end -->

  <!-- Why us start-->
  <div class="container home-info-section">
    <div class="row">
      <!-- <div class="home-info-section-title">Why Recipe Corner?</div> -->

      <div class="col-md-4">
        <div class="card mb-4 shadow">
          <img class="card-img-top mx-auto d-block" src="<?php echo URLROOT; ?>/images/about1.gif" alt="Easy">

          <div class="home-info-section-inner-title"><h3>Easy</h3></div>

          <div class="home-info-section-inner-text">
          Discover Easy Recipes: Effortless Dishes for Every Occasion
          The simplicity and accessibility of the recipes featured on the website. It suggests that users will find straightforward and hassle-free cooking solutions suitable for various occasions,

          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 shadow">
          <img class="card-img-top mx-auto d-block" src="<?php echo URLROOT; ?>/images/about2.gif" alt="Quick">
          
          <div class="home-info-section-inner-title"><h3>Quick</h3></div>

          <div class="home-info-section-inner-text">
          To explore a collection of recipes that are convenient and straightforward, perfect for those looking to prepare delicious meals without spending too much time in the kitchen. It highlights the ease and efficiency of the recipes, appealing to individuals seeking quick cooking solutions.
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 shadow">
          <img class="card-img-top mx-auto d-block" src="<?php echo URLROOT; ?>/images/about3.gif" alt="Tasty">

          <div class="home-info-section-inner-title"><h3>Tasty</h3></div>

          <div class="home-info-section-inner-text">
          Highlights the delicious and appetizing nature of the recipes featured on the website. It suggests that users will find a variety of flavorful dishes that cater to different tastes and preferences, promising a culinary journey filled with mouthwatering delights and satisfying flavors.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Why us end -->

  <!-- Best dishes just for you start -->
  <div class="container home-info-section">
    <div class="row">
      <!-- <div class="home-info-section-title"><h1>Best Recipes Just for You!</h1> </div> -->

      <div class="col-md-4">
        <div class="card mb-4 shadow">
          <img class="card-img-top mx-auto d-block" src="<?php echo URLROOT; ?>/images/pizza.jpg" alt="Pizza">

          <div class="home-info-section-inner-title"><h4>Pizza</h4></div>

        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 shadow">
          <img class="card-img-top mx-auto d-block" src="<?php echo URLROOT; ?>/images/food_5.png" alt="Mango Smoothie">
          
          <div class="home-info-section-inner-title"><h4>Cheese Bread</h4></div>

        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 shadow">
          <img class="card-img-top mx-auto d-block" src="<?php echo URLROOT; ?>/images/cheese-sandwich.jpg" alt="Cheese Sandwich">

          <div class="home-info-section-inner-title"><h4>Cheese Sandwich</h4></div>

        </div>
      </div>
    </div>
  </div>

<?php require_once APPROOT . '/views/inc/footer.php' ?>