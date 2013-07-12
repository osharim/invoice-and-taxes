<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> </title>
</head>
<body>


	<style>

	.folio{
		top: 58px;
position: absolute;
right: 65px;
color:#5862C3;
	}


	.content{
position: relative;
		width: 370px;
margin: 1px;
float: left;
	}

	</style>
	
 <?php  for($i=1;$i<150;$i++) {  ?>
 <div class="content">
 <img src="boceto3.jpg" alt="" width="370">
 	<div class="folio"><?php 

 
			if($i<=9){

					echo "000";
			} 

			if($i>=10 &&  $i <= 99){

					echo "00";
			}



			if($i>=100 &&  $i <= 999){

					echo "0";
			}

 


 	echo $i; ?></div>
 </div>


 

 <?php  } ?>


</body>
</html>