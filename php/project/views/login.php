<!-- signin Model -->
	<!-- Modal1 -->
	<divtabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Login Now</a>
						</p>
						<form action="#" method="post" id="loginform">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="username" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Login" name="login">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<script>
  $().ready(function() {
    // validate the comment form when it is submitted
    // $("#commentForm").validate();
    $("#loginform").validate({
      rules: {
        username: {
          required: true,
          minlength: 2   // value lenght 
        },
        password: {
          required: true,
          minlength: 2  //password lenght needed
        },
      },
      messages: {
        username: {
          required: "Please enter a username",    //user null value
          minlength: "Your username must consist of at least 2 characters"  //wrong lenght of password
        },
      }
    })
  })
</script>