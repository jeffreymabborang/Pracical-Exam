<?php
    // While loop that will sum all the even numbers 0-10
    function WhileLoop()
    {
        $a=0;
        $b=0;
        while($a<=10)
        {
            $b+=$a;
            $a+=2;
        }
        echo $b;
    }
    // Do While loop tha will display all odd numbers from 0-10
    function DoWhileLoop()
    {
        $a=0;
        do {
            if($a%2==1)
            {
                echo $a.", ";
            }
            $a++;
        } while ($a <= 10);
    }
    //for loop that will display 10 numbers in fibonacci sequence
    function ForLoop()
    {
        $a = 0;
        $b = 1;
        $c = 0;
        echo $a.", ".$b;
        for ($turn = 0; $turn < 8; $turn++)
        {
            $c = $a + $b;
            $a = $b;
            $b = $c;
            echo ", ".$c;
        }
    }
    // Display the number of occurrences inside an array
    function SortArrayString($Load)
    {
        $NewArray=array();
        $ReturnArray=array();
        $NewArray=array_count_values($Load);
        foreach ($NewArray as $key => $value) {
            if($value!=1)
                array_push($ReturnArray,$key);
        }
        sort($ReturnArray);
        return $ReturnArray;
    }
    //Round the data from the array if its to the nearest tens
    function RoundData($Data)
    {
        $NewData=array();
        foreach ($Data as $key) {
            if($key%2==1)
            {
                $key=round($key, -1);
            }
            array_push($NewData, $key);
        }
        sort($NewData);
        return $NewData;
    }
    // Display the data from the array that are not repetitive
    function SortArrayNotRepetitive($Load)
    {
        $NewArray=array();
        $ReturnArray=array();
        $NewArray=array_count_values($Load);
        foreach ($NewArray as $key => $value) {
            if($value==1)
                array_push($ReturnArray,$key);
        }
        sort($ReturnArray);
        return $ReturnArray;
    }
?>

