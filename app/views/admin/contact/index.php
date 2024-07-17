
<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>


<!-- Button trigger modal -->
<a href="<?php echo URLROOT; ?>/contactController/create" class="'btn btn-success">
<!-- <div  >
  <button class="btn_box" class="col-md-6" style="background-color: #ffbe33;">Add Contact</button>
</div> -->
</a>

<section id="food">
        <div id="food-results">
        <div id="food-results" class="table-responsive">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <th>Id</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <?php
                foreach ($data['contact'] as $contact) { ?>
               
                    <tr>
                      <td><?php echo $contact['id']; ?></td>
                      <td><?php echo $contact['phone']; ?></td>
                      <td><?php echo $contact['email']; ?></td>
                      <td>
                        <!-- Edit Row -->
                        <a href="<?php echo URLROOT; ?>/contactController/edit/<?php echo $contact['id']?>" class="'btn btn-success"><button class="btn btn-primary">Edit</button></a> 
                            
                      </td>
                    </tr>
          <?php } ?>

                
            </table>
        </div>
</section>


<?php require_once APPROOT . '/views/inc/admin/footer.php' ?>
