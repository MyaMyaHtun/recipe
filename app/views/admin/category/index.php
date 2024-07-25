
<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>


<!-- Button trigger modal -->
<a href="<?php echo URLROOT; ?>/categoryController/create" class="'btn btn-success">
<div  >
  <button class="btn_box" class="col-md-6" style="background-color: #ffbe33;">Add Category</button>
</div>
</a>

<section id="food">
        <div id="head">
        </div>
        <div id="food-results">
        <div id="food-results" class="table-responsive">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </thead>
                <?php
                $number = 1;
                foreach ($data['categories'] as $category) { ?>
               
                    <tr>
                      <td><?php echo $number++; ?></td>
                      <td><?php echo $category['name']; ?></td>
                      <td>
                        <!-- Edit Row -->
                        <a href="<?php echo URLROOT; ?>/categoryController/edit/<?php echo $category['id']?>" class="'btn btn-success"><button class="btn btn-primary"><i class="uil uil-edit"></i></button></a> 
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_<?php echo $category['id']; ?>">
                            <i class="uil uil-trash-alt"></i>
                            </button>
                      </td>
                    </tr>
          <?php } ?>

                
            </table>
        </div>
</section>


<!-- for delete modal box -->
<?php foreach ($data['categories'] as $category): ?>
<div class="modal fade" id="deleteModal_<?php echo $category['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel_<?php echo $category['id']; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title text-warning" id="deleteModalLabel_<?php echo $category['id']; ?>">Warning!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure wanted to delete  <b><?php echo $category['name']; ?>?</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="<?php echo URLROOT; ?>/CategoryController/destroy/<?php echo base64_encode($category['id']); ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>
