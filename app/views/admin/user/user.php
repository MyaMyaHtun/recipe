<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>


<!-- Button trigger modal -->


<!-- <section id="food">
        <div id="head">
        </div>
        <div id="food-results">
        <div id="food-results" class="table-responsive">
            <table id="foodTable" class="table table-hover table-bordered text-center">
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
                        
                      
                      </td>
                    </tr>
          <?php } ?>
                
            </table>

                </div>
</section> -->



<!-- Modal -->
 <!-- for delete modal box -->

<!-- <?php foreach ($data['users'] as $users): ?>
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
<?php endforeach; ?> -->


<section id="food">
    <div id="head">
    </div>
    <div id="food-results">
        <div id="food-results" class="table-responsive">
            <table id="foodTable" class="table table-hover table-bordered text-center">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php foreach ($data['users'] as $users) { ?>
                        <?php if ($users['role'] == 0) { // Check if role is 0 ?>
                            <tr>
                                <td><?php echo $users['id']; ?></td>
                                <td><?php echo $users['name']; ?></td>
                                <td><?php echo $users['email']; ?></td>
                                <td><?php echo $users['role']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_<?php echo $users['id']; ?>">
                                        <i class="uil uil-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Modal for delete confirmation -->
<?php foreach ($data['users'] as $users): ?>
    <?php if ($users['role'] == 0) { // Check if role is 0 ?>
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
                        Are you sure you want to delete <b><?php echo $users['name']; ?></b>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a href="<?php echo URLROOT; ?>/UserController/destroy/<?php echo base64_encode($users['id']); ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php endforeach; ?>

<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>


<script>
function searchTable() {
    // Get the input field and table elements
    var input = document.getElementById("searchInput");
    var filter = input.value.toLowerCase();
    var table = document.getElementById("foodTable");
    var tr = table.getElementsByTagName("tr");

    // Loop through all table rows and hide those that don't match the search query
    for (var i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
        var tdArray = tr[i].getElementsByTagName("td");
        var found = false;

        // Check all columns in the current row
        for (var j = 0; j < tdArray.length; j++) {
            if (tdArray[j]) {
                var txtValue = tdArray[j].textContent || tdArray[j].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
        }

        if (found) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>
