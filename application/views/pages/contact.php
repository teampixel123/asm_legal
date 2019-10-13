<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('head.php'); ?>
  <body>

    <?php include('navbar.php'); ?>

  <section class="page-top">
    <div class="container-fluid">
      <div class="parallex-about">
      </div>
    </div>
  </section>

  <section class="padding-80 home-contact" id="Contact">
    <div class="container">
      <h1 class="title text-center hr-bottom-m">Email us with any questions or enquiries.</h1>

      <div class="row">
        <div class="col-md-8 offset-md-2">
          <p>We would be happy to answer your questions and set up a meeting with you. ASM Legal Services can help set you apart from the flock !</p>
          <form action="Website/send_contact_email" method="post" id="form_contact">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">First Name*</label>
                <input type="text" class="form-control required" name="contact_firstname" id="contact_firstname" placeholder="First Name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Last Name*</label>
                <input type="text" class="form-control required" name="contact_lastname" id="contact_lastname" placeholder="Last Name" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email*</label>
                <input type="email" class="form-control required email" name="conatact_email" id="conatact_email" placeholder="Email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Mobile*</label>
                <input type="number" class="form-control required mobile" name="contact_phone" id="contact_phone" placeholder="Phone" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Message*</label>
                <textarea name="message" class="form-control required" name="contact_message" id="contact_message" rows="8" cols="80" required></textarea>
              </div>
            </div>
            <button type="button" id="btn_contact" class="btn btn-primary btn-asm float-right">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="alert-box w-100">
    <div class="alert alert-success mx-auto text-center" role="alert">
      Mail Sent Successfully.
    </div>
    <div class="alert alert-danger mx-auto text-center" role="alert">
      Mail Not sent.
    </div>
  </div>

    <?php include('footer.php'); ?>

    <?php
    $send_contact_email = $this->session->flashdata('send_email');
    if($send_contact_email){ ?>
    <input type="text" id="send_email" value="<?php echo $send_contact_email; ?>">
    <script type="text/javascript">
      $(document).ready(function(){
        var send_email = $('#send_email').val();
        if(send_email == 'success'){
          $('.alert-success').show().delay(5000).fadeOut();
        }
        else{
          $('.alert-danger').show().delay(5000).fadeOut();
        }
      });
    </script>
    <?php  } ?>

      </body>
    </html>
