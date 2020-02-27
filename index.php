<?php
    $myArray = ['html', 'css', 'php'];
    //Acces to specific position
    echo $myArray[1];
    //Other way to create on array
    $myArray = array ('css','JavaScript','Python');
    echo '<br>' . $myArray[2];
    print_r($myArray2);
    echo '<br>';
    var_dump($myArray); // pritn array showing type
    //add ing elements to array 
    $myArray[] = 20;
    //other way to add elements to array
    array_push($myArray,'Java',30);
    echo '<br>';
    var_dump($myArray);
    echo '<br>';
    //Asscociative arrays
    $myArray3 = array(
        'name' => 'Juan',
        'lastname' => 'Ortiz'
    );
    print_r($myArray3);
    echo $myArray3['name'];

    foreach ($myArray as $element){
        echo $element . '<br>';
    }

    foreach($myArray as $key=>$element){
        echo '<li>'.$element.', position: '. $key . '</li>';
    }
?>