<style >
  
.resultado{
    color:#F00;
    font-weight:bold; 
    font-size:32PX; 
  }
.resultado1{
   
     color:#ff0; 
     font-weight:normal;
     font-size:24px; 
}



</style>



<?php



  if(isset ($_POST["button"])) 
     
      {
      
       $numero1=$_POST["numero1"];
       $numero2=$_POST["numero2"];
       $operacion=$_POST["calculo"];
        
       calcular($operacion);
     }
 
   function calcular($calculo)
   {

      if(!strcmp("Suma",$calculo))
      {           
         global$numero1;
         global$numero2;
         
         $resultado=$numero1+$numero2;

         echo "<p class='resultado'> el resultado es: $resultado </p>"; 
      }
      if(!strcmp("Resta",$calculo))
      {
        global $numero1;
        global $numero2;

         $resultado1=$numero1-$numero2;

        echo "<p class='resultado1'> el resultado es: $resultado1 </p>"; 
      }

      if(!strcmp("Multiplicación",$calculo))        
      {
        global $numero1;
        global $numero2;
      
        echo "el resultado es: " . ($numero1*$numero2);
      }
      if(!strcmp("División",$calculo))        
      {  
        global $numero1;
        global $numero2;              
        echo "el resultado es: " . ($numero1/$numero2);          
      }  

      if(!strcmp("Módulo",$calculo)) 
      {   
        global $numero1;
        global $numero2;      
        echo "el resultado es: " . ($numero1%$numero2);    
      } 

      
       if(!strcmp("Incremento",$calculo)) 
      {   
        global $numero1;
       
             $numero1++;

              echo "el resultado es: " . ($numero1);    
      } 
       if(!strcmp("Decremento",$calculo)) 
       {   
        global $numero1;
          
              $numero1--;
              
              echo "el resultado es: " . ($numero1);    
       } 
     

    }
  
?>