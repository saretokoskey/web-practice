<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>LOGIN</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <h2>Login Form</h2>
<form action="Home_page.php" method="post">
  <div class="imgcontainer">

    <img src="img\login_icon.png" alt="Avatar" class="avatar">
  </div>


  <div class="container">
    <label for="uname"><b>Username</b></label>

    <input type="text" placeholder="Enter Username" name="uname" required >

    <div class="form-group mb-2">
                    <label for="myInput" class="form-control-label">Password</label>
                    <input name="password" type="password" class="form-control" id="myInput">
                    <br>
                    <input type="checkbox" id="showPasswordCheckbox"> Show Password
                </div>
                
                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var passwordInput = document.getElementById("myInput");
                    var checkbox = document.getElementById("showPasswordCheckbox");
                    
                    checkbox.addEventListener("click", function() {
                        if (checkbox.checked) {
                            passwordInput.type = "text";
                        } else {
                            passwordInput.type = "password";
                        }
                    });
                });
                </script>
        
    <button type="submit">Login</button>
  </div>
  <a href="" class="mb-2">forgot password</a>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    <!-- <a href="" class="mb-2">forgot password</a> -->
                                    <!-- <input name="login" type="submit" value="Login" class="btn btn-primary w-100"> -->
  </div>
</form>
</body>
</html>