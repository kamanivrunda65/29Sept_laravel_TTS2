<?php
include_once("header.php");
?>
        <div class="container" >
            <div class="row mt-3">
                <div class="col-lg-4 offset-lg-4"><br>
                    <div class="card " style="border-width: 7px;background-color: rgb(226, 241, 249);border-color: rgb(21, 102, 143);">
                    
                        <center><h3 style="padding-top:10px;font-style: italic;">Login form</h3></center> 
                        <br>
                         <div class="card-body" style="padding-left: 30px;padding-right:30px;">
                        <form method="post">
                            <div class="row mb-3">
                                                              
                                <input type="text" class="form-control" name="username"  placeholder="User Name">
                            </div>
                            <div class="row mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-info " name="login" value="Login">
                                   
                                </div>
                            </div>
                        </form>
                        


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
include_once("footer.php");
?>