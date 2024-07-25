<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>


<!-- Button trigger modal -->
<a href="<?php echo URLROOT; ?>/foodController/create" class="'btn btn-success">
<div  >
  <button class="btn_box" class="col-md-6" style="background-color: #ffbe33;">Add Food</button>
</div></a>



<section id="food">
        <div id="food-results" class="table-responsive">
        
            <table id="foodTable" class="table table-hover table-bordered text-center" style="table-layout: fixed; width: 100%;">
                <thead>
                    <th style="width: 200px;">Id</th>
                    <th style="width: 200px;">Name</th>
                    <th style="width: 200px;">CategoryName</th>
                    <th style="width: 200px;">CuisineName</th>
                    <th style="width: 200px;">Image</th>
                    <!-- <th>CategoryId</th>
                    <th>Image</th> -->
                    <th style="width: 200px;">Cook Time</th>
                    <th style="width: 200px;">Prepare Time</th>
                    <th style="width: 500px;">Description</th>
                    <th style="width: 500px;">Ingredient</th>
                    <th style="width: 500px;">Step1</th>
                    <th style="width: 500px;">Step2</th>
                    <th style="width: 500px;">Step3</th>
                    <th style="width: 500px;">Tips</th>
                    <th style="width: 200px;">Actions</th>
                </thead>
                <?php
                $number = 1;
                foreach ($data['foods'] as $food) { ?>
                    <tr>
                      <td><?php echo $number++; ?></td>
                      <!-- <td><?php echo $food['id']; ?></td> -->
                      <td><?php echo $food['name']; ?></td>
                      <td><?php echo $food['category_name']; ?></td>
                      <td><?php echo $food['cuisine_name']; ?></td>
                      <td>
                       <img src="<?php echo URLROOT; ?>/public/food_images/<?php echo $food['imagefile'] ?>" alt="Food Image" width="150px" >
                    </td>
                      <td><?php echo $food['totaltime']; ?></td>
                      <td><?php echo $food['preparetime']; ?></td>
                      <td><?php echo $food['description']; ?></td>
                      <td><?php echo $food['ingredient']; ?></td>
                      <td><?php echo $food['step1']; ?></td>
                      <td><?php echo $food['step2']; ?></td>
                      <td><?php echo $food['step3']; ?></td>
                      <td><?php echo $food['tips']; ?></td>
                      <td>
                        <!-- Edit Row -->
                        <a href="<?php echo URLROOT; ?>/FoodController/edit/<?php echo $food['id']?>" class="'btn btn-success"><button class="btn btn-primary"><i class="uil uil-edit"></i></button></a> 
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_<?php echo $food['id']; ?>">
                            <i class="uil uil-trash-alt"></i>
                            </button>
                      </td>
                    </tr>
          <?php } ?>
               
                
            </table>

                </div>
</section>

  <?php foreach ($data['foods'] as $food): ?>
    <div class="modal fade" id="deleteModal_<?php echo $food['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel_<?php echo $food['id']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="deleteModalLabel_<?php echo $food['id']; ?>">Warning!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete<b><?php echo $food['name']; ?></b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo URLROOT; ?>/FoodController/destroy/<?php echo base64_encode($food['id']); ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
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



