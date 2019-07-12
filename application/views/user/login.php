<div class="container container-full">
	<div class="row">
		<div class="col-lg-5 mr" style="margin-top: 15%;">
			<img src="<?php echo base_url('assets/media/login.png'); ?>">
			<h3 class="login-title">Welcome back!</h3>
			<form class="kt-form" action="<?php echo base_url('auth/login'); ?>" method="post" accept-charset="utf-8">
				<div class="input-group input-top">
					<input type="text" class="form-control customIn" placeholder="Email" name="identity" id="identity">
				</div>
				<div class="input-group input-top ">
					<input type="password" class="form-control customIn" placeholder="Password" name="password" id="password">
				</div>
				<div class="form-group" style="margin-top:4%;">
					<label class="kt-checkbox kt-checkbox--brand" style="float:left;margin-top:2%;" >
						<input type="checkbox" name="rememberme" id="rememberme"> Remember me
						<span></span>
					</label>
					<a style="float: right;margin-top:2%;">Forgot password?</a>
				</div>
				<div class="form-group" >
					<button class="btn btn-brand btn-elevate kt-login__btn-primary" style="margin-top: 10%;font-size:1rem;">Sign In </button>
				</div>
				<div class="form-group" >
					Don't have an account yet? <a style="margin-left:10%;"> Sign Up!</a>
				</div>
				
			</form>
		</div>
	</div>
</div>