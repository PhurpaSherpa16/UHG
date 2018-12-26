<link rel="stylesheet" href="<?php echo base_url();?>Assets/CustomCss/registerform.css">
<style>
    div p #condition{
        color: grey;
    }
    div p #condition:hover{
        color: orange;
    }

</style>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="Welcome Image"/>
                        <h3>Welcome</h3>
                        <p>We provide you the finest, rare and unique products that you have imagine. Delivery world wide and safe payment. You can check out our</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="" id="home">
                                <h3 class="register-heading">Register Free</h3>
                                <form action="<?php echo base_url();?>Registercontroller/userRegister" method="post">
                                <div class="row register-form">                               
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="registerInput" name="firstname" autocomplete="on" required="required" placeholder="First Name *"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="registerInput" name="lastname" autocomplete="on" required="required" placeholder="last Name *"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="registerInput" name="email" autocomplete="on" required="required" placeholder="Email *"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="registerInput" name="password" autocomplete="off" required="required" placeholder="password *"/>
                                        </div>
                                        <div class="a-alert-content" style="margin-top: -10px;">
                                        <span style="color:blue; font-style: italic;font-weight: bold;font-size: 15px;">!</span> Passwords must be at least 6 characters.
                                        </div>
                                        
                                        <div class="form-group" style="margin-left: 20px;">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" id="registerInput" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" id="registerInput" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" id="registerInput" name="gender" value="others">
                                                    <span>Others </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="registerInput" name="phonenumber" autocomplete="on" required="required" placeholder="phone *"/>
                                        </div>
                                        <div class="form-group"><label>Address:</label>
                                            <div class="row" >
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                                                    <select class="form-control" name="country">
                                                        <option class="select" value="Nepal">Nepal</option>
                                                        <option value="China">China</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="India">India</option>
                                                    </select> 
                                                </div>
               <!-- country selection script link <script src="<?php echo base_url();?>Assets/js/jquery.countryselector.js"></script> -->
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                     <input type="text" class="form-control" id="registerInput" name="city" autocomplete="on" required="required" placeholder="City *"/>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="form-group">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                           <input type="submit" name="submit" class="btnRegister"  value="Register" style="float: left;" /> 
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p style="color: black">By creating an account, you agree to Unique Himalaiyan Group <a id="condition" href="#" >Conditions of Use</a> and <a href="#" id="condition" >Privacy Notice.</a></p>
                                        </div>    
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

</div>