<?php

function checkPassword(string $password){
  $check = false;
  $check = checkSpecial($password) && checkLength($password) && checkUppercase($password) && checkNumeric($password);
  if($check){
      echo "Password appropriata \n";
      return true;
  } 
  echo "password troppo semplice \n";
  return false;
}

function checkLength(string $password){
  $lunghezza = strlen($password);
  if($lunghezza < 8){
   return false;
  }else{
    return true;
  }
}

function checkNumeric(string $password){
  for($i=0; $i <strlen($password);$i++){
    if(ctype_digit($password[$i])){
        return true;
    }
}
return false;
}

function checkUppercase(string $password){
  for($i=0; $i <strlen($password);$i++){
    if(ctype_upper($password[$i])){
        return true;
    }
}
return false;
}

function checkSpecial(string $password){
  $special = ['!','@','#','?'];
  for($i=0; $i <strlen($password);$i++){
      if(in_array($password[$i],$special)){
          return true;
      }
  }
  return false;
}

do{$password = readline('Inserisci una password sicura: ');

}while(!checkPassword($password));

