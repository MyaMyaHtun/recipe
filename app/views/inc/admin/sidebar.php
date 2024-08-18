
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="uil uil-crockery"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Recipe Admin <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/admin">
        <i class="uil uil-dashboard"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo URLROOT; ?>/FoodController/index" data-toggle="collapse" data-target="#collapseFood"
        aria-expanded="true" aria-controls="collapseFood">
        <i class="uil uil-pizza-slice"></i>
        <span>Recipes</span>
    </a>
    <div id="collapseFood" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="<?php echo URLROOT; ?>/FoodController/index">View Recipe</a>
            <!-- <a class="collapse-item" href="cards.html">Cards</a> -->
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="uis uis-list-ul"></i>
        <span>Categories</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="<?php echo URLROOT; ?>/CategoryController/index">View Category</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="uil uil-utensils"></i>
        <span>Cuisine</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="collapseThree"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="<?php echo URLROOT; ?>/CuisineController/viewcuisine">View Cuisien</a>
        </div>
    </div>
</li>

<!-- Divider -->
<!-- <hr class="sidebar-divider"> -->

<!-- Heading -->
<!-- <div class="sidebar-heading">
    Addons
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="uil uil-folder"></i>
        <span>Pages</span>
    </a> -->
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo URLROOT; ?>/contactController/index">Contact</a>
            <!-- <a class="collapse-item" href="#">About</a> -->

            <!-- <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div> -->
    </div>
</li>

<!-- Users -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo URLROOT; ?>/UserController/user">
    <i class="uil uil-user" style="font-size: 15px;"></i>
        <span>Users</span></a>
</li>

<!-- Setting -->
<!-- <li class="nav-item">
    <a class="nav-link" href="<?php echo URLROOT; ?>/settingController/setting">
    <i class="uil uil-setting"></i>
        <span>Settings</span></a>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>