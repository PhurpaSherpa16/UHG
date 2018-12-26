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
                                <h3 class="register-heading">Login</h3>
                                <form action="<?php echo base_url();?>LoginController/userLogin" method="post">
                                <div class="row register-form">                               
                                    <div class="col-md-offset-3 col-md-6">
                                        <div class="form-login">
                                        <h4 style="color: black; text-align: center;">Welcome back.</h4>
                                        <input type="email" id="email" name="email" class="form-control input-sm chat-input" placeholder="Email  *" required="required" />
                                        </br>
                                        <input type="password" id="password" name="password" class="form-control input-sm chat-input" placeholder="Passwrod  *" required="required" />
                                        <div class="wrapper">    
                                            <input type="submit" name="submit" class="btnRegister"  value="Login" style="" />
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