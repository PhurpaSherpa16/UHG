
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Country Selector - Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>Assets/css/jquery-countryselector.min.css" rel="stylesheet" />
 	<script src="<?php echo base_url();?>Assets/js/jquery.min.js "></script>
	<script src="<?php echo base_url();?>Assets/js/bootstrap.min.js"></script>
</head>
<body>  
        
        <?php 
        if (isset($registermessage)) {
    ?>
        <button type="button" id="msg" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" style="display: none"></button>
         <script>
         $(document).ready(function () {
             $("#msg").click();
         });
        </script>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document"> 
                <div class="modal-content"> 
                    <div class="modal-header"> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button> 
                        <h4 class="modal-title" id="mySmallModalLabel">Information!!!</h4> 
                    </div> 
                    <div class="modal-body"> <?php echo  $registermessage; ?></div>
                </div> 
            </div> 
        </div>
    <?php
        }
    ?>
</body>
</html>
