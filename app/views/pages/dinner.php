<?php require_once APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>
<?php require_once APPROOT . '/views/inc/nav.php'; ?>
<?php $database = new Database(); ?>
<?php $foods = $database->readAll('view_foods'); ?>
<?php $cuisines = $database->readAll('cuisines'); ?>

<div class="search-cuisine-container">
    <!-- <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"> -->
        <div class="input-group">
            <input type="text" id="searchInput" class="form-control bg-light border-0 small" placeholder="Search for dinner..." aria-label="Search" aria-describedby="basic-addon2" onkeyup="searchTable()">
            <div class="input-group-append">
                <button class="btn btn-primary form-control border-0 small" type="button" style="background-color:#FCAE1E;">
                    <i class="uil uil-search" style="font-size: 20px;"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="dropdown-container">
        <div class="button-container">
            <button onclick="toggleDropdown(this)" name="action" value="Dinner" class="drop">Choose Cuisine</button>
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
        $dinnerFoods = array_filter($foods, function($food) {
            return $food['category_name'] === 'Dinner';
        });
        ?>

        <div id="foodContainer" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <?php foreach($dinnerFoods as $food){ ?>
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
                                    <a href="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile']; ?>" data-lightbox="event-<?php echo $food['category_name']; ?>" class="my-auto">
                                        <i class="uil uil-search-plus text-dark fa-2x"></i>
                                    </a>
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
    </div>
</div>

<a href="<?php echo URLROOT; ?>/pages/dinner"> Back </a>

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

<style>
.button-container {
    display: flex;
    gap: 10px;
    justify-content: center;
    padding: 10px;
    overflow-x: auto;
    white-space: nowrap;
}

.drop {
    background-color: gray;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 8px;
    transition: background-color 0.3s;
}

.drop:hover {
    background-color: #ff7433;
}

#dropdownContainer {
    display: none;
    margin-top: 10px;
}

.fav-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: red;
    font-size: 24px;
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
    background-color: #ff5522;
}
.search-cuisine-container {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    margin-top: 30px;
    gap: 20px; /* Adjust space between the search input and "Choose Cuisine" button */
}

.search-cuisine-container .form-inline {
    margin: 0; /* Remove any default margins */
}

.dropdown-container {
    display: flex;
    align-items: center;
    gap: 10px; /* Space between the button and the dropdown */
}

</style>
