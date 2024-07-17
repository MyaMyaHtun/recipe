<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<form action="<?php echo URLROOT; ?>/contactController/store" method="post">
    <section class="book_section layout_padding">
      <div class="container">
        <div class="heading_container">
        <!-- <a class="btn btn-primary float-right px-5"   href="<?php echo URLROOT;?>/contactController/index">Back</a> -->
        <a class="btn btn-primary" href="<?php echo URLROOT;?>/contactController/index">Back</a>
          <h2>Add Contact</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
            <input type="hidden" name="id" value="<?php echo isset($data['contact']['id']) ? $data['contact']['id'] : ''; ?>" />
                <div>
                  <input
                    type="number"
                    class="form-control"
                    placeholder="Enter your phone"
                    name="phone" required
                  />
                </div>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your email"
                    name="email" required
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

