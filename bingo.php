<HTML>

<HEAD>
    <TITLE> Bingo </TITLE>
</HEAD>

<BODY>
    <?php


    /*$jugador2 = array($carton1,$carton2,$carton4);
    $jugador3 = array($carton1,$carton2,$carton4);
    $jugador4 = array($carton1,$carton2,$carton4);*/
  
    
    $carton = carton();
    $carton2  = carton();
    $carton3 = carton();
    imprimir($carton);
    imprimir($carton2);
    imprimir($carton3);
    $jugador1 = array($carton, $carton2, $carton3);
    $carton4 = carton();
    $carton5  = carton();
    $carton6 = carton();
    imprimir($carton4);
    imprimir($carton5);
    imprimir($carton6);
    $jugador2 = array($carton4, $carton5, $carton6);
    $carton7 = carton();
    $carton8  = carton();
    $carton9 = carton();
    imprimir($carton7);
    imprimir($carton8);
    imprimir($carton9);
    $jugador3 = array($carton7, $carton8, $carton9);

    function carton()
    {
        $carton = array();
        for ($i = 0; $i < 60; $i++) {
            $carton[$i] = $i + 1;
        }
        shuffle($carton);
        //var_dump($carton);
        $carton = array_slice($carton, 0, 15);
        return $carton;
    }
    $carton = carton();


    function imprimir($carton)
    {
        for ($i = 0; $i < count($carton); $i++) {
            echo $carton[$i] . " ";
        }
        printf("<br>");
        printf("<br>");
    }
    //funcion para tachar
    
    
    echo count($bombo);
    print_r($bombo);
    tacharCarton($carton, $bombo);


    function tacharCarton($carton, $bombo)
    {
        $contador = 0;
        $cont = 0;
            $numero = 0;
           
                for ($i = 0; count($bombo)-$cont; $i++) {
                    $cont++;    
                    $numero = $bombo[$i];
                    for ($j = 0; $j < count($carton); $j++) {
                        if ($numero == $carton[$j]) {
                            $contador++;
                            echo "<img src='./images/images/$numero.PNG'";
                            echo "-----> contador $contador";
                            echo "</br>";
                        }
                    }
                }

            
           
        


        echo "Has ganado";
    }
    //funcion bola
    function bola()
    {
        $bombo = array();
        //$numero=0;
        for ($i = 0; $i < 60; $i++) {

            $bombo[$i] = $i + 1;
        }
        shuffle($bombo);
        return $bombo;
    }




    ?>
</BODY>

</HTML>
