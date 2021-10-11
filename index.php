<?php 

 if($_POST){

    echo "<pre>"; print_r($_POST); die('ok');
 }

?>

<!DOCTYPE html>
<html>
<head>
    <title>How to use Bootstrap Tags input jQuery plugin with example</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

 
</head>
<body>
    <div class="container"> 
    <form method="post" class="form-horizontal" action="">  
        <div class="form-group">
            <label class="col-xs-3 control-label">Name:</label>
            <div class="col-xs-8">
                <input type="text" id="name" name="name" />             
            </div>
        </div>  
        <div class="form-group">
            <label class="col-xs-3 control-label">Your Skills:</label>
            <div class="col-xs-8">
                <input type="text" id="skills" name="skills" data-role="tagsinput"  />              
            </div>
        </div>
        <div class="form-group">    
            <label class="col-xs-3 control-label"></label>      
            <div class="col-xs-8">
                <input type="submit" name="submit" value="Save"/>
            </div>
        </div>          
    </form> 
</div>
    <script type="text/javascript">
        $('#skills').tagsinput({
           confirmKeys: [13, 44],
           maxTags: 20
        });

      $("#skills").tagsinput('add', "okkk");
    </script>
</body>
</html>
