<?php 
	$headingHeight="80px;"
?>
<div style="background: -webkit-linear-gradient(top, #317df7,#8998af);">
<section class="Header" style="background-color: ;">
			<div class="container" style="background-color:;">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding: 0px; padding: 0px; min-height:<?php echo $headingHeight;?>">
						<a href="<?php echo base_url();?>Navigation/index"><h3 id="heading" style="text-align: center;"><span class="hightlight">Unique</span> Himalayan Store</h3></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color:; min-height: <?php echo $headingHeight; ?>">
					<div class="input-group pull-right" style="margin: auto; margin-top: 22px;">
  					<input type="text" class="form-control" placeholder="Item Name e.g: Shawls, Scarf.." aria-describedby="basic-addon2">
  					<span class="input-group-btn">
                   	<button id="search" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                	</span>
					</div>
				</div>
				<div id="mycart" class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="background-color:;min-height: <?php echo $headingHeight; ?>">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 pull-right" style="margin-left: 50px; margin-top: 20px;background-color:;">
						<a id="Mycart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a>
					</div>
					
				</div>
			</div>
		</section>
		<section id="navbar" class="navHeader" style="background-color: ; padding: 0px;">
			<div class="container" style="padding: 0px;">
			<nav id="nav">
		    <div class="row" style="padding: 0px;">
		      <div class="col-sm-12" style="background-color:;" style="padding: 0px;">
		        <ul class="nav nav-tabs" style="border:none;padding: 0px;">
		          <li role="presentation" class="active" style="padding: 0px;"><a href="<?php echo base_url();?>Navigation/index"><span style="color: black; ">Home</span></a></li>
		          <li role="presentation"><a id="nav" href="<?php echo base_url()?>Navigation/aboutPage">About us</a></li>
		         <li role="presentation" style="float: right;"><a id="nav" href="<?php echo base_url()?>Navigation/signUp">Sign up</a>
		         </li>
		          <li role="presentation" style="float: right;"><a id="nav" href="<?php echo base_url()?>Navigation/register">Register Free</a>
		         </li>
		        </ul>
		      </div>
		    </div>	
			</nav>
		  </div>
		</section>
	</div>