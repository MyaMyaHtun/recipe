<?php require_once APPROOT . '/views/inc/admin/header.php' ?>
<?php require_once APPROOT . '/views/inc/admin/sidebar.php' ?>
<?php require_once APPROOT . '/views/inc/admin/navbar.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

                        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a href="<?php echo URLROOT;?>/foodController/index" style="text-decoration:none;">Total Foods</a></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['totalFoods'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-fish fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a href="<?php echo URLROOT;?>/categoryController/index" style="text-decoration:none;">Categories</a>
                                    </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['totalCategories'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


              <!-- Number of Users -->
             <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a href="<?php echo URLROOT;?>/userController/user" style="text-decoration:none;">Users</a>
                                    </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['totalUsers'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a href="<?php echo URLROOT;?>/CuisineController/viewcuisine" style="text-decoration:none;">Cuisines</a>
                                    </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['totalCuisines'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-utensils fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
