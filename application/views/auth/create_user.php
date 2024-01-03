<style>
  html{
    text-align:center;
    align-items:center;
    background-color:black;
  }

  h1{
    color:black;
  }


  p{
    font-size:.9rem;
  }

  .form{
    padding: 1rem;
    margin-left: 30%;
    margin-top: 6%;
    margin-bottom: 0px;
    background-color:white;

    height: 40rem;
    text-align:left;
    border-radius: 10px;
  }



  .form_attr{
    font-size:1.2rem;
  }
  #infoMessage{
    text-shadow: 0 0 2px #FF0000;
  }
  .forgot_password{
    color:#0c1e48;
  }


</style>

<div class="form">
  <h1><?php echo lang('create_user_heading');?> <br>(Admin Only)</h1>
  <p><?php echo lang('create_user_subheading');?></p>
  <p>User group can be modified later</p>


  <div id="infoMessage"><?php echo $message;?></div>

  <?php echo form_open("auth/create_user");?>


        <p style="margin-bottom:0;"><?php echo 'Matric Number'?></p>
        <input style = "width:172px; margin-bottom:7px;"type="text" name="studentNum">

        <?php
        if($identity_column!=='email') {
            echo '<p>';
            echo lang('create_user_identity_label', 'identity');
            echo '<br />';
            echo form_error('identity');
            echo form_input($identity);
            echo '</p>';
        }
        ?>


        <p>
              <?php echo lang('create_user_email_label', 'email');?> <br />
              <?php echo form_input($email);?>
        </p>

        <!-- <p>
              <?php echo lang('create_user_phone_label', 'phone');?> <br />
              <?php echo form_input($phone);?>
        </p> -->

        <p>
              <?php echo lang('create_user_password_label', 'password');?> <br />
              <?php echo form_input($password);?>
        </p>

        <p>
              <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
              <?php echo form_input($password_confirm);?>
        </p>


        <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

  <?php echo form_close();?>
</div>
