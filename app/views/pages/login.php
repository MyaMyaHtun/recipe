<?php require_once APPROOT . '/views/inc/header.php' ?>
<div class="wrapper">
				<div class="inner">
					<img src="<?php echo URLROOT; ?>/images/image-1.png" alt="" class="image-1">
                    <form method="POST" class="register-form" id="login-form" action="<?php echo URLROOT; ?>/auth/login">
                    <?php require APPROOT . '/views/components/auth_message.php'; ?>
						<h3>Login</h3>
						<div class="form-holder">
							<!-- <span class="lnr lnr-envelope"></span> -->
							<input type="text" class="form-control" name="email" placeholder="Mail" required>
						</div>
						<div class="form-holder">
							<!-- <span class="lnr lnr-lock"></span> -->
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="holder">
						<button>
							<span>Login </span>
						</button>
						</div>
						<div class="form-holder">
						<a href="<?php echo URLROOT; ?>/pages/register">You need to create account!</a>
						</div>
					</form>
					<img src="<?php echo URLROOT; ?>/images/image-2.png" alt="" class="image-2">
				</div>
				
	</div>