
<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>
<?php $database = new Database(); ?>
<?php $foods = $database->readAll('view_foods') ?>
<h1 style="padding-top: 20px" >Welcome Cooking Recipe Information System</h1>
<div class="container introduction">
    <div class="row">
      <div class="left col-lg-6">
      <p>            </p>
        <p>            </p>
        <p>            </p>
        <p>            </p>
        <!-- <h2 style="color: #ff7433;">Welcome Cooking Recipe Information System</h2>  -->
        <p>If you don't know how to cook,</p>
        <p>No worries!</p>

        <p>This is the perfect place to hone your cooking skills.</p>

        <p>Even if you are a beginner or an expert, just explore beautiful recipes here!</p>

        <div class=""></div>
      </div>

      <div class="right col-lg-6">
        <img src="<?php echo URLROOT; ?>/images/aboutUs.jpg" class="img-fluid">
      </div>
    </div>
  </div>

    <!-- header -->
    <!-- <div class="head">
        <h>Welcome Cooking Recipe Website</h>
        <div class="container introduction">
     </div> -->
    <!-- header -->

    <!-- Explore Menu Section -->
    <div class="explore-menu">
        <h1>Explore our categories</h1>
        <span width="100%">
        Explore various categories to make a world of culinary delights. Whether you're a seasoned chef or a novice cook,this system ensures there's something delicious waiting for you to discover and recreate in your kitchen.In the category, brakfast, lunch, dinner are divided into three categories.If you wants to save the recipe you likes, you have to <a href="<?php echo URLROOT; ?>/pages/login">login</a>.
        <span/>
        
            <div class="scroll-view">
                <?php foreach($foods as $food){ ?>
                <div class="item">
                    <div>
                        <img src="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile'] ?>" class="custom" alt="Food Image">
                        <p><?php echo $food['name']?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
    <!-- Explore Menu Section -->
            <?php
                shuffle($foods);

                // Limit the array to the first four items
                $foods = array_slice($foods, 0, 8);
            ?>

<?php
// Define $loggedIn based on your login state logic
$loggedIn = isset($_SESSION['user_id']); // Adjust this according to your session setup
?>
    <!-- Top Dishes Near You -->
    <div class="container my-5">
    <h1 class="mb-4">Top dishes near you</h1>
    <div class="row">
        <?php foreach($foods as $food){ ?>
            <div class="col-md-3">
            <!-- <a href="<?php echo URLROOT; ?>//pages/detail?id=<?php echo $food['id']; ?>" class="text-decoration-none"> -->
                <div class="card mb-4 custom-card">
                    <img src="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile'] ?>" class="card-img-top custom-img" alt="Food Image">
                    <!-- <div class="fav-icon">
                    <i class="fas fa-heart"></i>
                </div> -->
                <div class="fav-icon">
                    <?php if ($loggedIn) { ?>
                        <a href="<?php echo URLROOT; ?>/categoryController/viewDetail?id=<?php echo $food['id']; ?>">
                            <i class="uil uil-heart" style="color: red;"></i>
                        </a>
                    <?php } else { ?>
                        <a href="<?php echo URLROOT; ?>/pages/login">
                            <i class="uil uil-heart" style="color: red;"></i>
                        </a>
                    <?php } ?>
                </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $food['name'] ?></h5>
                        <p class="card-text custom-text"><?php echo $food['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>



 <?php require_once APPROOT . '/views/inc/footer.php' ?>

 <style>
  .custom-card {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.custom-img {
    width: 100%;
    height: 200px; /* Adjust height as needed */
    object-fit: cover; /* Maintain aspect ratio and cover the container */
}

.card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.custom-text {
    height: 100px; /* Adjust height as needed */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 4; /* Number of lines to show */
    -webkit-box-orient: vertical;
}
.scroll-view {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
    padding: 10px;
}

.item {
    flex: 0 0 auto;
    margin: 0 10px;
    text-align: center;
}

.custom {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
}

.item p {
    font-size: 14px;
    font-weight: bold;
    margin-top: 5px;
}

.custom-card {
    position: relative;
}

.fav-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: red; /* Change this to any color you like */
    font-size: 24px; /* Adjust the size as needed */
    z-index: 10;
    background-color: white;
    border-radius: 50%;
    width: 40px;
    height: 40px;
}
@keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        h1 {
            animation: fadeIn 2s ease-in-out;
        }
      
        

    
 </style>

