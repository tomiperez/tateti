<?php
class tateti
{
public $ar = [
  [3,3,3],
  [3,3,3],
  [3,3,3],
];

public $p=1;

public $ganador;
public $player1 = 'Y';
public $player2 = 'O';
public $x;
public $y;


//cargarMatriz())



//carga las Y e X random por la matriz   
public function cargarMatriz($ar)
{

  for ($i=0; $i < 9 && !$this->validador ($this->ar) ; $i++) 
  { 
    $x = rand (0,2);
    $y = rand (0,2);

    if($this->ar[$x][$y] == 3)
    {
      
      if($this->p==1)
      {
        //echo "juega $this->player1--$this->p ";
        $this->ar[$x][$y] = $this->player1;
        $this->p = $this->p+1;
      }elseif ($this->p==2) 
        {
          //echo "juega $this->player2--$this->p";
          $this->ar[$x][$y] = $this->player2;
          $this->p = $this->p-1;        
        }
      
    }
    if ($this->ar[$x][$y] == $this->player1 or $this->player2);{
      $i = $i-1;
    }
    
  }

  $this->showArray($this->ar);
  
}
  

//mostrar array por pantalla  

  
 public function showArray($ar){
    foreach ($ar as $key => $value) {
  echo ($value[0]); 
 }
  echo "\n";
  foreach ($ar as $key => $value) {
    echo ($value[1]) ; 
  }
  echo "\n";
    foreach ($ar as $key => $value) {
    echo ($value[2]); 
  }
  echo "\n";  
  echo ($this->ganador);

}


//validar ganador

 public function validador ($ar){
  if ($ar[0][0] == $this->player1 and $ar[0][1] == $this->player1 and $ar[0][2] == $this->player1){
    $this->ganador = 'gano el 1' ;
    return true;}
  elseif ($ar[1][0] == $this->player1 and $ar[1][1] == $this->player1 and $ar[1][2] == $this->player1) {
    $this->ganador = 'gano el 1' ;
    return true;
  }
  elseif ($ar[2][0] == $this->player1 and $ar[2][1] == $this->player1 and $ar[2][2] == $this->player1) {
    $this->ganador = 'gano el 1' ;
    return true;
  }
  elseif ($ar[0][0] == $this->player1 and $ar[1][1] == $this->player1 and $ar[2][2] == $this->player1) {
    $this->ganador = 'gano el 1' ;
    return true;
  }
  elseif ($ar[2][0] == $this->player1 and $ar[1][1] == $this->player1 and $ar[0][2] == $this->player1) {
    $this->ganador = 'gano el 1' ;
    return true;
  }
  elseif ($ar[0][0] == $this->player1 and $ar[1][0] == $this->player1 and $ar[2][0] == $this->player1) {
    $this->ganador = 'gano el 1' ;
    return true;
  }
  elseif ($ar[0][1] == $this->player1 and $ar[1][1] == $this->player1 and $ar[2][1] == $this->player1) {
    $this->ganador = 'gano el 1' ;
    return true;
  }
  elseif ($ar[0][2] == $this->player1 and $ar[1][2] == $this->player1 and $ar[2][2] == $this->player1) {
    $this->ganador = 'gano el 1' ;
    return true;
  }
 
 elseif ($ar[0][0] == $this->player2 and $ar[0][1] == $this->player2 and $ar[0][2] == $this->player2){
  $this->ganador = 'gano el 2' ; 
  return  true;
  }
elseif ($ar[1][0] == $this->player2 and $ar[1][1] == $this->player2 and $ar[1][2] == $this->player2) {
  $this->ganador = 'gano el 2' ; 
  return true;
}
elseif ($ar[2][0] == $this->player2 and $ar[2][1] == $this->player2 and $ar[2][2] == $this->player2) {
  $this->ganador = 'gano el 2' ; 
  return true;
}
elseif ($ar[0][0] == $this->player2 and $ar[1][1] == $this->player2 and $ar[2][2] == $this->player2) {
  $this->ganador = 'gano el 2' ; 
  return true;
}
elseif ($ar[2][0] == $this->player2 and $ar[1][1] == $this->player2 and $ar[0][2] == $this->player2) {
  $this->ganador = 'gano el 2' ; 
  return true;
}
elseif ($ar[0][0] == $this->player2 and $ar[1][0] == $this->player2 and $ar[2][0] == $this->player2) {
  $this->ganador = 'gano el 2' ;
  return true;
}
elseif ($ar[0][1] == $this->player2 and $ar[1][1] == $this->player2 and $ar[2][1] == $this->player2) {
  $this->ganador = 'gano el 2' ;
  return true;
}
elseif ($ar[0][2] == $this->player2 and $ar[1][2] == $this->player2 and $ar[2][2] == $this->player2) {
  $this->ganador = 'gano el 2' ;
  return true;
}
else{
  return false;
}

}



}


$tat = new Tateti;

$tat->cargarMatriz($tat->ar);

