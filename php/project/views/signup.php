<style>
	input+span{
		color:#ff0000;
		margin-bottom: 5px;
	}
</style>
<!-- signup Model -->
	<!-- Modal2 -->
	<div   tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Grocery Shoppy! Let's set up your Account.
						</p>
						<form  method="post" id="registForm">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="name" onblur="checkreq(this)" required>
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="email" id="email"  required>
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Mobile Number" name="mobile_no" onblur="checkreq(this)" onkeypress="return (event.which >=48 && event.which <=57 )" required>
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" onblur="checkreq(this)" id="password1" required>
							</div>
							
							<input type="submit" name="register" value="Sign Up" onclick="registerData()" >
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<script>
		function checkreq(e){//check value of field
			const el=e;
			const newEl = document.createElement("span");//create span for warning
            const newContent = document.createTextNode("This field is required");//warning text
            newEl.appendChild(newContent);//change or append warning text
            if (el.value == "") {   //if value is null
            if (e.nextSibling.nodeName == "SPAN") {
                e.nextSibling.remove();  //remove old span and create new
                el.after(newEl);
            } else {
                el.after(newEl);//if any span is not in field then create new
            }
            } else {
           // e.nextSibling.remove()//if value enter in that feild
            }
		}


		document.getElementById("email").addEventListener("keyup", function() {
        // console.log(event);
        const el = this;          //email value in el
        //console.log(this.value);           
        const newEl = document.createElement("span");       //create span for value if invalid email
        const newContent = document.createTextNode("Invalid email format");     //value not type of pattern
        newEl.appendChild(newContent);          //append warning
        // let pattern = /^+$/;
        let pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;  
		//pattern of email  ^--starting point  ([a-zA-Z0-9_\.\-])----charchter   +---concate   \@----add slase befor @character  (([a-zA-Z0-9\-])+\.)-----gmail  add .   
		// {2,4}--after we user 2 3 4 charcater  .com .in .webp  $--marge every thing /--start and end  
        console.log(pattern.test(this.value));  //if email pattern is right then output is true
        if (pattern.test(this.value)) {    //for true email type
            if (this.nextSibling.nodeName == "SPAN") {
                this.nextSibling.remove();   //remove invalid email type span
                // el.after(newEl);
            }
        } else {
            console.log("inside false", this.nextSibling);  //for wrong email type
            if (this.nextSibling.nodeName == "SPAN") {
                this.nextSibling.remove();  //remove old span and made new
                el.after(newEl);
            } else {
                el.after(newEl);
            }
        }
    })



	function registerData() {
        event.preventDefault();     //not send defalt value 
        let FormData = $("#registForm").serializeArray()    // convert form value in name : key ,value : input data
        //console.log(FormData);
        var result = {};
        $.each(FormData, function() {
            result[this.name] = this.value;   //by foreach method convert form data in key: value
        });
        //console.log(result);
        let header_for_post = {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
           
            body: JSON.stringify(result) // body data type must match "Content-Type" header
        }
        //console.log(header_for_post);
         fetch("http://localhost/29Sept_laravel_TTS2/php/6api/registration", header_for_post).then(response => response.json()).then((res) => {
            console.log(res);
         })
    }
	</script>
