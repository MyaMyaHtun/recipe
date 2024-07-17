<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>
<?php $database = new Database(); ?>
<?php $addCategoryToFood = $database->readAll('categories'); ?>
<?php $addCuisiens = $database->readAll('cuisines');?>



<form action="<?php echo URLROOT; ?>/foodController/store" method="post" class="mt-md-0 mt-4" enctype="multipart/form-data">
    <!-- Main content of the page (content-wrapper) start -->
    <a class="btn btn-primary" href="<?php echo URLROOT;?>/foodController/index">Back</a>
    <main class="container content-wrapper shadow-lg mt-lg-4">
            <div class="row">
                    <h1 class=" text-center mt-md-3" style="color: tomato; font-weight: bolder">Add Recipe</h1>
                <section class="col-md-5 col-lg-5 col-sm-12 my-auto px-4 login-section">
                        <div class="mb-3">
                            <label for="title" class="form-label" name="name">Recipe Name</label>
                            <input type="text" name="name" id="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"">Category</label>
                            <select name="categoryId" class="form-control">
                            <?php
                                 foreach ($addCategoryToFood as $category) {
                                ?>
                                        <option value="<?php echo $category['id'] ?>" selected="selected">
                                            <?php echo $category['name'] ?>
                                        </option>                                  
                                <?php
                                }
                            ?>
                            </select>
                               
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cuisines</label>
                            <select name="cuisineId" id="categoryId" class="form-control">
                            <?php
                                 foreach ($addCuisiens as $cuisine) {
                                ?>
                                        <option value="<?php echo $cuisine['id'] ?>" selected="selected">
                                            <?php echo $cuisine['cuisineName'] ?>
                                        </option>                                  
                                <?php
                                }
                            ?>
                            </select>
                               
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label" name="imagefile">Enter an image</label>
                            <input type="file" name="imagefile" id="image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label" name="totaltime">Cook Time:</label>
                            <input type="text" name="totaltime" id="totaltime" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Preparation Time:</label>
                            <input type="text" name="preparetime" id="preptime" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label" cols="30" row="5">Description</label>
                            <textarea class="form-control" id="about" rows="3" name="description" required></textarea>
                        </div>
                </section>

                <section class="col-md-7 col-lg-7">

                        <div class="mb-3">
                            <label for="step1" class="form-label">Ingredients:</label>
                            <textarea class="form-control" id="ingredients" rows="3" name="ingredient" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="step1" class="form-label">Enter Step 1:</label>
                            <textarea class="form-control" id="step1" rows="3" name="step1" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="step2" class="form-label">Enter Step 2:</label>
                            <textarea class="form-control" id="step2" rows="3" name="step2" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="step3" class="form-label">Enter Step 3:</label>
                            <textarea class="form-control" id="step3" rows="3" name="step3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tips" class="form-label">Write Some Tips:</label>
                            <textarea class="form-control" id="tips" rows="3" name="tips" required></textarea>
                        </div>
                </section>
               
            </div>
    </main>
    <input type="submit" class="form-control" style="background-color: #ffbe33;" id="exampleInputPassword1" value="Add recipe">
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add Bus Ticket <i class="fas fa-plus"></i>
</button>
    <button>Add Recipe</button>
    <button class="btn_box" class="col-md-6" style="background-color: #ffbe33;">Add Recipe</button> -->
    <!-- <input type="submit" name="add" id="submit" class="addrecipe" value="Add recipe"> -->

    <!-- Main content of the page (content-wrapper) end -->
</form>

<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>


