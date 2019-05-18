<?php


required(PHPUnit\Framework\TestCase.php);
required(primenumber.php);

class primeNumberTest extends TestCase
{
    /**
     * Test for wrong input validation.
     */
    public function testWronginput()
    {
        $output = false;
        $primeObject = new primaryNumbers;
        $this->assertEquals(
            $primeObject->getPrimeNumbers(bs),
            $output
        );
    }
    
    /**
     * Test for wrong input validation.
     */
    public function testWronginput()
    {
        $output = false;
        $primeObject = new multiplyArray(2);
        $this->assertEquals(
            $primeObject->multiplyArray(),
            $output
        );
    }
    
    /**
     * Test for primary number function.
     */
    public function testPrimarynumbers()
    {
        $output = array("1","2","3");
        $primeObject = new primaryNumbers;
        $this->assertEquals(
            $primeObject->getPrimeNumbers(3),
            $output
        );
    }
    
    
    /**
     * Test for primary number function.
     */
    public function testMultiplyarray()
    {
        $input = array("1","2","3");
        $output = array("1","2","3","2","4","6","3","6","9");
        $primeObject = new multiplyArray($input);
        $this->assertEquals(
            $primeObject->multiplyArray(),
            $output
        );
    }
    
}
