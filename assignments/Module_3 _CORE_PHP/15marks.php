<?php
session_start();
if(isset($_POST['submit'])){
        $sub1=$_POST['sub1'];
        $sub2=$_POST['sub2'];
        $sub3=$_POST['sub3'];
        $sub4=$_POST['sub4'];
        $sub5=$_POST['sub5'];
        $total=0;
        $number=array($sub1,$sub2,$sub3,$sub4,$sub5);
       
        for($i=0;$i<5;$i++)
        {
            $total=$number[$i]+$total;
            
        }
        echo "<h2>Total : ".$total."</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abc</title>
     <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
        <div class="container" >
            <div class="row mt-3">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card " style="border-width: 7px;background-color: rgb(226, 241, 249);border-color: rgb(21, 102, 143);">
                        <div class="card-body">
                          <form method="post">
                            <div class="row mb-3">
                              <label  class="col-sm-3 col-form-label">Subject1</label>
                              <div class="col-sm-9">
                                <input type="number" class="form-control" name="sub1" min="0" max="100">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label  class="col-sm-3 col-form-label">Subject2</label>
                              <div class="col-sm-9">
                                <input type="number" class="form-control" name="sub2"min="0" max="100" >
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label  class="col-sm-3 col-form-label">Subject3</label>
                              <div class="col-sm-9">
                                <input type="number" class="form-control" name="sub3" min="0" max="100">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label  class="col-sm-3 col-form-label">Subject4</label>
                              <div class="col-sm-9">
                                <input type="number" class="form-control" name="sub4"min="0" max="100" >
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label  class="col-sm-3 col-form-label">Subject5</label>
                              <div class="col-sm-9">
                                <input type="number" class="form-control" name="sub5"min="0" max="100" >
                              </div>
                            </div>
                            <br><center><button type="submit" class="col-sm-4 btn btn-success" name="submit" >submit</button></center>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
</body>
</html>