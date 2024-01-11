<?php

// Traccia 1

$users = [
['name' =>'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
['name' =>'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
['name' =>'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

// foreach($users as $elemento){
//     if($elemento['gender']== "M"){
//       echo "Buongiorno Sig." . ' ' . $elemento["name"] .' '.  $elemento["surname"] ."\n";
//     }else if($elemento["gender"] == "F"){
//       echo "Buongiorno Sig.ra" . ' ' . $elemento["name"] .' '.  $elemento["surname"] ."\n";
//     }else{
//       echo "Buongiorno" . ' ' . $elemento["name"] .' '.  $elemento["surname"];
//     }
//     }

    // foreach($users as $elemento){
    //     switch ($elemento["gender"]) {
    //       case 'M':
    //         echo "Buongiorno Sig." . ' ' . $elemento["name"] .' '.  $elemento["surname"] ."\n";
    //         break;
    //         case 'F':
    //           echo "Buongiorno Sig.ra" . ' ' . $elemento["name"] .' '.  $elemento["surname"] ."\n";
    //           break;
    //       default:
    //       echo "Buongiorno" . ' ' . $elemento["name"] .' '.  $elemento["surname"];
    //         break;
    //     }
    //   }



      // Traccia 2

      $numeri = [1,4,6,8,14,5,7];
      $somma_totale = 0;
      $counter = 0;
    foreach($numeri as $numero) { 
    
        if(($numero % 2) == 0){
        $somma_totale += $numero;
        $counter++;
       }
   }

  // var_dump($somma_totale/$counter);


  // Traccia 3

//   for($i = 0 ;$i<=100;$i++){

//    if($i % 3 == 0 && $i % 5 == 0 ){
//     echo "HACKADEMY"."\n";
//    }else if ($i % 3 == 0){
//     echo "PHP"."\n";
//    }else if ($i % 5 == 0){
//     echo "JAVASCRIPT"."\n";
//    }else{
//     echo $i."\n";
//    }
// };








