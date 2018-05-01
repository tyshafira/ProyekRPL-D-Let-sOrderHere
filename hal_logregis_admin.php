<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login/Logout animation concept</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

  <link rel="stylesheet" href="css1/style.css">
</head>

<body>
  <div class="cont">
  <div class="demoa">
    <div class="login" id="signin">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" placeholder="Password"/>
        </div>
        <button type="button" class="login__submit">Sign in</button>
        <p class="login__signup">Don't have an account? &nbsp;<a href="#signup">Sign up</a></p>
      </div>
    </div>
  </div>
</div>

<div class="cont">
  <div class="demob">
    <div class="login" id="signup">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" name="username" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <!--<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />-->
            <i class="fa fa-envelope-o" style="font-size:24px"></i>
          </svg>
          <input type="email" class="login__input name" name="email" placeholder="E-mail"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="password" placeholder="Password"/>
        </div>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <!--<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />-->
            <i class="fa fa-intersex" style="font-size:24px"></i>
          </svg>
          <input type="text" class="login__input name" name="gender" placeholder="Gender"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="password2" placeholder="Confirm Password"/>
          <br></br>
          <br>
          <p class="login__signup">Have an account? &nbsp;<a href="#signin">Sign in</a></p>
        </div>
        <button type="button" class="login__submit">Sign Up</button>
        <!--<p class="login__signup">Have an account? &nbsp;<a href="#signin">Sign in</a></p>-->
      </div>
    </div>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
