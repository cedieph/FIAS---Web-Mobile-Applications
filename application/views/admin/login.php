
<body id="mimin" class="dashboard form-signin-wrapper">

<div class="container">
</div>
  <form class="form-signin" id="login-form">
    <div class="panel periodic-login">
        <!--<span class="atomic-number">28</span>-->
        <div class="panel-body text-center">
            <img src = "<?=base_url()?>assets/landing/img/favicon.png" height = "150px" weight = "150px;"/>
            <br/><br/>
            <p class="atomic-mass">Gold's Gym Acropolis</p>

            <!--<i class="icons icon-arrow-down"></i>-->
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <input type="text" class="form-text" name="username" id="login_username"required>
              <span class="bar"></span>
              <label>Username</label>
              <div id="login_username-error"></div>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <input type="password" class="form-text" name="password" id="login_password" required>
              <span class="bar"></span>
              <label>Password</label>
              <div id="login_password-error"></div>
              
            </div>
            <button type="submit" id="btn-login" class="btn col-md-12" value="SignIn"/>SignIn</button>
        </div>
    </div>
  </form>

</div>