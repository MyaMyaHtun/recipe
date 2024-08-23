<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>
<?php $database = new Database(); ?>
<?php $foods = $database->readAll('view_foods') ?>
<?php $cuisines = $database->readAll('cuisines') ?>



<!-- <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" id="searchInput" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" onkeyup="searchTable()">
        <div class="input-group-append">
            <button class="btn btn-primary form-control border-0 small" type="button" style="background-color:#FCAE1E;">
                <i class="uil uil-search" style="font-size: 20px;"></i>
            </button>
        </div>
    </div>
</form> -->
<!-- <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3">
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Italian Food</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
  <label class="form-check-label" for="flexSwitchCheckChecked">Japanese Food</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" >
  <label class="form-check-label" for="flexSwitchCheckDisabled">Korean Food</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" >
  <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Myanmar Food</label>
</div>
</form> -->



<!-- <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3">
    <?php foreach ($cuisines as $cuisine): ?>
        <div class="checkbox-container">
            <input 
                type="checkbox" 
                id="<?php echo $cuisine['cuisineName']; ?>" 
                name="cuisines[]" 
                value="<?php echo $cuisine['cuisineName']; ?>"
            >
            <label for="<?php echo $cuisine['cuisineName']; ?>">
                <?php echo $cuisine['cuisineName']; ?>
            </label>
        </div>
    <?php endforeach; ?>
</form> -->



<!-- <div class="container-fluid event py-6">
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
        </div>
        <div class="tab-class text-center">
          <ul
            class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp"
            data-wow-delay="0.1s"
          >
            <li class="nav-item dropdown p-2">
            <div class="button-container">
  <button onclick="toggleDropdown(this)" name="action" value="Breakfast" class="drop">Choose Cuisine</button>
    </div>
    <div id="dropdownContainer">
       
        <select id="item" onchange="navigateToPage(this)">
            <option value="">Select a cuisine</option>
            <?php foreach ($cuisines as $cuisine): ?>
                                        <option value="<?php echo $cuisine['cuisineName']; ?>">
                                            <?php echo $cuisine['cuisineName']; ?>
                                        </option>
                                    <?php endforeach; ?>
            
        </select>
    </div>
  
          </ul> -->

          <div class="search-cuisine-container">
    <!-- <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"> -->
        <div class="input-group">
            <input type="text" id="searchInput" class="form-control bg-light border-0 small" placeholder="Search for breakfast..." aria-label="Search" aria-describedby="basic-addon2" onkeyup="searchTable()">
            <div class="input-group-append">
                <button class="btn btn-primary form-control border-0 small" type="button" style="background-color:#FCAE1E;">
                    <i class="uil uil-search" style="font-size: 20px;"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- <div class="dropdown-container">
        <button onclick="toggleDropdown(this)" name="action" value="Breakfast" class="drop">Choose Cuisine</button>
        <div id="dropdownContainer">
            <select id="item" onchange="navigateToPage(this)">
                <option value="">Select a cuisine</option>
                <?php foreach ($cuisines as $cuisine): ?>
                    <option value="<?php echo $cuisine['cuisineName']; ?>">
                        <?php echo $cuisine['cuisineName']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div> -->
    <div class="dropdown-container">
        <div class="button-container">
            <button onclick="toggleDropdown(this)" name="action" value="Breakfast" class="drop">Choose Cuisine</button>
        </div>
        <div id="dropdownContainer">
            <select id="item" onchange="navigateToPage(this)">
                <option value=""></option>
                <?php foreach ($cuisines as $cuisine): ?>
                    <option value="<?php echo $cuisine['cuisineName']; ?>">
                        <?php echo $cuisine['cuisineName']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>

          <?php
// Define $loggedIn based on your login state logic
$loggedIn = isset($_SESSION['user_id']); // Adjust this according to your session setup
?>
          <?php
