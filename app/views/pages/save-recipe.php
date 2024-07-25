<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>
<?php $database = new Database(); ?>
<?php $foods = $database->readAll('user_saved_recipes') ?>


<div class="container">
    <div class="card">
        <?php
        $hasSavedRecipes = false;
        $currentUserId = $_SESSION['user_id']; // Assuming you store the current user ID in the session
        foreach ($foods as $food) {
            if ($food['is_saved'] == 1 && $food['user_id'] == $currentUserId) {
                $hasSavedRecipes = true;
                break;
            }
        }
        ?>
        <?php if ($hasSavedRecipes) { ?>
            <?php foreach ($foods as $food) { ?>
                <?php if ($food['is_saved'] == 1 && $food['user_id'] == $currentUserId) { ?>
                    <h4 class="me-auto"><?php echo htmlspecialchars($food['category_name']); ?></h4>
                    <img class="img-fluid rounded custom-img" src="<?php echo URLROOT; ?>/public/food_images/<?php echo htmlspecialchars($food['imagefile']); ?>" alt="Food Image" />
                    <a href="<?php echo URLROOT; ?>/categoryController/viewDetail?id=<?php echo htmlspecialchars($food['food_id']); ?>" class="btn view-detail-btn">View Detail</a>
                <?php } ?>
            <?php } ?>
        <?php } else { ?>
            <p>No saved recipes found.</p>
        <?php } ?>
    </div>
</div>


<style>
    .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 240px;
            text-align: center;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        
</style>