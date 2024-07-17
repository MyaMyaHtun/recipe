
<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>


<!-- Button trigger modal -->
<a href="<?php echo URLROOT; ?>/CuisineController/addcuisine" class="'btn btn-success">
<div  >
  <button class="btn_box" class="col-md-6" style="background-color: #ffbe33;">Add Cuisine</button>
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
                    <th>Cuisine Name</th>
                    <th>Actions</th>
                </thead>
                <?php
                $number = 1;
                 foreach ($data['cuisines'] as $cuisine) { ?>
                    <tr>
                    <td><?php echo $number++; ?></td>
                      <!-- <td><?php echo $cuisine['id']; ?></td> -->
                      <td><?php echo $cuisine['cuisineName']; ?></td>
                      <td>
                        <!-- Edit Row -->
                        <a href="<?php echo URLROOT; ?>/CuisineController/edit/<?php echo $cuisine['id']?>" class="'btn btn-success"><button class="btn btn-primary">Edit</button></a> 
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_<?php echo $cuisine['id']; ?>">
                                Delete
                            </button>
                      </td>
                    </tr>
          <?php } ?>

                
            </table>
        </div>
</section>


<!-- for delete modal box -->
<?php foreach ($data['cuisines'] as $cuisine): ?>
<div class="modal fade" id="deleteModal_<?php echo $cuisine['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel_<?php echo $cuisine['id']; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title text-warning" id="deleteModalLabel_<?php echo $cuisine['id']; ?>">Warning!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure Wanted to Delete <b><?php echo $cuisine['cuisineName']; ?></b>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="<?php echo URLROOT; ?>/CuisineController/destroy/<?php echo base64_encode($cuisine['id']); ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>
