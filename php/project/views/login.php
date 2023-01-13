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
						<h3 class="agileinfo_sign">Login </h3>
						
						<form  method="post" id="loginform" onsubmit="loginform()">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" id="name" name="name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" id="password" name="password" required="">
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
    }
	)
})
	function loginform() {
        event.preventDefault();     //not send defalt value 
        
        let FormData = $('#loginform').serializeArray();//get data by form id(serialization)
            //console.log(FormData);
            var result = {};
            $.each(FormData, function() {
            result[this.name] = this.value;   //by foreach method convert form data in key: value
            });
       
        let header_for_post = {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            body: JSON.stringify(result) // body data type must match "Content-Type" header
        }
        //console.log(header_for_post);


         fetch("http://localhost/29Sept_laravel_TTS2/php/6api/login", header_for_post).then(response => response.json()).then((res) => {
             console.log(res);
            //data=  $.parseJSON(res)
            //console.log(res.getValue(Code));
         })


    }
  
</script>