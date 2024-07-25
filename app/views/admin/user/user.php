<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>


<!-- Button trigger modal -->


<section id="food">
        <div id="head">
        </div>
        <div id="food-results">
        <div id="food-results" class="table-responsive">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>

                    <th>Actions</th>
                </thead>
                <?php foreach ($data['users'] as $users) { ?>
                    <tr>
                      <td><?php echo $users['id']; ?></td>
                      <td><?php echo $users['name']; ?></td>
                      <td><?php echo $users['email']; ?></td>
                      <td><?php echo $users['role']; ?></td>
                      <td>

                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_<?php echo $users['id']; ?>">
                      <i class="uil uil-trash-alt"></i>
                            </button>
                        
                      <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_<?php echo $users['id']; ?>">
                                Delete
                            </button> -->
                      </td>
                    </tr>
          <?php } ?>
                
            </table>

                </div>
</section>



<!-- Modal -->
 <!-- for delete modal box -->

<?php foreach ($data['users'] as $users): ?>
    <div class="modal fade" id="deleteModal_<?php echo $users['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel_<?php echo $users['id']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="deleteModalLabel_<?php echo $users['id']; ?>">Warning!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete <b> <?php echo $users['name']; ?> </b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo URLROOT; ?>/UserController/destroy/<?php echo base64_encode($users['id']); ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>