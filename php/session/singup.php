<?php
include_once("header.php");
?>

        <div class="container" >
            <div class="row mt-3">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card " style="border-width: 7px;background-color: rgb(226, 241, 249);border-color: rgb(21, 102, 143);">
                        
                     

                        <center><h4 style="padding-top:10px;font-style: italic;"><u>Registration form</u></h4></center> 
                          
                         <br>
                         <div class="card-body">
                        <form>
                            <div class="row mb-3">
                              <label for="inputEmail3" class="col-sm-3 col-form-label">FirstName</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" >
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="inputPassword3" class="col-sm-3 col-form-label">MiddleName</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="inputPassword3" class="col-sm-3 col-form-label">LastName</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Current Address</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" class="form-control" rows="2"></textarea>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Mobile no.</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"><input type="password" class="form-control" >
                                  
                                </div>
                               
                              </div>
                              <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Email ID</label>
                                <div class="col-sm-9">
                                  <input type="email" class="form-control" >
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" >
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Re-type Password</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" >
                                </div>
                              </div>
                           
                            <fieldset class="row mb-3">
                              <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
                              <div class="col-sm-9">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios"  value="Male" >
                                  <label class="form-check-label" for="gridRadios1">
                                    Male
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios"  value="Female">
                                  <label class="form-check-label" for="gridRadios2">
                                    Female
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios" value="Other">
                                  <label class="form-check-label" for="gridRadios2">
                                    Other
                                  </label>
                                </div>
                              </div>
                            </fieldset>
                            <br><center><button type="submit" class="col-sm-4 btn btn-success" >Register</button></center>
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