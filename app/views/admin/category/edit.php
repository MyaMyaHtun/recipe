<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<form action="<?php echo URLROOT; ?>/categoryController/update" method="POST">
    <section class="book_section layout_padding">
    
        <div class="container">
            <div class="heading_container">
                <h2>Edit Category</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <div>
                            <input type="hidden" name="id" value="<?php echo isset($data['categories']['id']) ? $data['categories']['id'] : ''; ?>" />
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                value="<?php echo isset($data['categories']['name']) ? $data['categories']['name'] : ''; ?>"
                                required
                            />     
                        </div>
                        <div class="btn_box">
                            <button type="submit">Update</button>
                            <a class="btn btn-primary float-right px-5" href="<?php echo URLROOT;?>/categoryController/index">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>


<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>

