<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
		<!---728x90--->

  <div class="panel panel-default">
    <div class="panel-heading">
      Users Table
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-9 m-b-xs">
        
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
    <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th>NO</th>           
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th data-breakpoints="xs">Password</th>
            <th data-breakpoints="xs">Date</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Role id</th>
            <th>Change</th>
          </tr>
        </thead>
        <tbody id="displaydata">
        
          
          
          
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  <!---728x90--->
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  
			</div>
		  </div>
  <!-- / footer -->
</section>
<script>
		
		fetch("http://localhost/29Sept_laravel_TTS2/php/6api/allusers").then(response=>response.json()).then((res)=>{
			   htmltrtd = '';
         count=1
				res.Data.forEach(element => {
					htmltrtd += "<tr><td>count</td><td>"+element.name+"</td><td>"+element.email+"</td><td>"+element.mobile_no+"</td><td>"+element.password+"</td><td>"+element.date+"</td><td>"+element.role_id+"</td><td> <button onclick="deleteuser(${element.id})">delete</button> </td></tr>"
					count++;
				})
				 console.log(htmltrtd);
				 $("#displaydata").html(htmltrtd)
		});
	</script>