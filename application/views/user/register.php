<div class="container" style="margin-top:10%;">
    <div class="shadow p-3 mb-5 bg-white rounded row justify-content-center">
        <div class="col-md-6" style="padding-top: 5%;">
            <img src="<?php echo base_url('assets/media/register-left.png'); ?>" width="500px" height="500px">
        </div>
        <div class="col-md-5">
            <h1 class="joinerTop">Join City Task!</h1> 
            <p class="joiner">Start earning money for helping others!</p>
            <form method="post" action="<?php echo base_url('auth/create_user'); ?>">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="first_name" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="last_name" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                </div>
                <div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>

                <div class="form-group">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password_confirm" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm Password">
                </div>
                <label class="kt-checkbox kt-checkbox--success">
                    <input type="checkbox">Remember me?!
                    <span></span>
                </label>
                <a style="float:right">Forgot Password?!</a><br>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            
            </form>
        </div>
    </div>
</div>