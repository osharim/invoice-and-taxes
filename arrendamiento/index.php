<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boceto</title>
</head>
<body>
	
	<style>

 
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
margin: 5px 7px 1px;
width: 706px;
padding: 3px;
	}
	
	.str-col{

		border: 1px solid black;
	 

	}

	.lft-position{
		float: left;
	}
	
	.toUpper{
		text-transform: uppercase;
	}

	.border-down{

		border-bottom: 1px solid black;
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
height: 485px;
margin: 0px;
overflow-y: auto;
padding: 0;
width: 744px;
}
table {

border: 1px solid black;
font-size: 10px;
margin: 1px 6px -2px;
width: 715px;

}
table th {
    border-bottom: 1px solid black;
    border-left: 1px solid black;
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
border-bottom: 1px solid black;
    border-left: 1px solid black;
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
border-right: 1px solid black;
content: " ";
text-align: center;
font-size: 8px;
display: inline-block;
padding-left: 5px;
padding-right: 9px;
height: 15px;
padding-top: 5px;
}

	</style>


	<?php

  				for($invoice=1100;$invoice<=1400;$invoice++){
  	 ?>


<ul class="content-invoice">
<li>
<section class="str-head str-col">



<table class="str-col border-none "   cellpadding="0" style="margin-left: -25px;">
   
           <thead class="border-none">
                <tr>
                  
                  <th class="border-none" >
 


                  </th>
                  <th style="border: 1px solid black; text-align: center; float: left; padding-bottom: 6px; padding-top: 6px; width: 510px; margin-left: 54px;">

 			RECIBO DE ARRENDAMIENTO

                  </th>
        <th class="border-none">


     
	</th>
                </tr>
              </thead>

              <tbody>
              	<tr>
              		<td colspan="2"  class="border-none">

              			<div class="toUpper letter-small "> 


						<ul  style="text-align:center;margin: 0;font-size:11px;padding: 0;margin-left: -207px;">
							<li><span style="font-weight:bold;font-size:18px;"> MARÍA DE LOURDES PINEDA DIEGO  </span> </li>
							<li><span>R.F.C PIDL600209BI0</span></li>
							<li><span>Calle 56 No. 589 x 69 y 71 Col. Centro </span></li>
							<li><span>Cp.P 97000 Mérida, Yuc., Méx.</span></li>
						</ul>
              				



              			</div>



              		</td>
                
              		<td class="border-none" >

					
 


        	<div class="str-col lft-position " style="text-align: center;margin-left: -193px;width: 98px;">
	
		<div class="border-down txt-note"> FECHA</div> 
		
		<div class="numNota">
				
				<ul class="date" >
					<li style="border-bottom:1px solid black;"> DIA </li>
					<li style="border-bottom:1px solid black;"> MES </li>
					<li style="border-right:0; border-bottom:1px solid black;" > AÑO </li>
				</ul>


		<ul class="date" >
					<li style="height: 36px; width: 15px;" class="numNota date"> </li>
					<li style="  height: 36px; width: 16px;"  class="numNota date" > </li>
					<li style="border-right:0; height: 36px;" class="numNota date" > </li>
				</ul>

 
	<div>

	</div>
</div>

</div>






        	<div  style="text-align: center;width: 98px;float:left;margin-left:15px">
	
		<div class="  txt-note" style="font-weight:bold;font-size:18px;"> <span>
			

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

		 echo $invoice+ 2; ?> </span></div>

		</span></div> 
		
		<div class="numNota">
				
				<ul class="date" >
			 
					<li style="border-right:0;font-family: helvetica;width: 220PX;font-size: 7PX;text-align: center;margin-left: -95px;" > 
						IMPUESTO RETENIDO DE CONFORMIDAD <br>	CON LA LEY DEL IMPUESTO AL VALOR AGREGADO </li>
				</ul>

 
	<div>

	</div>
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
	 
				<!-- TABLA-->

<table class="importe"   cellpadding="2" cellspacing="0">
   
           <thead>
             
              </thead>
              <tbody>
  
  		 
		 
		  <tr>
 
			<td class="no-border-left" 	style="border:0;"  >  </td> 
			
			 <td  class="no-border-left " style="border-bottom:0;"   > RECIBI DE:  </td>  

			 <td  style="border-bottom:0;"  class="no-border-left"  >  </td>  


			 <td  class="border-right"  style="border-bottom:0"  > No. DE CUENTA PREDIAL   </td>
	 
		 </tr>
	  

<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;"  >  </td> 
			
			 <td   class="border-down no-border-left"  >   </td>  

			 <td    class="border-down no-border-left"    >  </td>  


			 <td  class="border-right"     >  </td>
	 
		 </tr>

<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;"  >  </td> 
			
			 <td  style="border-bottom:0;"   class=" no-border-left"  >  DOMICILIO </td>  

			 <td  style="border-bottom:0;"   >  R.F.C </td>  


			 <td  class="border-right"  style="border-bottom:0"  >  RENTA $    </td>
	 
		 </tr>
<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;"  >  </td> 
			
			 <td  class="border-down no-border-left"   >    </td>  

			 <td   class="border-down"    >  </td>  


			 <td  class="border-right"     >    </td>
	 
		 </tr>

	 <!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;"  >  </td> 
			
			 <td class=" no-border-left "  style="border-bottom:0;"   >  POBLACION </td>  

			 <td  style="border-bottom:1px;"  class="no-border-left"  >  ENTIDAD FEDERATIVA </td>  


			 <td  class="border-right"  style="border-bottom:0"  >   16% <br>I.V.A $  </td>
	 
		 </tr>
<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;"  >  </td> 
			
			 <td  class="border-down no-border-left"   >    </td>  

			 <td    class="no-border-left border-down"   >  </td>  


			 <td  class="border-right"    >    </td>
	 
		 </tr>

<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;"  >  </td> 
			
			 <td  style="border-bottom:0;"  class="no-border-left" >  CONCEPTO </td>  

			 <td  style="border-bottom:0;"  class="no-border-left"  >  </td>  


			 <td  class="border-right"  style="border-bottom:0"  >  I.S.R <br> RET $   </td>
	 
		 </tr>
<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;"  >  </td> 
			
			 <td style="border-bottom:0;"  class="no-border-left"  >    </td>  

			 <td  style="border-bottom:0;"  class="no-border-left"   >  </td>  


			 <td  class="border-right"  style="border-bottom:0"  >  I.V.A <br> RET. $  </td>
	 
		 </tr>


<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left " 	style="border:0;"  >  </td> 
			
			 <td  class="border-down no-border-left "     >    </td>  

			 <td    class="no-border-left"  class="no-border-left "    >  </td>  


			 <td  class="border-right"     >    </td>
	 
		 </tr>
<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left " 	style="border:0;"  > </td> 
			
			 <td style="border-bottom:0;" class="no-border-left"    >   RENTA DEL MES Y AÑO  </td>  

			 <td  style="border-bottom:0;" class="no-border-left"  >  </td>  


			 <td  class="border-right"  style="border-bottom:0"  >  TOTAL   </td>
	 
		 </tr>

<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left  border-down" 	 > </td> 
			
			 <td   class="border-down no-border-left"   >    </td>  

			 <td   class="border-down no-border-left"    >  </td>  


			 <td  class="border-right border-down"   >    </td>
	 
		 </tr>

<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;width:180px" > CANTIDAD CON LETRAS </td> 
			
			 <td style="border-bottom:0;"  class=" no-border-left"  >     </td>  

			 <td  style="border-bottom:0;" class="no-border-left"  >  </td>  


			 <td  class="border-right"  style="border-bottom:0"  >  FIRMA  </td>
	 
		 </tr>



<!-- ---------------------------------------------------------------------- -->
	  		  <tr>
 
			<td class="no-border-left" 	style="width:180px" >  </td> 
			
			 <td   class=" no-border-left"  >     </td>  

			 <td   class="no-border-left"  >  </td>  


			 <td  class="border-right"     >    </td>
	 
		 </tr>
 
	  		  <tr>
 
			<td class="no-border-left" 	style="border:0;width:210px" > 


<span  style="font-size: 7px;
text-align: center;
float: left;
padding-left: 3px;">


EFECTOS DISCALES AL PAGO  PAGO EN UNA SOLA EXHIBICION <br>  LA REPRODUCCION 
				APOCRIFA DE ESTE COMPROBANTE CONSTITUYE UN DELITO <br> EN LOS TERMINOS DE LAS DISPOSICIONES FISCALES
</span>

			 </td> 
			
			 <td style="border-bottom:0;"  class=" no-border-left"  >  



			  </td>  

			 <td  style="border-bottom:0; width:257px" class="no-border-left"   >  


<span  style="font-size: 7px;
text-align: center;
float: left;
padding-left: 3px;"> ESTE COMPROBANTE TENDRA UNA VIGENCIA DE DOS AÑOS <br>   
				CONTADOS A PARTIR DE LA FECHA DE APROBACION DE LA ASIGNACION <br>  DE LOS FOLIOS LA CUAL ES 30/03/2009 DOLIOS DEL 1101 AL 1400 <br>
				NUMERO DE LA APROBACION DEL SICOFI:23143615
</span>




			 </td>  


			 <td  class="border-right"  style="border-bottom:0"  >    </td>
	 
		 </tr>

	 

	      </tbody>
            </table>
	


		<!-- TABLA -->

	</li>
	</ul>



</section>



</li>

 

 

</ul>



		 <?php

  				}
  			?>



 
</body>
</html>