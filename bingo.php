<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    function crearCarton()
    {
        $carton = array();
        for ($i = 0; $i < 3; $i++) {          
            for ($j = 0; $j < 7; $j++) {   
                $num=rand(1, 60);
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
    imprimir($carton);
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
    function tacharCarton(){

    }
    //------------------------funcion para tachar cartones y jugar
   
    //------------------------jugadores --------------------------
    function jugadores()
    {
        $jugadores = array(
            'JugadorUno' => array(eliminar(crearCarton()), eliminar(crearCarton()), eliminar(crearCarton())),
            'JugadorDos' => array(eliminar(crearCarton()), eliminar(crearCarton()), eliminar(crearCarton())),
            'JugadorTres' => array(eliminar(crearCarton()), eliminar(crearCarton()), eliminar(crearCarton())),
            'JugadorCuatro' => array(eliminar(crearCarton()), eliminar(crearCarton()), eliminar(crearCarton()))
        );
        
    }
    // function imprimirCartonesJugadores($jugadores){
    //     foreach($jugadores as $clave  => $valor){
    //         foreach($clave as $clave2 => $valor2){

    //         }
    //     }
    // }
    function jugar()
        {
            jugadores();
            
            //------------------------------
        }



    ?>
</BODY>

</HTML>
