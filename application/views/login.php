<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700");

body {
  position: relative;
  height: 100vh;
  background-color: #51326a;
  margin: 0;
  font-family: "Josefin Sans", sans-serif;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: rgba(0, 0, 0, 0.38);
  font-weight: 500;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: rgba(0, 0, 0, 0.38);
  font-weight: 500;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: rgba(0, 0, 0, 0.38);
  font-weight: 500;
}
:-moz-placeholder {
  /* Firefox 18- */
  color: rgba(0, 0, 0, 0.38);
  font-weight: 500;
}

.login-screen {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 800px;
  height: 450px;
  margin: -225px 0 0 -400px;
  background-color: #fff;
  border-radius: 7px;
}

.login-screen .left-item,
.login-screen .right-item {
  width: 40%;
  height: 100%;
  float: left;
}

.login-screen .right-item {
  position: relative;
  width: 60%;
  border-bottom-right-radius: 7px;
  border-top-right-radius: 7px;
  background-image: url(https://images.pexels.com/photos/461064/pexels-photo-461064.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  z-index: 1;
}

.login-screen .right-item:before {
  position: absolute;
  z-index: -1;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

  content: "";

  opacity: 0.8;
  border-bottom-right-radius: 7px;
  border-top-right-radius: 7px;
  background-image: -moz-linear-gradient(45deg, #51326a 0%, #c24581 100%);
  background-image: -webkit-linear-gradient(45deg, #51326a 0%, #c24581 100%);
  background-image: -ms-linear-gradient(45deg, #51326a 0%, #c24581 100%);
}

.login-screen .left-item .login-panel {
  position: relative;
  display: table;
  width: 100%;
  height: 100%;
}

.login-screen .left-item .login-panel .inner-login-panel {
  display: table-cell;
  vertical-align: middle;
}

.login-screen .left-item .login-panel .inner-login-panel .content-panel {
  padding: 0 60px;
  text-align: center;
}

.login-screen .left-item .login-panel .inner-login-panel .content-panel .title {
  margin: 0 0 40px 0;
  text-transform: uppercase;
  font-size: 1em;
  color: #51326a;
}

.login-screen .left-item .login-panel .inner-login-panel .content-panel input {
  border: 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
  outline: none;
  width: 100%;
  padding: 6px 0;
  color: #51326a;
  text-transform: uppercase;
  font-weight: 500;
}

.login-screen
  .left-item
  .login-panel
  .inner-login-panel
  .content-panel
  input
  + input {
  margin-top: 20px;
}

.login-screen .left-item .login-panel .inner-login-panel .content-panel button {
  background-color: #51326a;
  border: 0;
  outline: none;
  color: #fff;
  text-transform: uppercase;
  padding: 12px 15px;
  font-weight: 500;
  border-radius: 2px;
  width: 100%;
  margin-top: 40px;
  box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.3);
  cursor: pointer;
}

.login-screen .right-item .slider-panel {
  display: table;
  width: 100%;
  height: 100%;
  text-align: center;
  color: #fff;
}

.login-screen .right-item .slider-panel .inner-slider-panel {
  display: table-cell;
  vertical-align: middle;
}

.login-screen .right-item .slider-panel .inner-slider-panel h1 {
  margin: 0 0 7px 0;
  text-transform: uppercase;
}

.login-screen .right-item .slider-panel .inner-slider-panel p {
  margin: 0;
  text-transform: uppercase;
  font-size: 13px;
  opacity: 0.7;
}

/* Responsive */
@media (max-width: 768px) {
  .login-screen {
    width: 700px;
    margin: -225px 0 0 -350px;
  }
}

@media (max-width: 767px) {
  .login-screen {
    width: 300px;
    margin: -225px 0 0 -150px;
  }
  .login-screen .right-item {
    display: none;
  }
  .login-screen .left-item {
    width: 100%;
  }
}

  </style>
</head>
<body>
  <div class="login-screen">
    <div class="left-item">
      <div class="login-panel">
        <div class="inner-login-panel">
          <div class="content-panel">
            <h3 class="title">Sign In</h3>
            <?php echo validation_errors(); ?>
            <form method="post" action="">
              <input type="text" name="username" placeholder="USERNAME" />
              <input type="password" name="password" placeholder="PASSWORD" />
              <button type="submit" value="Let's Go">Let's Go</button>
            </form>
            <?php echo anchor('Login/register', 'Register'); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="right-item">
      <div class="slider-panel">
        <div class="inner-slider-panel">
          <h1>Logo</h1>
          <p>Sign in to acess your account.</p>
        </div>
      </div>
    </div>
  </div> 
</body>
</html>