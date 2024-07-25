<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require_once APPROOT . '/views/inc/nav.php' ?>


<div class="wrapper">
    <div class="inner">
        <img src="<?php echo URLROOT; ?>/images/image-1.png" alt="" class="image-1">
        <form method="POST" class="register-form" id="register-form" action="<?php echo URLROOT; ?>/auth/register">
            <?php require APPROOT . '/views/components/auth_message.php'; ?>
            
            <h3>New Account?</h3>

            <div class="form-holder">
                <input type="text" class="form-control" placeholder="Username" name="name">
                <?php if (isset($data['name-err'])): ?>
                    <div class="error"><?php echo $data['name-err']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-holder">
                <input type="text" name="email" class="form-control" placeholder="Mail">
                <?php if (isset($data['email-err'])): ?>
                    <div class="error"><?php echo $data['email-err']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-holder">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <?php if (isset($data['password-err'])): ?>
                    <div class="error"><?php echo $data['password-err']; ?></div>
                <?php endif; ?>
            </div>

            <div class="form-holder">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                <?php if (isset($data['confirm_password-err'])): ?>
                    <div class="error"><?php echo $data['confirm_password-err']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="holder">
                <button type="submit" style="background-color:#ff7433";>
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

<?php require_once APPROOT . '/views/inc/footer.php' ?>


<style>
	.error {
    color: red;
    font-size: 0.9rem;
    margin-top: 4px; /* Adjust as needed */
}
</style>
