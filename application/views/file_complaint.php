<html>

<body>

<div class = "user-input">
  <h1>Submit a Feedback/Complaint</h1>
  <p>Your feedback is highly appreciated</p>
  <form method="post" action="<?php echo base_url('File_Complaint/savingdata'); ?>">
    <table>
      <tr>
        <td>Feedback Type</td>
        <td></td>
        <td><input list="type" name="type">
          <datalist id="type">
            <option value="Feedback">
            <option value="Complaint">
          </datalist>

        </td>
      </tr>
      <tr>
        <td><p>Matric Number</p></td>
        <td></td>
        <td><input type="text" name="studentNum"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td></td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Feedback/Complaint</td>
        <td></td>
        <td><textarea name="formContent" rows="10" cols="23"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <div style="text-align:right">
            <input class="submit" type="submit" name="submit" value="Submit">
          </div>
        </td>
        <tr>
          <td colspan="3" style="text-align:right"><p style="color:black; font-size:.9rem; text-shadow: 0 0 2px #FF0000;"><?php echo isset($successMessage) ? $successMessage: '';?></p>
          <p style="color:black; font-size:.9rem; text-shadow: 0 0 2px #FF0000;"><?php echo validation_errors(); ?></p> </td>
        </tr>
      </tr>
    </table>
    <br>

  </form>
</div>
</body>
</html>

<style>
html{
  align-items:center;
}

h1{
  color:black;
}

.user-input{
  margin-top:100px;
  margin-left:30%;
}
td{
  font-size:1.2rem;
}
input{
  width:350px;
}

textarea{
  width:350px;
}
.submit{
  font-size:.9rem;
  width:66.05px;
}
p{
  margin-bottom:2rem;
}
.error{
  color:black;
  font-size:.9rem;
  text-shadow: 0 0 2px #FF0000;
}

</style>
