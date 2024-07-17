<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<form action="<?php echo URLROOT; ?>/CuisineController/update" method="post">
   
    <section class="book_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>Add Cuisine</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
                <div>
                  <!-- <input
                    type="text"
                    class="form-control"
                    
                    name="cuisineName" value="<?php echo $data['cuisines']['cuisineName'] ?>" required
                  /> -->
                  <input type="hidden" name="id" value="<?php echo isset($data['cuisines']['id']) ? $data['cuisines']['id'] : ''; ?>" />
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Category"
                                name="cuisineName"
                                value="<?php echo isset($data['cuisines']['cuisineName']) ? $data['cuisines']['cuisineName'] : ''; ?>"
                                required
                            />
                  <!-- <input
                    type="text"
                    class="form-control"
                    placeholder="Cuisien"
                    name="cuisienName" required
                  /> -->
                </div>
                <div class="btn_box">
                  <button type="submit">Update Cuisine</button>
                  <!-- <button>Cancel</button> -->
                  <a class="btn btn-primary float-right px-5"   href="<?php echo URLROOT;?>/CuisineController/viewcuisine">Back</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</form>

<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>

