<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php



    function incrementarvariable()

    {

         
          static $contador=0;

           $contador++;



          echo $contador ."<br>";

     }


    incrementarvariable();
    incrementarvariable();
    incrementarvariable();
    incrementarvariable();
 
?>


</body>
</html>