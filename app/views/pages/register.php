<?php require_once APPROOT . '/views/inc/header.php' ?>

	<div class="wrapper">
				<div class="inner">
					<img src="<?php echo URLROOT; ?>/images/image-1.png" alt="" class="image-1">
					<form method="POST" class="register-form" id="register-form" action="<?php echo URLROOT; ?>/auth/register">
					<?php require APPROOT . '/views/components/auth_message.php'; ?>
						<h3>New Account?</h3>
						<div class="form-holder">
							<!-- <span class="lnr lnr-user"></span> -->
							<input type="text" class="form-control" placeholder="Username" name="name" required>
						</div>
						<div class="form-holder">
							<!-- <span class="lnr lnr-envelope"></span> -->
							<input type="text" name="email" class="form-control" placeholder="Mail" required>
						</div>
						<div class="form-holder">
							<!-- <span class="lnr lnr-lock"></span> -->
							<input type="password" name="password" class="form-control" placeholder="Password" required>
						</div>
						<div class="holder">
						<button>
							<span>Register</span>
						</button>
						</div>

						<div class="form-holder">
						<a href="<?php echo URLROOT; ?>/pages/login">Already have an account?</a>
						</div>
						
					</form>
					<img src="<?php echo URLROOT; ?>/images/image-2.png" alt="" class="image-2">
				</div>
				
	</div>



