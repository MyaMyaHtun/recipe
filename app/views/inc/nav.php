<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
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
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/aa">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/cuisine">Cuisines</a>
        </li>
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
