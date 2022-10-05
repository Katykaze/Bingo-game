<HTML>

<HEAD>
    <TITLE> Bingo </TITLE>
</HEAD>

<BODY>
    <?php
    function crearCarton()
    {
        $carton = array();
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 7; $j++) {
                $num = rand(1, 60);
                $carton[$i][$j] = $num;
            }
        }
        return $carton;
    }
    function eliminar($carton)
    {
        $pos = 0;

        for ($i = 0; $i < count($carton); $i++) {
            for ($j = 0; $j < count($carton[$i]); $j++) {
                $pos2 = 0;
                for ($x = 0; $x < 2; $x++) {
                    $pos = rand(0, 6);
                    if ($j == $pos && $pos != $pos2) {
                        $carton[$i][$j] = 0;
                    }
                    $pos2 = $pos;
                }
            }
        }
        return $carton;
    }

    $carton = crearCarton();
    $cartonBorrado = eliminar($carton);
    imprimir($cartonBorrado);
    //imprimir($carton);
    function imprimir($carton)
    {
        for ($i = 0; $i < count($carton); $i++) {
            for ($j = 0; $j < count($carton[$i]); $j++) {
                echo $carton[$i][$j];
                echo " ";
            }
            echo "<br>";
        }
        printf("<br>");
        printf("<br>");
    }
    //funcion para tachar
    function tacharCarton($carton)
    {
        $contador = 15;
        do {
            for ($i = 0; $i < count($carton); $i++) {
                for ($j = 0; $j < count($carton[$i]); $j++) {
                    //meter funcion de la bola aqui 
                    $bola = 2;
                    if ($bola == $carton[$i][$j]) {
                        $carton[$i][$j] = 0;
                        $contador--;
                    }
                }
            }
        } while ($contador == 0);
        return $carton;
    }
    $imprimirCarton = tacharCarton($cartonBorrado);
    imprimir($imprimirCarton);
    //------------------------funcion para tachar cartones y jugar

    //------------------------jugadores --------------------------
    function jugadores()
    {
        $jugadores = array(
            'JugadorUno' => array(eliminar(crearCarton()), eliminar(crearCarton()),eliminar(crearCarton())),
            'JugadorDos' => array(eliminar(crearCarton()), eliminar(crearCarton()), eliminar(crearCarton())),
            'JugadorTres' => array(eliminar(crearCarton()), eliminar(crearCarton()), eliminar(crearCarton())),
            'JugadorCuatro' => array(eliminar(crearCarton()), eliminar(crearCarton()), eliminar(crearCarton()))
        );
    }

    function imprimirCartonesJugadores($jugadores)
    {
        foreach ($jugadores as $clave  => $valor) {
            echo $clave;
            for($i=0;$i<count($valor);$i++){
                imprimir($i);


            }
        }
    }

    function jugar()
    {
        // jugadores();
        // imprimir();
        // bola();
        // tacharCarton();

        //------------------------------
    }
    
    // FunciónBombo
    
     
function bola(){
     
    $bombo=rand(1,60);
   $fueraBombo=array();             
           
        if (!in_array($bombo,$fueradelBombo)) { 
               array_push($fueradelBombo,$bombo);
             shuffle($bombo);
        }
    return $bombo;

}
 

$carton=array();
$i=0;  
while($i<15)  
{  
    $bombo=rand(1,60);  
  if ($bombo == 1) {
    $num= '<img src="E:/images/1.PNG">';
    echo $num;
} elseif ($bombo == 2) {
    $num= '<img src="E:/images/2.PNG">';
    echo $num;
    }elseif ($bombo == 3) {
    $num= '<img src="E:/images/3.PNG">';
    echo $num;
} elseif ($bombo == 4) {
    $num= '<img src="E:/images/4.PNG">';
    echo $num;
} elseif ($bombo == 5) {
    $num= '<img src="E:/images/5.PNG">';
    echo $num;
    }elseif ($bombo == 6) {
    $num= '<img src="E:/images/6.PNG">';
    echo $num;
} elseif ($bombo == 7) {
    $num= '<img src="E:/images/7.PNG">';
    echo $num;

} elseif ($bombo == 8) {
    $num= '<img src="E:/images/8.PNG">';
    echo $num;
    }elseif ($bombo == 9) {
    $num= '<img src="E:/images/9.PNG">';
    echo $num;
} elseif ($bombo == 10) {
    $num= '<img src="E:/images/10.PNG">';
    echo $num;
  
  
  
  
  
  
    if(in_array($bombo,$carton)===false) 
    {  
        array_push($carton,$bombo);  
        $i++;  
    }  
}  

//var_dump($carton);
    echo "<br>";

$numerosTachados=0;
$fueradelBombo=array();

    while($numerosTachados < count($carton)) { 
        $numeroAleatorio=rand(1,60); 

       if (!in_array($numeroAleatorio,$fueradelBombo)) { 
            array_push($fueradelBombo,$numeroAleatorio);
         
        echo "número: $numeroAleatorio <br>";
            //for($i=0; $i<count($carton); $i++){ 
                //if($numeroAleatorio===$carton[$i]) { 
                //$carton[$i]="X";  
                //$numerosTachados++;
                }
            // echo("$carton[$i]/");
            }
             echo("<br>");

    ?>
</BODY>

</HTML>
