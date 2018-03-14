<!--Login, Signup, Forgot Password Modal -->
<!--Login, Signup, Forgot Password Modal -->
<div id="login-signup-modal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">

<!-- login modal content -->
  <div class="modal-content" id="login-modal-content">
  
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Login Now!</h4>
</div>
  
  <div class="modal-body">
    <form id="login-form" role="form">
      <div class="form-group" id="container-login-email">
          <div class="input-group">
          <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
          <input name="email" id="login-email" type="email" class="form-control input-lg" placeholder="Enter Email"  data-parsley-type="email" >
        </div>    
        <div id="error-email"></div>       
      </div>
      
      
      <div class="form-group" id="container-login-password">
          <div class="input-group">
          <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
          <input name="password" id="login-password" type="password" class="form-control input-lg" placeholder="Enter Password"  data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
          </div>       
        <div id="error-password"></div>                
      </div>
<!--       
      <div class="checkbox">
        <label><input type="checkbox" value="" checked>Remember me</label>
      </div> -->
        <button type="button" id="btn-login" style="background-color: #ffff00;
                               border: 2px solid black;
                 color: #383838;" class="btn btn-success btn-block btn-lg">LOGIN</button>
    </form>
  </div>
  
  <div class="modal-footer">
    <p>
    <a id="FPModal" style="
                        text-decoration-color: #ffcc00;
                        color: #383838;" href="javascript:void(0)">Forgot Password?</a> | 
    <a id="signupModal" style="
                        text-decoration: none;
            border-bottom: 1px solid #ffcc00;
                        color: black;   "  href="javascript:void(0)">Register Here!</a>
    </p>
  </div>
  
 </div>
        <!-- login modal content -->

        <!-- signup modal content -->
	 
        <div class="modal-content" id="signup-modal-content">

		
		<!-- multistep form -->
<form class="msform">
	<!-- progressbar -->
	
	<ul id="progressbar">
	
		<li class="active" style="margin-left: 15%;" >Account Setup</li>
		<!--<li>Social Profiles</li>-->
		<li>Personal Details</li>
	</ul>
	
	</center>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is the first step</h3>
    
    <div class="form-group" id="container-reg-email" class="reg-error">
      <input type="text" name="reg-email" id="reg-email" placeholder="Email" class="reg-form"/>
      <div id="error-reg-email" class="alert-danger"></div>   
    </div>
    <div class="form-group" id="container-reg-pass">
      <input type="password" id="reg-pass" name="reg-pass" placeholder="Password" class="reg-form"/>
      <div id="error-reg-pass" class="alert-danger"></div>   
    </div>  
    <div class="form-group" id="container-reg-cpass">
      <input type="password" id="reg-cpass" name="reg-cpass" placeholder="Confirm Password" class="reg-form" />
      <div id="error-reg-cpass" class="alert-danger"></div>   
    </div>
		
		
		<a id="loginModal" href="javascript:void(0)" style="float: left; 
															color: white;
															text-decoration: underline;
															margin-top: 4%;
															background-color: white;">Login Here!</a>
		<button type="button" name="next" id="btn-check" class="reg-form action-button" value="Next" style="float: right;"/>Create Account</button>
		<button type="button" name="next" id="btn-next" class="next reg-form action-button" value="Next" style="float: right;display:none;"/>Next</button>
	</fieldset>

	<fieldset>
		<h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We assure you the security of your details</h3>
    
    <div class="form-group" id="container-reg-fname">
      <input type="text" name="fname" id="reg-fname" placeholder="First Name" style="width: 200px;" class="reg-form"/>
      <div id="error-reg-fname" class="alert-danger"></div>   
    </div>
    
    <div class="form-group" id="container-reg-lname">
		  <input type="text" name="lname" id="reg-lname" placeholder="Last Name" style="width: 200px;margin-left: 3%;" class="reg-form"/>
      <div id="error-reg-lname" class="alert-danger"></div>   
    </div>
    
    <div class="form-group" id="container-reg-bdate">
      <input type="date" name="bdate" id="reg-bdate" placeholder="Birth Date (mm/dd/yy)" class="reg-form" style="width: 200px;" max="<?= date('Y-m-d') ?>"/>
      <div id="error-reg-bdate" class="alert-danger"></div>   
    </div>
    
    
    <div class="form-group" id="container-reg-gender">
      <select name="reg-gender" id="reg-gender" style="width: 200px;margin-left:3%;" class="reg-form">
        <option value="m">Male</option>
        <option value="f">Female</option>
      </select> 
      <div id="error-reg-gender" class="alert-danger"></div>   
    </div>
    
    <div class="form-group" id="container-reg-street">
	  	<input type="text" name="street" placeholder="Street" style="width: 200px;" id="reg-street" class="reg-form"/>
      <div id="error-reg-street" class="alert-danger"></div>   
    </div>
    
    <div class="form-group" id="container-reg-city">
		  <input type="text" name="city" class="reg-form" placeholder="Municipality / City" id="reg-city" style="width: 200px;margin-left: 3%;"/>
      <div id="error-reg-city" class="alert-danger"></div>   
    </div>
    
    <div class="form-group" id="container-reg-pcode">
		  <input type="text" name="pcode" placeholder="Postal Code" style="width: 200px;" class="reg-form" id="reg-pcode"/>
      <div id="error-reg-pcode" class="alert-danger"></div>   
    </div>

    <div class="form-group" id="container-reg-phone">
		  <input type="text" name="phone" placeholder="Phone" id="reg-phone" style="width: 200px;margin-left: 3%;" class="reg-form"/>
      <div id="error-reg-phone" class="alert-danger"></div>   
    </div>
		<br/><br/>
		<input type="button" name="submit" id="btn-submit" class="submit reg-form action-button" value="Submit"  />
		<!-- <input type="button" name="previous" class="previous reg-form action-button" value="Previous" /> -->
		
	</fieldset>
</form>
<div class="modal-footer" id="modal-footer1">
         </br></br></br></br></br></br></br></br>
		 </br></br></br></br></br></br></br></br></br>
		 
		
        </div>
</div>		
		
		
		
        
        <!-- forgot password content -->
         <div class="modal-content" id="forgot-password-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Recover Password!</h4>
      </div>
        
        <div class="modal-body">
          <form method="post" id="Forgot-Password-Form" role="form">
          
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                </div>                     
            </div>
                        
            <button type="button" id="btn-forgot" style="background-color: #ffff00;
			                               border: 2px solid black;
										   color: #383838;" class="btn btn-success btn-block btn-lg">
              <span class="glyphicon glyphicon-send"></span> SUBMIT
            </button>
          </form>
        </div>
        
        <div class="modal-footer" >
          <p>Remember Password ? <a id="loginModal1" style="text-decoration-color: #ffcc00;
		                          color: #383838;" href="javascript:void(0)">Login Here!</a></p>
        </div>
        
      </div>        
        <!-- forgot password content -->

		
    
    	<!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
		</div> 