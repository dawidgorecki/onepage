<section id="contact">

    <div class="row">
        <div class="col-12">
            <h1 class="section-header text-center">Contact</h1> 
        </div>
    </div>

    <div class="row">

        <div class="col-5">
            <h2 class="section-sub-header">company <strong>address</strong></h2>
            <p><strong>Compane Name</strong><br><br>
            Address Line 1 <br>
            Address Line 2 <br>
            Address Line 3 <br>
            </p>

            <div class="google-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5049352.436623524!2d14.647385953400269!3d51.83348842983918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47009964a4640bbb%3A0x97573ca49cc55ea!2sPolska!5e0!3m2!1spl!2spl!4v1493554508868" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
        </div>

        <div class="col-7">
            <h2 class="section-sub-header">Contact <strong>form</strong></h2>          

            <?php 
              if (isset($_GET['msg'])) {
                $msg = get_post($_GET['msg']);

                switch ($msg) {
                  case 'send':
                    echo "<p><strong>Message has been sent.</strong></p>";
                    break; 

                  case 'fail':
                    echo "<p><strong>Message could not be sent.</strong></p>";
                    break;
                }
              }
            ?>
            
            <form action="send-mail.php" method="post">
            
            <div class="row top-lg">
                <div class="col-6">
                  <label for="username">Your name:*</label><br>
                  <input type="text" name="username" id="username" class="text-input" required>
                </div>
                <div class="col-6">
                  <label for="email">E-mail address:*</label><br>
                  <input type="email" name="email" id="email" class="text-input" required>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                  <label for="message">Your message:*</label><br>
                  <textarea name="message" id="message" rows="10" required></textarea>
                  <input type="submit" name="send_mail" value="Send message" class="btn btn-danger">
                </div>
            </div> 

            </form>

        </div>

    </div>

</section>
<!-- / #contact -->