$breakfastFoods = array_filter($foods, function($food) {
    return $food['category_name'] === 'Breakfast';
});
?>
<div id="foodContainer" class="tab-pane fade show p-0">
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="row g-4">
                <?php foreach($breakfastFoods as $food){ ?>
                <div class="col-md-6 col-lg-3">
                    <div class="event-img position-relative text-center">
                        <div class="img-container" style="height: 200px; overflow: hidden;">
                            <img
                              class="img-fluid rounded w-100 h-100 object-fit-cover"
                              src="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>"
                              alt="Food Image"
                              style="height: 100%; object-fit: cover;"
                            />
                            <div class="fav-icon">
                    <?php if ($loggedIn) { ?>
                        <a href="<?php echo URLROOT; ?>/categoryController/viewDetail?id=<?php echo $food['id']; ?>">
                            <i class="uis uis-bookmark" style="color: red;"></i>
                        </a>
                    <?php } else { ?>
                        <a href="<?php echo URLROOT; ?>/pages/login" title="save">
                            <i class="uis uis-bookmark" style="color: red;"></i>
                        </a>
                    <?php } ?>
                </div>
                        </div>
                        <div class="event-overlay d-flex flex-column p-4">
                          <h4 class="text-center"><?php echo $food['name']; ?></h4>
                          <!-- <h4 class="text-center"><?php echo $food['cuisine_name']; ?></h4> -->
                          <a
                            href="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>"
                            data-lightbox="event-<?php echo $food['category_name']; ?>"
                            class="my-auto"
                            ><i class="uil uil-search-plus text-dark fa-2x"></i
                          ></a>
                          <div class="view-detail-container text-center mt-2">
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


            <a href="<?php echo URLROOT; ?>/pages/lunch"> Back </a>


            
<script>
function searchTable() {
    // Get the search input value
    const input = document.getElementById('searchInput').value.toLowerCase();
    const container = document.getElementById('foodContainer');
    const items = container.getElementsByClassName('col-md-6 col-lg-3');

    // Loop through all food items and hide those that don't match the search input
    for (let i = 0; i < items.length; i++) {
        const name = items[i].getElementsByTagName('h4')[0].textContent.toLowerCase();
        if (name.includes(input)) {
            items[i].style.display = ''; // Show item
        } else {
            items[i].style.display = 'none'; // Hide item
        }
    }
}
</script>
<style>

.button-container {
        display: flex; /* Use flexbox for horizontal alignment */
        gap: 10px; /* Space between buttons */
        /* Center the buttons horizontally */
        padding: 0px; /* Add some padding around the container */
        overflow-x: auto; /* Allow horizontal scrolling if needed */
        white-space: nowrap; /* Prevent buttons from wrapping to a new line */
    }

    .drop {
        background-color: gray; /* Green background */
        border: none; /* Remove borders */
        color: white; /* White text */
        padding: 15px 32px; /* Some padding */
        text-align: center; /* Centered text */
        text-decoration: none; /* Remove underline */
        display: inline-block; /* Inline-block elements */
        font-size: 16px; /* Font size */
        cursor: pointer; /* Pointer cursor on hover */
        border-radius: 8px; /* Rounded corners */
        transition: background-color 0.3s; /* Smooth background color transition */
    }

    .drop:hover {
        background-color: #ff7433; /* Darker green on hover */
    }

    #dropdownContainer {
        display: none;
        margin-top: 10px;
    }

    /* Responsive styling */
    @media (max-width: 768px) {
        .drop {
            padding: 10px 20px; /* Adjust padding for smaller screens */
            font-size: 14px; /* Smaller font size */
        }
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
.bookmark-container .tooltip-text {
        visibility: hidden;
        width: 50px;
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 5px;
        border-radius: 5px;
        
        /* Positioning */
        position: absolute;
        z-index: 1;
        bottom: 125%; /* Position above the icon */
        left: 50%;
        margin-left: -25px;
        
        /* Fade in effect */
        opacity: 0;
        transition: opacity 0.3s;
    }

    .bookmark-container:hover .tooltip-text {
        visibility: visible;
        opacity: 1;
    }

    .bookmark-container .tooltip-text::after {
        content: "";
        position: absolute;
        top: 100%; /* Arrow at the bottom */
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: black transparent transparent transparent;
    }
.view-detail-btn:hover {
    background-color: #ff5522; /* Darker shade for hover effect */
}

  .bg{
    background-color: #ff7433;
  }
  .bg :hover{
    
    color: #333; /* Text color on hover */
  }
  .search-cuisine-container {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    margin-top: 30px;
    gap: 20px; /* Space between search input and "Choose Cuisine" button */
}

.search-form {
    margin: 0; /* Remove any default margins */
}

.dropdown-container {
    display: flex;
    align-items: center;
    gap: 10px; /* Space between the button and the dropdown */
}

.dropdown-container .button-container {
    margin: 0; /* Remove any default margins */
}
.dropdown-container .drop {
    width: 200px; /* Adjust the width as needed */
}


    </style>
   <script>
    let buttonValue = ""; 
        function toggleDropdown(button) {
            var dropdownContainer = document.getElementById("dropdownContainer");
            // Toggle visibility
            if (dropdownContainer.style.display === "none") {
                dropdownContainer.style.display = "block";
            } else {
                dropdownContainer.style.display = "none";
            }
            buttonValue = button.value;
        }


        function navigateToPage(dropdown) {
            var item_id = dropdown.value;
            if (item_id) {
                window.location.href = "nextPage?item_id=" + item_id + "&action=" + encodeURIComponent(buttonValue);
            }
        }
    </script>
    