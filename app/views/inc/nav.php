<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php $currentPage = basename($_SERVER['REQUEST_URI']);?>

<nav class="navbar navbar-expand-lg navbar-light shadow mb-2">
    <a class="navbar-brand" href="#"><img src="<?php echo URLROOT; ?>/images/loggo.png"/></a> 

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span>
        <i class="uis uis-bars" style="color:black; font-size:30px;"></i>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-nav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/dashboard">Home</a>
        </li>
        <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link" href="">Categories</a> -->
          <li class="nav-item">
  <select class="custom-select" onchange="location = this.value;">
    <option value="">Categories</option>
    <option value="<?php echo URLROOT; ?>/pages/breakfast">Breakfast</option>
    <option value="<?php echo URLROOT; ?>/pages/lunch">Lunch</option>
    <option value="<?php echo URLROOT; ?>/pages/dinner">Dinner</option>
  </select>
</li>


          <!-- <a class="nav-link" href="">Categories</a> -->
          <!-- <li class="nav-item dropdown">
          <div class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Categories
  </div>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/breakfast">Breakfast</a></li>
    <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/lunch">Lunch</a></li>
    <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/dinner">Dinner</a></li>
  </ul>
</li> -->

<!-- <li class="nav-item dropdown">
  <div class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Categories
  </div>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item <?php if($currentPage == 'breakfast') echo 'active'; ?>" href="<?php echo URLROOT; ?>/pages/breakfast">Breakfast</a></li>
    <li><a class="dropdown-item <?php if($currentPage == 'lunch') echo 'active'; ?>" href="<?php echo URLROOT; ?>/pages/lunch">Lunch</a></li>
    <li><a class="dropdown-item <?php if($currentPage == 'dinner') echo 'active'; ?>" href="<?php echo URLROOT; ?>/pages/dinner">Dinner</a></li>
  </ul>
</li> -->

<li class="nav-item">
  <select class="custom-select" onchange="location = this.value;">
    <option value="">Cuisines</option>
    <option value="<?php echo URLROOT; ?>/pages/italian">Italian Food</option>
    <option value="<?php echo URLROOT; ?>/pages/japanese">Japanese Food</option>
    <option value="<?php echo URLROOT; ?>/pages/korean">Korean Food</option>
    <option value="<?php echo URLROOT; ?>/pages/myanmar">Myanmar Food</option>
  </select>
</li>
                                    
           
        <!-- </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/cuisine">Cuisines</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
        </li>
        <li class="nav-item">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a class="nav-link" href="<?php echo URLROOT; ?>/auth/logout">Logout</a>
                <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/save"><i class="uis uis-bookmark" style="color:#ff7433"></i></a>
            
            </li>
            <?php else: ?>
                <a class="nav-link" href="<?php echo URLROOT; ?>/auth/login">Login</a>
            <?php endif; ?>
        </li>
      </ul>
    </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const toggler = document.querySelector(".navbar-toggler");
    const collapse = document.querySelector(".navbar-collapse");

    toggler.addEventListener("click", function() {
        collapse.classList.toggle("show");
    });
});
</script>
<style>
  .custom-select {
  border: none;
  background-color: transparent;
  appearance: none; /* For removing the default dropdown arrow in some browsers */
  outline: none; /* For removing the focus outline */
  padding: 5px; /* Adjust padding as needed */
  color:gray;
}
</style>