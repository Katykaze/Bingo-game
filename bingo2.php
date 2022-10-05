<HTML>

<HEAD>
    <TITLE> Bingo </TITLE>
</HEAD>

<BODY>
    <?php


    /*$jugador2 = array($carton1,$carton2,$carton4);
    $jugador3 = array($carton1,$carton2,$carton4);
    $jugador4 = array($carton1,$carton2,$carton4);*/
    $carton1 = carton();
    $carton2 = carton();
    $carton3 = carton();
    $jugador1 = array($carton1, $carton2, $carton3);


    $carton = carton();
    //imprimir($carton1);
    //imprimir($carton2);
    //imprimir($carton3);


    function carton()
    {
        $carton = array();
        for ($i = 0; $i <59; $i++) {
            $carton[$i] = $i+1;
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
    imprimir($carton);
    tacharCarton($carton);
    

    function tacharCarton($carton)
    {

        $contador = 15;

        do {
            $numero = bola();

            echo $numero. " ";
            
            for ($i = 0; $i < count($carton); $i++) {
                //meter funcion de la bola aqui 
                if ($numero == $carton[$i]) {
                    $contador--;
                    echo "-----> contador $contador";
                    echo "</br>";
                }
            }
        } while ($contador != 0);
        echo "Has ganado";
    }
    //funcion bola
    function bola()
    {
        //suffle de bombo
        //$fueraBombo = array();
        $bombo=array();
        for($i=0;$i<59;$i++){
            
            $bombo[$i]=$i+1;
        }
        shuffle($bombo);
        
        for($i = 0 ; count($bombo);$i++){
            $numero=$bombo[$i];           
        }
        return $numero;
    }



    ?>
</BODY>

</HTML>
