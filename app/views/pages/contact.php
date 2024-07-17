<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require_once APPROOT . '/views/inc/nav.php' ?>


    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <h4 class="heading mb-4">Let's talk about everything!</h4>
                
                <p>
                  <img
                    src="<?php echo URLROOT; ?>/images/undraw-contact.svg"
                    alt="Image"
                    class="img-fluid" width="80%"
                  />
                </p>
              </div>
              <div class="col-md-6">
                <form
                  class="mb-5"
                  method="post"
                  id="contactForm"
                  name="contactForm"
                >
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="Your name" required
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Email" required
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group"></div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <textarea
                        class="form-control"
                        name="message"
                        id="message"
                        cols="30"
                        rows="7"
                        placeholder="Write your message" required
                      ></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <input
                        type="submit"
                        value="Send Message"
                        class="btn btn-primary rounded-0 py-2 px-4"
                        style="background-color: #ff7433; border-color: #ff7433"
                      />
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>

                <div id="form-message-warning mt-4"></div>
                <div id="form-message-success">
                  Your message was sent, thank you!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  








<?php require_once APPROOT . '/views/inc/footer.php' ?>