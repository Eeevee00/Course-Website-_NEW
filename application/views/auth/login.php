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
    margin-top: 7%;
    margin-bottom: 130px;
    background-color:white;
    width:40%;
    height: 60%;
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
<h1>Login to Your Account</h1>
<p>Please login with your email and password</p>

<pre id="infoMessage" style = "color:red!important;"><?php echo $message;?></pre>



  <?php echo form_open("auth/login");?>

    <p class="form_attr">
      Email&ensp;&emsp;
      <?php echo form_input($identity);?>
    </p>

    <p class="form_attr">
      Password
      <?php echo form_input($password);?>
    </p>

    <p class="form_attr">
      <?php echo lang('login_remember_label', 'remember');?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    </p>


    <p class='login_btn'><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

  <?php echo form_close();?>

  <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

</div>
