<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<form action="<?php echo URLROOT; ?>/categoryController/store" method="post">
    <section class="book_section layout_padding">
      <div class="container">
        <div class="heading_container">
        <a class="btn btn-primary float-right px-5"   href="<?php echo URLROOT;?>/categoryController/index">Back</a>
          <h2>Add Category</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
                <div>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your category"
                    name="name"
                  />
                </div>
                <div class="btn_box">
                  <button>Create</button> 
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</form>

<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>

