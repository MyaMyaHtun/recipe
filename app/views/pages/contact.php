<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require_once APPROOT . '/views/inc/nav.php' ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'myamyahtun.1234@gmail.com'; // SMTP username
        $mail->Password = 'ljkg vblv tklr ugof'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('myamyahtun.1234@gmail.com');
        $mail->addAddress('myamyahtun.1234@gmail.com'); // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'WowFood Suggestion';
        $mail->Body    = "Name: $name<br>Email: $email<br>Message:<br>$message";

        $mail->send();
   echo $successMessage = "Message have been sent";
        // echo json_encode(["status" => "success"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => $mail->ErrorInfo]);
    }

    exit;
}
?>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h4 class="heading mb-4">Let's talk about everything!</h4>
                            <p>
                                <img src="<?php echo URLROOT; ?>/images/undraw-contact.svg" alt="Image" class="img-fluid" width="80%"/>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <form class="mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="row">
                                
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4" style="background-color: #ff7433; border-color: #ff7433"/>
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#contactForm").on("submit", function(event) {
                event.preventDefault();
                $.ajax({
                    url: "", // Point to the PHP script handling form submission
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.status == "success") {
                            $("#form-message-success").show();
                            $("#contactForm")[0].reset();
                        } else {
                            $("#form-message-warning").text("Something went wrong, please try again.");
                        }
                    },
                    error: function() {
                        $("#form-message-warning").text("Something went wrong, please try again.");
                    }
                });
            });
        });
    </script>



<?php require_once APPROOT . '/views/inc/footer.php' ?>