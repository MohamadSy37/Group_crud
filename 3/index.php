<?php
error_reporting(0);
$error=$_GET['rn'];
if($error!=null){
  echo"<script>alert('".$error.".');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/style.css">
    <title>Rigester</title>
</head>
<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
          <form action="asset/php/join.php" method="POST">
              <div class="formbold-input-flex">
                <div>
                    <label for="firstname" class="formbold-form-label"> First name </label>
                    <input
                    type="text"
                    name="firstname"
                    id="firstname"
                    placeholder="Sami"
                    class="formbold-form-input"
                    />
                </div>
                <div>
                    <label for="lastname" class="formbold-form-label"> Last name </label>
                    <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    placeholder="Sami"
                    class="formbold-form-input"
                    />
                </div>
              </div>
              <div class="formbold-input-flex">
                <div>
                    <label for="password" class="formbold-form-label"> password </label>
                    <input
                    type="password"
                    name="password"
                    id="password"
                    class="formbold-form-input"
                    />
                </div>
                <div>
                    <label for="repassword" class="formbold-form-label"> repassword </label>
                    <input
                    type="password"
                    name="repassword"
                    id="repassword"
                    class="formbold-form-input"
                    />
                </div>
              </div>
              <div class="formbold-input-flex">
                <div>
                    <label for="email" class="formbold-form-label"> Mail </label>
                    <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Sami@mail.com"
                    class="formbold-form-input"
                    />
                </div>
                <div>
                    <label for="phone" class="formbold-form-label"> Phone </label>
                    <input
                    type="number"
                    min=0
                    name="phone"
                    id="phone"
                    placeholder="+963934664357"
                    class="formbold-form-input"
                    />
                </div>
              </div>
              <div class="formbold-input-flex">
                <div>
                    <label for="data" class="formbold-form-label"> data </label>
                    <input
                    type="date"
                    name="data"
                    id="data"
                    class="formbold-form-input"
                    />
                </div>
                <div>
                    <label for="Country" class="formbold-form-label"> Country </label>
                    <input
                    type="text"
                    name="Country"
                    id="Country"
                    placeholder="Country"
                    class="formbold-form-input"
                    />
                </div>
              </div>
              <div class="formbold-input-radio-wrapper">
                  <label for="jobtitle" class="formbold-form-label"> What are you Gender? </label>
      
                  <div class="formbold-radio-flex">
                    <div class="formbold-radio-group">
                      <label class="formbold-radio-label">
                        <input class="formbold-input-radio" value="male" type="radio" name="Gender" id="jobtitle">
                        Male
                        <span class="formbold-radio-checkmark"></span>
                      </label>
                    </div>
      
                    <div class="formbold-radio-group">
                      <label class="formbold-radio-label">
                        <input class="formbold-input-radio" value="fmale" type="radio" name="Gender" id="jobtitle">
                        Fmale
                        <span class="formbold-radio-checkmark"></span>
                      </label>
                    </div>
      
                    <div class="formbold-radio-group">
                      <label class="formbold-radio-label">
                        <input class="formbold-input-radio" value="non" type="radio" name="Gender" id="jobtitle">
                        Better not say
                        <span class="formbold-radio-checkmark"></span>
                      </label>
                    </div>
      
                  </div>
              </div>
      
              <div>
                  <label for="message" class="formbold-form-label"> Message </label>
                  <textarea
                      rows="6"
                      name="message"
                      id="message"
                      placeholder="Type your message"
                      class="formbold-form-input"
                  ></textarea>
              </div>
      <input type="submit" class="formbold-btn" value="Join" name="join">
      <a href="login.php">login</a>
          </form>

        </div>
      </div>
</body>
</html>