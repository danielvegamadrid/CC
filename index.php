<?php




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>

   .flex
   {
      /* basic styling */
      width: 350px;
      height: 200px;
      border: 1px solid #555;
      font: 14px Arial;

      /* flexbox setup */
      display: -webkit-flex;
      -webkit-flex-direction: row;

      display: flex;
      flex-direction: row;
   }

   .flex > div
   {
      -webkit-flex: 1 1 auto;
      flex: 1 1 auto;

      width: 30px; /* To make the transition work nicely.  (Transitions to/from
                      "width:auto" are buggy in Gecko and Webkit, at least.
                      See http://bugzil.la/731886 for more info.) */

      -webkit-transition: width 0.7s ease-out;
      transition: width 0.7s ease-out;
   }

   /* colors */
   .flex > div:nth-child(1){ 
        
        background-image : url(https://aaffvalencia.es/wp-content/uploads/2017/01/1465551886.jpg); 
   }
   .flex > div:nth-child(2){ 
   
        background-image : url(http://cdn.thinglink.me/api/image/911732240977756161/1024/10/none); 
   
   }
   .flex > div:hover
   {
        width: 200px;
   }
   
   </style>
    
 </head>
 <body>
 
     <div align="center">
      <p>Elige tu opci&oacute;n</p>
      <div class="flex">
        <div>
        
        	<a href="entidades.php">
            	Entidades
            	<br>
        	
        	</a>
        
        </div>
        <div>     
        	<a href="provincias.php">
            	Provincias
            	<br>
            </a>
        </div>
      </div>
  </div>
 </body>
</html>