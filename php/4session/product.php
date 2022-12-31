<?php
include_once("header.php");
if(isset($_REQUEST['product1'])){
  $_SESSION['cartdata']['product1']=array("productname"=>$_REQUEST['pname'],"productprize"=>$_REQUEST['pprice']);
}
if(isset($_REQUEST['product2'])){
  $_SESSION['cartdata']['product2']=array("productname"=>$_REQUEST['pname'],"productprize"=>$_REQUEST['pprice']);
}
if(isset($_REQUEST['product3'])){
  $_SESSION['cartdata']['product3']=array("productname"=>$_REQUEST['pname'],"productprize"=>$_REQUEST['pprice']);
}
if(isset($_REQUEST['product4'])){
  $_SESSION['cartdata']['product4']=array("productname"=>$_REQUEST['pname'],"productprize"=>$_REQUEST['pprice']);
}
?>
<main>
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-6 mt-3 ">
                    <div class="card " style="max-width: 700px;" >
                        <div class="row ">
                          <div class="col-lg-6"><center>
                            <img src="images/6.jpg" class="img-fluid rounded-start" alt="..." style="height:350px;width:350px;" ></center>
                          </div>
                          <div class="col-lg-6">
                            <div class="card-body">
                              <h5 class="card-title" >Women Angarkha and Dhoti Pant Viscose Rayon</h5>
                             <p>Kurta set<br>Rs.500</p>

                              <p class="card-text">Yellow self-striped kurta with dhoti pants
                                Yellow self-striped above knee A-line kurta,  flared hem cropped dhoti pants.
                                </p><center>
                                  <form method="post">
                                    <input name="pname" id="pname" value="Women Angarkha and Dhoti Pant Viscose Rayon" type="hidden">
                                    <input name="pprice" id="pprice" value="500" type="hidden">
                                    <div class="row pt-2">
                                    <input type="submit" class="btn btn-danger col-md-6" value="Add to cart" name="product1" >
                                    <input type="submit" class="btn btn-info col-md-6" value="More Info."></div>
                                  </form>
                                  </center>
                             <p class="card-text"><small class="text-muted">Rating <span style="font-size:150%;color:yellow;">&starf;</span>
                              <span style="font-size:150%;color:yellow;">&starf;</span>
                              <span style="font-size:150%;color:yellow;">&starf;</span>
                              <span style="font-size:150%;">&star;</span>
                              <span style="font-size:150%;">&star;</span>
                              
                              </small></p>
                            </div>
                        </div>
                     </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                  <div class="card " style="max-width: 700px;" >
                      <div class="row ">
                        <div class="col-lg-6"><center>
                          <img src="images/5.jpg" class="img-fluid rounded-start" alt="..."style="height:350px;width:350px;" ></center>
                        </div>
                        <div class="col-lg-6">
                          <div class="card-body">
                            <h5 class="card-title" >Ruby Red Fully Sequined Georgette Party Wear Saree</h5>
                            <p >Sarees<br>Rs.1500</p>

                            <p class="card-text">This beautiful ruby red color saree paired with a similar 
                              blouse in georgette material designed sequins and thread work.
                              </p><center>
                              <form method="post">
                                    <input name="pname" id="pname" value="Ruby Red Fully Sequined Georgette Party Wear Saree" type="hidden">
                                    <input name="pprice" id="pprice" value="1500" type="hidden">
                                    <div class="row pt-2">
                                    <input type="submit" class="btn btn-danger col-md-6" value="Add to cart" name="product2" >
                                    <input type="submit" class="btn btn-info col-md-6" value="More Info."></div>
                                  </form>
                                    </center>
                           <p class="card-text"><small class="text-muted">Rating <span style="font-size:150%;color:yellow;">&starf;</span>
                            <span style="font-size:150%;color:yellow;">&starf;</span>
                            <span style="font-size:150%;color:yellow;">&starf;</span>
                            <span style="font-size:150%;color:yellow;">&starf;</span>
                            <span style="font-size:150%;color:yellow;">&starf;</span>
                            
                            </small></p>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="col-lg-6 mt-3">
                <div class="card " style="max-width: 700px;" >
                    <div class="row ">
                      <div class="col-lg-6"><center>
                        <img src="images/8.png" class="img-fluid rounded-start" alt="..."style="height:350px;width:350px;" ></center>
                      </div>
                      <div class="col-lg-6">
                        <div class="card-body">
                          <h5 class="card-title" >Navy Blue Stone Thread Embroidered Anarkali Gown</h5>
                          <p >Gown<br>Rs.4000</p>

                          <p class="card-text">This party wear navy blue gown in georgette material
                             embellished with stone and thread work all over.This gown is semi-stitched.
                            </p><center>
                                  <form method="post">
                                    <input name="pname" id="pname" value="Navy Blue Stone Thread Embroidered Anarkali Gown" type="hidden">
                                    <input name="pprice" id="pprice" value="4000" type="hidden">
                                    <div class="row pt-2">
                                    <input type="submit" class="btn btn-danger col-md-6" value="Add to cart" name="product3" >
                                    <input type="submit" class="btn btn-info col-md-6" value="More Info."></div>
                                  </form>
                                    </center>
                         <p class="card-text"><small class="text-muted">Rating <span style="font-size:150%;color:yellow;">&starf;</span>
                          <span style="font-size:150%;color:yellow;">&starf;</span>
                          <span style="font-size:150%;color:yellow;">&starf;</span>
                          <span style="font-size:150%;color:yellow;">&starf;</span>
                          <span style="font-size:150%;color:yellow;">&starf;</span>
                          
                          </small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
              <div class="col-lg-6 mt-3">
                <div class="card " style="max-width: 700px;" >
                    <div class="row ">
                      <div class="col-lg-6"><center>
                        <img src="images/7.png" class="img-fluid rounded-start" alt="..."style="height:350px;width:350px;" ></center>
                      </div>
                      <div class="col-lg-6">
                        <div class="card-body">
                          <h5 class="card-title" >Attractive Black Sequence Butterfly Net Anarkali Suit</h5>
                          <p>Lehenga<br>Rs.4500</p>

                          <p class="card-text">This beautiful black color long Anarkali in butterfly net material embellished 
                            with floral embroidery and sequins work.
                            </p><center>
                            <form method="post">
                                    <input name="pname" id="pname" value="Attractive Black Sequence Butterfly Net Anarkali Suit" type="hidden">
                                    <input name="pprice" id="pprice" value="4500" type="hidden">
                                    <div class="row pt-2">
                                    <input type="submit" class="btn btn-danger col-md-6" value="Add to cart" name="product4" >
                                    <input type="submit" class="btn btn-info col-md-6" value="More Info."></div>
                                  </form>
                                    </center>
                         <p class="card-text"><small class="text-muted">Rating <span style="font-size:150%;color:yellow;">&starf;</span>
                          <span style="font-size:150%;color:yellow;">&starf;</span>
                          <span style="font-size:150%;color:yellow;">&starf;</span>
                          <span style="font-size:150%;color:yellow;">&starf;</span>
                          <span style="font-size:150%;">&star;</span>
                          
                          </small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
        </div>
        
    </main>
<?php
include_once("footer.php");
?>