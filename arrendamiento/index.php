<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boceto</title>
</head>
<body>
	
	<style>


@media print { /* Todas las reglas Css */ 

	.logo{

	font-size: 14px;
    font-weight: bold;

	}
}  

	.col-data > ul {
    margin: 0;
    padding: 0;
     display: inline-block;
    float: none;
   
}

.numNota{

	padding-left:3px; 

}

.letter-small{

	 font-size: 8px;
}

.str-head.str-col > ul {
    padding: 0;
}

.col-data > ul {
    float: none;
    font-size: 11px;
}
	section.table ul {

		margin: 0;
		padding: 0;
	}


	li{

		list-style: none;

	}
	.logo{

	font-size: 34px;
    font-weight: bold;

	}

	.str-head{



		float: left;
		margin:5px 5px 1px;
		padding: 7px;
	}
	
	.str-col{

		border: 1px solid blue;
		border-radius: 5px;

	}

	.lft-position{
		float: left;
	}
	
	.toUpper{
		text-transform: uppercase;
	}

	.border-down{

		border-bottom: 1px solid blue;
	}

	.data-width{

		width: 302px;
	}

	.center-string{

		   font-family: helvetica;
    font-size: 12px;
    letter-spacing: 2px;
    text-align: center;
		 
	}

	.width-100{
width: 100%;

	}


.content-invoice {

	border: 1px solid #EEEEEE;
    float: left;
    height: 474px;
    margin: 2px;
    overflow-y: auto;
    padding: 0;
    width: 745px;
}
table {

 border: 1px solid blue;
    border-radius: 5px 5px 5px 5px;
    font-size: 12px;
    margin: 2px 7px 7px;
    width: 97%;

}
table th {
    border-bottom: 1px solid blue;
    border-left: 1px solid blue;
}


table.importe th:first-child {
    border-left: 0 none;
    border-top: 0 none;
}


table.importe th:last-child {
}

table.importe th {
    font-size: 12px;
      text-align: center;
}

.str-col.lft-position.width-100 {
    margin: 7px;
       width: 96%;
}

.smallest{

	font-size: 10px;

}

.total{
  float: left;
    height: 19px;
    margin-bottom: 7px;
    margin-left: 4px;
    margin-right: 10px;
    padding-right: 8px;
    text-align: right;
    width: 75px;
}

.total-str{
	float: left; font-size: 12px; font-weight: bold; padding-top: 5px;
}

 td  { 
border-bottom: 1px solid blue;
    border-left: 1px solid blue;
    height: 17px;

}

 
 
 
.border-down{

 border-bottom: 1px solid #222222;
    font-family: helvetica;
    padding-left: 4px;
    padding-right: 4px;
}


.col-data.data-width {
    font-weight: normal;
 
     width: 138px;
}

.border-none{


	border: 0;
}

.txt-note{

	font-size: 11px;

}
.no-border-left{


	border-left: 0;

}


.border-right{


	border-right: 0;
}


.numNota span{

	
	float: right;
	padding-right: 13px;

}

.numNota .date {
float: left;
padding: 0;
}

 

.numNota .date li {
float: left;
border-right: 1px solid blue;
content: " ";
display: inline-block;
padding-left: 30px;
height: 15px;
}

	</style>


	<?php

  				for($invoice=1;$invoice<=150;$invoice++){
  	 ?>


<ul class="content-invoice">
<li>
<section class="str-head str-col">



<table class="str-col border-none "   cellpadding="0">
   
           <thead class="border-none">
                <tr>
                  
                  <th class="border-none" >

<div class="logo lft-position">ISEL</div>


                  </th>
                  <th class="border-none" >

	<div class="col-data data-width">
			
					<ul>
						<li> <strong class="toUpper"> Compra y Venta</strong></li>
						<li>de Controles Remotos</li>
						<li class=" letter-small toUpper">javier ernesto oaxaca cuevas </li>
					</ul>		
				 

		</div>


                  </th>
        <th class="border-none">


        	<div class="str-col lft-position ">
	
		<div class="border-down txt-note">NOTA DE VENTA </div> 
		
		<div class="numNota">N° <span><?php 

			if($invoice<=9){

					echo "000";
			} 

			if($invoice>=10 &&  $invoice <= 99){

					echo "00";
			}



			if($invoice>=100 &&  $invoice <= 999){

					echo "0";
			}

		 echo $invoice; ?> </span></div>
	

	<div>

	</th>
                </tr>
              </thead>

              <tbody>
              	<tr>
              		<td colspan="2"  class="border-none"><div class="toUpper letter-small ">R.f.c oacj 600927 3t8 c.u.r.p. oacj600927hplxvv09  </div></td>
                
              		<td class="border-none" >

					
 


        	<div class="str-col lft-position " style="text-align: center;width: 98px;">
	
		<div class="border-down txt-note"> FECHA</div> 
		
		<div class="numNota">
				
				<ul class="date" >
					<li> </li>
					<li> </li>
					<li style="border-right:0;" > </li>
				</ul>

 
	<div>

	</div>
</div>




              		</td>
              	</tr>

              </tbody>
          </table>


 

</section>


</li>

<!--  OTHER -->
<li> 





<section class="lft-position width-100 table" >
	<ul>
		<li class="toUpper center-string">Venta al publico en general</li>


		<li>
				<!-- TABLA-->

<table class="importe"   cellpadding="2" cellspacing="0">
   
           <thead>
                <tr>
                  
                  <th>CANT.</th>
                  <th>DESCRIPCION</th>
                  <th>PRECIO UNIT.</th>
                  <th>IMPORTE</th>
                </tr>
              </thead>
              <tbody>
  
  			<?php

  				for($i=1;$i<12;$i++){
  			?>
		 
		  <tr>
 
			<td class="no-border-left" <?php  if($i==11){ ?>   
				style="border-bottom:0;" <?php } ?>   >

 
			 
			</td> 
			
			 <td <?php  if($i==11){ ?>   
				style="border-bottom:0;" <?php } ?> >   </td>  

			 <td <?php  if($i==11){ ?>   
				style="border-bottom:0;" <?php } ?> >  </td>  


			 <td 

class="border-right"
				 


		 		 <?php  if($i==11){ ?> 
			 


			 	 style="border-bottom:0"
			 	 
			 	 <?php 

			 	} 

			 	 ?>  >    </td>
	 
		 </tr>
	 
		 <?php

  				}
  			?>

	 

	      </tbody>
            </table>
	


		<!-- TABLA -->

	</li>
	</ul>



</section>



</li>


<li > <section class="str-col lft-position width-100 " style="height:29px;">
	
		<span class="import-letter smallest" style="font-size:10px">Importe con Letra</span>

</section> </li>

<li style="float:right">
	
	<div class="total-str">TOTAL</div>
	<div    class="str-col total"  >    </div>

</li>

</ul>



		 <?php

  				}
  			?>



 
</body>
</html>