<!-- signup Model -->
	<!-- Modal2 -->
	<div   tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="container">
			<ul id="dispdata">

			</ul>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->
	<!-- <script src="assets/js/jquery-2.1.4.min.js"></script> -->
	<script>
		// $.ajax({
		// 	url:"http://localhost/29Sept_laravel_TTS2/php/6api/allusers",
		// 	success: function(response){
		// 		console.log(response);
		// 		let res=JSON.parse(response)//object
		// 		console.log(res);
		// 		htmlulli= '';
		// 		res.Data.forEach(element => {
		// 			htmlulli += "<li>"+element.name+"</li>"
		// 			//console.log(element.name);
		// 		})
		// 		console.log(htmlulli);
		// 		 $("#dispdata").html(htmlulli)
		// 	}
		// })
		fetch("http://localhost/29Sept_laravel_TTS2/php/6api/allusers").then(response=>response.json()).then((res)=>{
			    htmlulli= '';
				res.Data.forEach(element => {
					htmlulli += "<li>"+element.name+"</li>"
					
				})
				console.log(htmlulli);
				 $("#dispdata").html(htmlulli)
		})
	</script>
