<?php  
if (isset($argc)) {

  $input=$argc[1];
  //call the function to generate prime numbers  
  $primeNumbers = new primaryNumbers;
  $numbers = $primeNumbers->primeMultiply(10);
  $multiplyArray = new multiplyArray($numbers);
  $multiplyArray->multiplyArray();
  
  
}
else {
  echo "argc and argv disabled\n";
}


Class primaryNumbers {

  public $number;
  function __construct() {
    $this->number = 1;
  }

  /**  Function to get prime numbers along with the multiply table **/
  public function primeMultiply($input){
    $primarynumbers = $this->getPrimeNumbers($input);
    return $primarynumbers;
  }
  
  /** function to generate prime numbers based on the in put passed **/
  public function getPrimeNumbers($input){
    
    $count = 0 ;
    $primeNumbers = array();
    
    if(!is_numeric($input)){
    echo "please enter a number";
    return true;
    }
    while ($count < $input )
    {
      $div_count=0;
      for ( $i=1;$i<=$this->number;$i++)
      {
        if (($this->number%$i)==0)
        {
          $div_count++;
        }
      }
      if ($div_count<3)
      {
        $primeNumbers[] = $this->number;
        
        $count=$count+1;
      }
      $this->number=$this->number+1;
    }
    return $primeNumbers;
    
  }
  
    
}

class multiplyArray
{
  function __construct($numbers){
    $this->numbersArray = $numbers;
  }
  
  /** function to get multiplication of the given array **/
  public function multiplyArray(){
    if(!is_array($this->numbersArray)){
      echo "please provide an array";
      return false;
    }
    
    echo "\n";
    foreach($this->numbersArray as $primeNumber){
      foreach ($this->numbersArray as $multiplyNumber)
      {
        echo $primeNumber*$multiplyNumber." ";
        $this->result[] = $primeNumber*$multiplyNumber;
      }
      echo "\n";
    }
    return $this->result;
  }
  
}
?>