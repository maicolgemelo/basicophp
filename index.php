<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Mi primera pagina con php</title>
    </head>
    <body>
        <h1>Hola mundo!</h1>
        <form name="form1" method="POST" action="index.php">
            Número 1: <input type="text" name="txtnumero1">
            <br>
            Número 2: <input type="text" name="txtnumero2">
            <br>
            <input type="submit" name="calcular" value="Calcular">


        </form>
        <?php 

        if(isset($_POST["calcular"])){
            $valor1 = $_POST["txtnumero1"];
            $valor2 = $_POST["txtnumero2"];

            echo $valor1 ."<br>";
            echo $valor2 ."<br>";

            if($valor1 == "" || $valor2 == ""){
                echo "debes diligenciar todos los campos.";
                exit;
            }

            echo "<br><br><br>";

            echo "hola esto es php";
            $numero1 = $valor1;
            $numero2 = $valor2;
            $suma = $numero1 + $numero2;
            $rest = $numero1 - $numero2;
            $multiplicacion = $numero1 * $numero2;
            $division = $numero1 / $numero2;
            $residuo = $numero1 % $numero2;
    
            echo "<br><br> la suma de" . $numero1." y ". $numero2 . " es ".$suma;
            echo "<br><br> la resta de" . $numero1." y ". $numero2 . " es ".$rest;
            echo "<br><br> la multiplicacion de" . $numero1." y ". $numero2 . " es ".$multiplicacion;
            echo "<br><br> la divivsion de" . $numero1." y ". $numero2 . " es ".$division;
            echo "<br><br> el residuo de" . $numero1." y ". $numero2 . " es ".$residuo;
    
            //comentario
    
            /**
             * vomentarios
             * con 
             * varias
             * lineas
             */
            /**
             *operadores logicos
             *y=&& o=
             *cuando se usa el y(&&)se debe tener
             *en cuenta que es verdadero cuando todos los
             *criterios evaluados son verdaderos.
             *cuando se usa el o(||) se debe tener en cuenta
             *que es falsa cuando todos los criterios evakuados son falsos
             *
             */
    
    
             if($numero1 > $numero2 && $numero1 > 0){
                 echo "<br>la condicion es verdadera.";
             }else{
                 echo"<br>la condicion es falsa.";
             }
    
             if($suma > $rest || $suma > $multiplicacion){
                 echo"<br> todavia sigo verdadera";
             }else{
                 echo"<br>ya soy falsa";
             }
             /**
              * operadores relacionales
              *> mayor que
              *< menor que
              *>= mayor o igual que
              *<= menor o igual que
              *= asignacion
              *== comparacion (if)
              *! negacion
              *!= diferente
              */
    
              $numero3 = 7;
              echo "<br>";
    
              if($numero1 > $numero2 && $numero1 > $numero3){
                  echo"el mayor es ".$numero1;
              }elseif($numero2 > $numero1 && $numero2 > $numero3){
                  echo" el mayor es ".$numero2;
              }else{
                  echo"el mayor es ".$numero3;
              }
    
    
              echo"<br>";
              if(!(($numero3%2) == 0)){
                  echo"El numero ". $numero3."es par";
              }else{
                  echo"El numero ". $numero3."es impar";
              }
    
    
              /**
               * uso del switch
               * teniendo en cuenta los colores del semaforo,
               * realiza un algoritmo donde se indique que:
               * verde: debe decir avanzar.
               * amarillo: avisar de debe detenerse.
               * rojo: debe decir no avanzar.
               **/
              $colorsemaforo="Rojo";
              echo"<br>";
              // para mayúscula: strtoupper(palabra)
    
              switch(strtolower(trim($colorsemaforo))){
    
                    case"verde":
                        echo"semaforo es ". $colorsemaforo.": avanzar";
                    break;
    
                    case "amarillo":
                        echo"semaforo es ". $colorsemaforo.": detenerse";
                    break;
    
                    case"rojo":
                        echo"semaforo es ". $colorsemaforo.": no avance";
                    break;
    
                    default:
                    echo"valor incorrecto";
                    break;
                }
    
                /**
                 * ciclos
                 * for- while - do while
                 */
    
                 //while
                 /**
                  * realizar un ejercicio que muestre los primeros 5 numeros consecutivos.
                  */
                  echo"<br>";
    
                 $i = 1;
                 while($i <= 5){
                     echo $i . "<br>";
                     $i++;
                 }
    
                 //tabla de multiplicar del 5 con while
                 $i = 1;
                 $l = 5;
                 while($i <= 10){
                     
                     echo $l ." x ".$i." : ".$l * $i."<br>";
                     $i++;
                 }
    
                 echo"<br>";
                 //do-while
                 /**
                  * realizar un ejercicio que muestre los primeros 5 numeros consecutivos.
                  */
    
                  $i = 1;
                  do{
                      echo $i . "<br>";
                      $i++;
                  }while($i <= 5);
    
                  // tabla de multiplicar del 5 con do-while
    
    
                  $i = 1;
                  $l = 5;
                  do{
                    echo $l ." x ".$i." : ".$l * $i."<br>";
                    $i++;
                  }while($i <= 10);
    
                  /**
                   * creacion vectores
                   */
    
                 $array = array(1,2,3,4,5,6,7);
                 $longitud = count($array);
    
                 for($i=0;$i<$longitud;$i++){
                     echo $array[$i]. "<br>";
                 }
    
    
                 echo "<br>";
                 foreach($array as $valor){
                     echo $valor . "<br>";
    
                 }
    
    
    
                 //tabla del 5 con el for
    
    
                 $array = array(1,2,3,4,5,6,7,8,9,10);
                 $longitud = count($array);
                 $l= 5;
    
                 for($i = 1;$i<=$longitud;$i++){
                    echo $l ." x ".$i." : ".$l * $i."<br>";
                 }
    
                 echo"<br>";
                 // tabla con el foreach
    
    
    
    
                 $array = array(1,2,3,4,5,6,7,8,9,10);
                 $l= 5;
    
                 foreach($array as $valor){
                    echo $l ." x ".$valor." : ".$l * $valor."<br>";
                 }
    


        }

         
        ?>
    </body>
</html>