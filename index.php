<?php header('Access-Control-Allow-Origin: *'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>IRD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
</head>
<body>

  <div class="form-group pan">
    <label for="ird">PAN number</label>
    <input type="number" class="form-control" id="ird" >    
   
  </div>
  
  <button type="submit" class="btn btn-primary" id="submit">Submit</button>


<script type="text/javascript">
	$(document).ready(function(){
		// alert('ok');
		$("#submit").click(function(event){
		  event.preventDefault();

		  var pan = $('#ird').val();


		  alert(pan);

		  $('.pan').hide();



		  // console.log(pan);
		  // $.ajax({
		  // 	url: "https://vctsdri.dri.gov.np/common/login_api",
		  // 	type: "GET",
		  // 	dataType: "html",
    //         data: {'pan': pan},
            
    //         success: function(resp)
    //         {
    //         	console.log(resp);
    //         }
		  // });

		   


		});


	});
</script>







<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>