<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>
<div class="recipe-card">
      <div class="recipe-header">
      <div class="icon-container">
      <i class="fa-solid fa-bookmark"></i>
      <i class="fas fa-share-alt post-save-icon"></i>
    </div>

        <img
          src="<?php echo URLROOT; ?>/images/menu_1.png"
          alt="Tomato Basil Pastas"
        />
        <h1>Tomato Basil Pastas</h1>
        <p>Preparing Time: 15 Min</p>
        <p>Cooking Time: 30 Min</p>
      </div>
      <div class="recipe-body">
        <div class="ingredients">
          <h2>Ingredients</h2>
          <ul>
            <li>200 grams spaghetti</li>
            <li>2 tablespoons olive oil</li>
            <li>2 cloves garlic, minced</li>
            <li>1 can diced tomatoes</li>
            <li>1/2 teaspoon salt</li>
            <li>1/2 teaspoon pepper</li>
            <li>1/2 cup fresh basil leaves, chopped</li>
            <li>1/2 cup grated Parmesan cheese</li>
          </ul>
        </div>
        <div class="directions">
          <h2>Directions</h2>
          <ol>
            <li>
              Cook spaghetti according to package instructions. Drain, reserving
              1 cup of the pasta water.
            </li>
            <li>
              In a skillet, heat olive oil. Sauté garlic until fragrant, then
              add tomatoes, salt, and pepper. Cook until sauce thickens.
            </li>
            <li>
              Add the cooked spaghetti to the skillet, tossing to combine, and
              add reserved pasta water if needed.
            </li>
            <li>
              Off the heat, garnish with basil and Parmesan. Serve immediately.
            </li>
          </ol>
        </div>
      </div>
      <div class="recipe-tips">
        <h2>Tips</h2>
        <p>
          Add a pinch of red pepper flakes for a kick. You can substitute
          spaghetti with any pas
        </p>
      </div>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php' ?>
