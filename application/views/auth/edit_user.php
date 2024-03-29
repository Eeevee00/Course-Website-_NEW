<div class="form">
<div style="text-align:left; margin-left:20%;">
<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>


      <p>
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>
      </p>

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
      <div class="spacing"></div>
      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>

<?php echo form_close();?>
</div>

</div>

<style media="screen">
  h1{
    margin-top:8%;
  }

  h3{
    margin-top: 20px;
    font-size:1.1rem;
    font-weight:500 !important;
  }
  .spacing{
    margin-top:30px;
  }

  .form{
    text-align:center;
  }


</style>
