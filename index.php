<!DOCTYPE html>
<html>
<head>
	<title>protecto.1</title>
</head>
<body>
    
 <?php
     

     $nombre="juan";


   function dameNombre() {   


      global $nombre;

        $nombre="el nombre es " . $nombre;



       }


           dameNombre();

        echo $nombre;
    
                     
?>

</body>
</html>