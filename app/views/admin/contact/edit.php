<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<form action="<?php echo URLROOT; ?>/contactController/update" method="post">
    <section class="book_section layout_padding">
      <div class="container">
        <div class="heading_container">
        <!-- <a class="btn btn-primary float-right px-5"   href="<?php echo URLROOT;?>/contactController/index">Back</a> -->
        <a class="btn btn-primary" href="<?php echo URLROOT;?>/contactController/index">Back</a>
          <h2>Edit Contact</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
                <div>
                <input type="hidden" name="id" value="<?php echo isset($data['contact']['id']) ? $data['contact']['id'] : ''; ?>" />
                  <input
                    type="number"
                    class="form-control"
                    placeholder="Enter your phone"
                    name="phone" value="<?php echo $data['contact']['phone'] ?>" required
                  />
                </div>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your email"
                    name="email" value="<?php echo $data['contact']['email'] ?>" required
                  />
                </div>
                <div class="btn_box">
                  <button>Update</button> 
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</form>

<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>

