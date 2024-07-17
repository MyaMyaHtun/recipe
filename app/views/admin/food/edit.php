<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>
<?php $database = new Database(); ?>
<?php $addCategoryToFood = $database->readAll('categories');?>
<?php $addCuisineToFood = $database->readAll('cuisines');?>



<form action="<?php echo URLROOT; ?>/foodController/update" method="post" class="mt-md-0 mt-4" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?php $data['foods']['id']; ?>">
   <input type="hidden" name="imagefile" value="<?php $data['foods']['imagefile']; ?>">
<!-- Main content of the page (content-wrapper) start -->
    <a class="btn btn-primary" href="<?php echo URLROOT;?>/foodController/index">Back</a>
    <main class="container content-wrapper shadow-lg mt-lg-4">
            <div class="row">
                    <h1 class=" text-center mt-md-3" style="color: tomato; font-weight: bolder">Edit Recipe</h1>
                <section class="col-md-5 col-lg-5 col-sm-12 my-auto px-4 login-section">
                        <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $data['foods']['id'] ?>" />
                        <div class="mb-3">
                            <label for="title" class="form-label" name="name">Recipe Name</label>
                            <input type="text" name="name" id="title" class="form-control" value="<?php echo $data['foods']['name']?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" name="categoryId">Category</label>
                            <select name="categoryId" class="form-control">
                            <?php
                                 foreach ($addCategoryToFood as $category) {
                                ?>
                                        <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($category['id'] == $data['selected_category_id'])
                                            echo 'selected'; ?>>
                                          
                                            <?php echo $category['name'] ?>

                                        </option>                                  
                                <?php
                                }
                            ?>
                            
                            </select>
                               
                        </div>


                        <div class="mb-3">
                            <label class="form-label" name="cuisineId">Cuisine</label>
                            <select name="cuisineId" class="form-control">
                            <?php
                                 foreach ($addCuisineToFood as $cuisine) {
                                ?>
                                        <option value="<?php echo $cuisine['id']; ?>" 
                                        <?php if ($cuisine['id'] == $data['selected_cuisines_id'])
                                            echo 'selected'; ?>>
                                          
                                            <?php echo $cuisine['cuisineName'] ?>
                                            
                                        </option>                                  
                                <?php
                                }
                            ?>
                            
                            </select>
                               
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Current Image :</label>
                            <img src="<?php echo URLROOT; ?>/public/food_images/<?php echo $data['foods']['imagefile']?>" alt="food image" width="150px">
                        
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Image :</label>
                            <input type="file" name="imagefile" class="form-control">
                        
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label" name="totaltime">Total Time:</label>
                            <input type="text" name="totaltime" id="totaltime" class="form-control" value="<?php echo $data['foods']['totaltime'] ?>"  required>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Preparation Time:</label>
                            <input type="text" name="preparetime" id="preptime" class="form-control" value="<?php echo $data['foods']['preparetime'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label" cols="30" row="5">Description</label>
                            <textarea class="form-control" id="about" rows="3" name="description" required>
                            <?php echo $data['foods']['description']?>
                            </textarea>
                        </div>
                </section>

                <section class="col-md-7 col-lg-7">

                        <div class="mb-3">
                            <label for="step1" class="form-label">Ingredients:</label>
                            <textarea class="form-control" rows="3" name="ingredient" required>
                            <?php echo $data['foods']['ingredient']?>
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="step1" class="form-label">Enter Step 1:</label>
                            <textarea class="form-control" rows="3" name="step1" required>
                            <?php echo $data['foods']['step1']?>
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="step2" class="form-label">Enter Step 2:</label>
                            <textarea class="form-control" rows="3" name="step2" required>
                              <?php echo $data['foods']['step2']?>  
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="step3" class="form-label">Enter Step 3:</label>
                            <textarea class="form-control" rows="3" name="step3" required>
                            <?php echo $data['foods']['step2']?>
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tips" class="form-label">Write Some Tips:</label>
                            <textarea class="form-control" rows="3" name="tips" required>
                            <?php echo $data['foods']['step2']?>
                            </textarea>
                        </div>
                </section>
               
            </div>
    </main>
    <input type="submit" class="form-control" style="background-color: #ffbe33;" id="exampleInputPassword1" value="Update recipe">
</form>

<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>


