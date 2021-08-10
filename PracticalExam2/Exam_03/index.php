<?php
    function CheckSquare($Turn)
    {
        //get the square root then convert into interger or whole number
        $TestSquare = (int)(sqrt($Turn));
        
        // Test the results
        if(($TestSquare * $TestSquare )== $Turn)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function CheckTurn($n)
    {
        // check the square value of the turns
        $turn_1=CheckSquare(5 * $n * $n + 4);
        $turn_2=CheckSquare(5 * $n * $n - 4);
        //check if any of the value was already 
        if($turn_1||$turn_2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    // Count of turns to check the value if its fibonacci numbers
    for ($Turn = 1; $Turn <= 10; $Turn++)
    {
        if(CheckTurn($Turn)){
            echo "$Turn is a Fibonacci Number<br>";
        }
        else
        {
            echo "$Turn is a not Fibonacci Number<br>" ;
        }
    }
 ?>