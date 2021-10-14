<?php include_once("templates/header.php"); ?>
 




<form  action="" method="post" >

<div class="form-group">
<label for="First Name">Frist Name</label>
  <input type="text" name = "first_name" placeholder = "First Name">
  </div>
  
  <div class="form-group">
  <label for="Last Name">Last Name</label>
  <input type="text" name = "last_name" placeholder = "Last Name">
  </div>
  
  <div class="form-group">
  <label for="Email">Email</label>
  <input type="email" name = "email" placeholder = "Your Email">
  </div>
  
  <div class="form-group">
  <label for="Message">Message</label>
 <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
 </div>
  
  <div class="form-control">
  <label for="Gender">Select Gender</label>
  <input type="radio" name = "gender" value ="male"> Male
  <input type="radio" name = "gender" value ="female"> Female
  <input type="radio" name = "gender" value ="other"> Other
  </div>
  <button type="submit">Submit</button>
 
</form>



















<?php include_once("templates/footer.php"); ?>




















