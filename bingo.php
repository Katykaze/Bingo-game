<HTML>

<HEAD>
    <TITLE> Bingo </TITLE>
</HEAD>

<BODY>
    <?php


    // $carton = carton();
    // $carton2  = carton();
    // $carton3 = carton();
    // imprimir($carton);
    // imprimir($carton2);
    // imprimir($carton3);
    // $jugador1 = array($carton, $carton2, $carton3);
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



    // function tacharCarton($carton, $bola)
    // {
    //     $contador = 0;
           
    //                 for ($j = 0; $j < count($carton); $j++) {
    //                     if ($numero == $carton[$j]) {
    //                         $contador++;
    //                         echo "<img src='./images/images/$numero.PNG'";
    //                         echo "-----> contador $contador";
    //                         echo "</br>";
    //                     }
    //                 }
                
    //   echo "Has ganado";
    // }
    //funcion bola
    function moverBombo()
    {
        $bombo = array();
        //$numero=0;
        for ($i = 0; $i < 60; $i++) {

            $bombo[$i] = $i + 1;
        }
        shuffle($bombo);
        return $bombo;
    }

    

    // 
    function bola($bombo,$posicion){
       
        $bola = $bombo[$posicion];
        
        return $bola;
    }



    function tachar($carton1 , $carton2 , $carton3 ,$bola){





    }

    $carton = carton();
    $carton2  = carton();
    $carton3 = carton();
    imprimir($carton);
    imprimir($carton2);
    imprimir($carton3);
    $jugador1 = array($carton, $carton2, $carton3);


    function jugar($jugador1,$bola){
            $jugador = $jugador1;
            for ($i=0; $i < count($jugador) ; $i++) { 
                $var1 = $jugador[$i];
                $var2  = $jugador[$i];
                $var3  = $jugador[$i];          
             }
                $cont1= 0;
                $cont2= 0;
                $cont3= 0;
                for ($j=0; $j < count($var1); $j++) { 
                    if($var1[$j] == $bola)
                    $cont1 ++;
                }
                for ($j=0; $j < count($var2); $j++) { 
                    if($var2[$j] == $bola)
                    $cont2 ++;
                }
                for ($j=0; $j < count($var3); $j++) { 
                    if($var3[$j] == $bola)
                    $cont3 ++;
                }
                
                if($cont1 == 15) return "j1c1";
                if($cont2 == 15) return "j1c2";
                if($cont3 == 15) return "j1c3";

        // $bombo=moverBombo();
        // for ($i=0; $i < count($bombo); $i++) { 
        //          $bola = bola($bombo,$i);
        //     tachar($carton , $carton2 , $carton3 ,$bola);
        //  }

    }


    ?>
</BODY>

</HTML>
