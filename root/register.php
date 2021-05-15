<!DOCTYPE html>
<html>

<head>
   <title> SignUp</title>
   <link rel="stylesheet" href="styles/register.css">
   <!-- Simple css to remove the watermark from the hosting website -->
   <link rel="stylesheet" href="styles/removewatermark.css">
   <!-- Simple css to remove the watermark from the hosting website -->

</head>

<body>
   <?php
   if (isset($_POST['form'])) {
      if ($_POST['name'] == "") {
         $error_msg['name'] = "Name is required!";
      }
      $name = $_POST['name'];
      if (!preg_match("/^[a-zA-Z-]*$/", $name)) {
         $error_msg['name'] = "Only letters allowed!";
      }
   }
   ?>

   <div class="hero">
      <div class="form-box">
         <div class="button-box">
            <div id="btn"> </div>
            <button type="button" class="toggle-btn" id="one"><a href="login.html">Sign in</a></button>
            <button type="button" class="toggle-btn" id="two">Sign up</button>
         </div>
         <div class="icon">
            <a href="index.html">
               <img src="images/wp_img/logo.png" width="80px" id="icon" alt="User Icon">
            </a>
         </div>
         <form id="register" method="post" action="" class="input-group" name="form">
            <div class="column" id="left">
               <input type="text" class="input-field" placeholder="Username" id="username" autofocus>
               <input type="email" class="input-field" placeholder="Email" id="email" autofocus>
               <input type="Password" name="password" class="input-field" placeholder="Password" id="password">
               <input type="Password" name="password" class="input-field" placeholder="Confirm Password" id="password">

            </div>

            <div class="column">
               <input type="text" class="input-field" placeholder="Firstname" id="firstname" autofocus>
               <?php
               if (isset($error_msg['firstname'])) {
                  echo "<div class='error' >" . $error_msg['name'] . "</div>";
               }
               ?>
               <input type="text" class="input-field" placeholder="Lastname" id="lastname" autofocus>
               <input type="text" name="phonenumber" class="input-field" placeholder="Phonenumber" id="phone">
               <input list="genders" placeholder="Country" class="input-field" name="gender" id="gender" autofocus>
               <datalist id="genders">
                  <option value="Kosova">
                  <option value="Shqiperia">
                  <option value="Mali I Zi">
                  <option value="Maqedonia">
                  <option value="Tjeter">
               </datalist>

               <button type="button" class="submit-btn"><b>Sign Up</b></button>

            </div>
            <div class="column">
               <textarea id="address" name="address" rows="6" class="input-field" placeholder="Specific address">
                 Write your address.
                </textarea>
               <div id="gen" class="input-field" style="background-color: white;color:gray;border:none">
                  <input type="radio" id="male" name="gender" value="Male">
                  <label for="male">Male</label><br>
                  <input type="radio" id="female" name="gender" value="Female">
                  <label for="female">Female</label><br>
                  <input type="radio" id="other" name="gender" value="Other">
                  <label for="other">Other</label>
               </div>
               <input type="checkbox" name="terms" value="terms">
               <label for="terms" style="color:gray"> I agree to Terms and Service rules.</label><br>
               <input type="checkbox" name="news" value="news">
               <label for="news" style="color:gray"> I want to receive news and emails.</label><br>

            </div>
         </form>
      </div>
   </div>

</body>

</html>