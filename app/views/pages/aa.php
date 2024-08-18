<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>
<?php $database = new Database(); ?>
<?php $foods = $database->readAll('view_foods') ?>
<?php $cuisines = $database->readAll('cuisines') ?>


<!-- category Start -->
<div class="container-fluid event py-6">
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
  <button onclick="toggleDropdown(this)" name="action" value="Breakfast" class="drop">Breakfast</button>
    <button onclick="toggleDropdown(this)" name="action" value="Lunch" class="drop">Lunch</button>
    <button onclick="toggleDropdown(this)" name="action" value="Dinner" class="drop">Dinner</button>
    </div>
    <div id="dropdownContainer">
        <label for="item">Choose a Cuisine:</label>
        <select id="item" onchange="navigateToPage(this)">
            <option value="">Select a cuisine</option>
            <?php foreach ($cuisines as $cuisine): ?>
                                        <option value="<?php echo $cuisine['cuisineName']; ?>">
                                            <?php echo $cuisine['cuisineName']; ?>
                                        </option>
                                    <?php endforeach; ?>
            <!-- Add more items as needed -->
        </select>
    </div>
  
          </ul>

<!-- <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>       -->
  <img src="<?php echo URLROOT; ?>/public/images/card1.jpg">
</div>
    <!-- Events End -->

    <?php require_once APPROOT . '/views/inc/footer.php' ?>


    <style>

.button-container {
        display: flex; /* Use flexbox for horizontal alignment */
        gap: 10px; /* Space between buttons */
        justify-content: center; /* Center the buttons horizontally */
        padding: 10px; /* Add some padding around the container */
        overflow-x: auto; /* Allow horizontal scrolling if needed */
        white-space: nowrap; /* Prevent buttons from wrapping to a new line */
    }

    .drop {
        background-color: #ff7433; /* Green background */
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

  .bg{
    background-color: #ff7433;
  }
  .bg :hover{
    
    color: #333; /* Text color on hover */
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