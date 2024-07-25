<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>

<?php

if ($data) {

    if ($data['recipe']) { 
        if($data['is_saved']){

            $iconColor = $data['is_saved']['is_saved'] == 1 ? '#ff7433' : '#bebebe';
        }
        
        // Split ingredients into an array
        $ingredients = explode(',', $data['recipe']['ingredient']);
        ?>

    <?php
    // $userId = isset($_SESSION['user_id']); // Adjust this according to your session setup
    ?>
        <div class="recipe-card">
            <div class="recipe-header">
            <div class="icon-container">
                      <a href="#" id="heart-icon">
                      <?php if ($data['user_id']) {?>

                        <i id="bookmarkIcon" class="uis uis-bookmark" style="color: <?php echo $iconColor; ?>;" data-food-id="<?php echo $data['recipe']['id']; ?>" data-user-id="<?php echo $data['user_id']; ?>"></i>

                          <?php } else { ?>
                            
                        <?php } ?>
                      </a>
                  </div>
                    <img
                  src="<?php echo URLROOT; ?>/public/food_images/<?php echo $data['recipe']['imagefile']; ?>"
                  alt="<?php echo $data['recipe']['name']; ?>"
                />
                <h1><?php echo $data['recipe']['name']; ?></h1>
                <p>Preparing Time: <?php echo $data['recipe']['preparetime']; ?></p>
                <p>Cooking Time: <?php echo $data['recipe']['totaltime']; ?></p>
            </div>
            <div class="recipe-body">
                <div class="ingredients">
                    <h2>Ingredients</h2>
                    <ul>
                        <?php foreach ($ingredients as $ingredient) { ?>
                            <li><?php echo htmlspecialchars(trim($ingredient)); ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="directions">
                    <h2>Directions</h2>
                    <ol>
                        <li><?php echo $data['recipe']['step1']; ?></li>
                        <li><?php echo $data['recipe']['step2']; ?></li>
                        <li><?php echo $data['recipe']['step3']; ?></li>
                    </ol>
                </div>
            </div>
            <div class="recipe-tips">
                <h2>Tips</h2>
                <p><?php echo $data['recipe']['tips']; ?></p>
            </div>
        </div>

    <?php } else { ?>
        <p>No recipe found with ID <?php echo $recipeId; ?></p>
    <?php } ?>

<?php } else { ?>
    <p>No recipe ID specified.</p>
<?php } ?>

<?php require_once APPROOT . '/views/inc/footer.php' ?>

<script>
     $('#bookmarkIcon').on('click', function() {
            var foodId = $('#bookmarkIcon').data('food-id');
            var userId = $('#bookmarkIcon').data('user-id');
            
            var url ="<?php echo URLROOT;?>/SaveRecipeController/store";

            $.ajax({
                url: url,
                type: 'POST',
                data: { foodId: foodId, userId: userId },
                success: function(response) {
                    var result = JSON.parse(response);
                    if (result.success == 1) {
                        $('#bookmarkIcon').css('color','#ff7433');
                    } else {
                        $('#bookmarkIcon').css('color','#bebebe');
                    }
                    // Handle the response here
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
            
            // Toggle the color of the icon
            // var currentColor = $(this).css('color');
            // $(this).css('color', currentColor === 'rgb(255, 116, 51)' ? '#bebebe' : '#ff7433');
        });

</script>