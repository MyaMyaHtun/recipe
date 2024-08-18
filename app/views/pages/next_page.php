<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>
<?php $database = new Database(); ?>
<?php $foods = $database->readAll('view_foods') ?>
<form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" id="searchInput" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" onkeyup="searchTable()">
        <div class="input-group-append">
            <button class="btn btn-primary form-control border-0 small" type="button" style="background-color:#FCAE1E;">
                <i class="uil uil-search" style="font-size: 20px;"></i>
            </button>
        </div>
    </div>
</form>
<?php
if (isset($_GET['item_id']) && isset($_GET['action'])) {
    $item_id = $_GET['item_id'];
    $action = $_GET['action'];

    // echo "" . htmlspecialchars($item_id) . "<br>";
    // echo "" . htmlspecialchars($action);
    $query = $database->getByCategoryAndCuisine('view_foods',$action,$item_id);
    // var_dump ($query);

} else {
    echo "Please select both category and cuisine.";
}
?>
<div id="foodContainer" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <?php foreach($query as $food){ ?>
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
            <a href="<?php echo URLROOT; ?>/pages/aa"> Back </a>


            
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
