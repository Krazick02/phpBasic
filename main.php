<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $object = new stdClass();
        $object->property = 'I am an object\'s a';
        $object->marin = 'I am an object\'s s';
        $object->name = 'I am an object\'s d';
        // $str = var_dump($object);

        class MyClass{
            const ABC = array('A', 'B', 'C');
            const A = '1';
            const B = '2';
            const C = '3';
            const NUMBERS = array(
                self::A,
                self::B,
                self::C,
            );
        }
        // var_dump(MyClass::NUMBERS);
        // var_dump(MyClass::ABC);

        // objeto
        $ciudad[0]=[
            'nombre'=>'Valdivia',
            'pais'=>'Rusia',
            'pob'=> 987
        ];
        $ciudad[1]=[
            'nombre'=>'Baja california sur',
            'pais'=>'mexico',
            'pob'=> 92828
        ];

        // array
        $coches = array('ford','audi','cheby');
        
        // array multidimensional
        $users = array(
            'Usuario 1'=>array('nombre' =>"Jose",'genero' =>"Masculino", 'profesion' =>"Chofer"),
            'Usuario 2'=>array('nombre' =>"Sugey",'genero' =>"Femenino", 'profesion' =>"Doctor"),
            'Usuario 3'=>array('nombre' =>"Liam",'genero' =>"Masculino", 'profesion' =>"Dealer"),
        );

        // ciclo for 
        echo 'Las marcas mas populares en el mundo son: <hr>';
        for( $i = 0; $i < sizeof($coches); $i++){
            echo 'La marca #'.($i+1).' es :'.$coches[$i].'<br>';
        }
        
        // ciclo forEach 
        echo '<br>Las marcas mas populares en el mundo son: <hr>';
        foreach($coches as $marcas){
            echo 'La marca es :'.$marcas.'<br>';
        }

        // foreach con array multidimensional
        echo '<br> <strong>Usuarios </strong>  <hr>';
        foreach($users as $user => $info){
            echo '<strong>'.$user.'</strong><br>';
            foreach($info as $content){
                echo $content.'<br>';
            }
        }
    ?>

    <p>
    I am <?=$ciudad[0]['nombre']?>.
    I on <?=$ciudad[0]['pais']?>.
    I have <?=$ciudad[0]['pob']?>.
    </p>
<i></i>
</strong>
</body>
</html>