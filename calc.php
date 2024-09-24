<?php

 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $num3 = $_POST["num3"];

$operator1 = $_POST["op1"];
$operator2 = $_POST["op2"];

if (!is_numeric($num1) ||!is_numeric($num2) || !is_numeric($num3) )
   { echo "ERROR , please input a number";}


else
{
if ($operator1 == '+' && $operator2 == '+')
    {
        $math = $num1 + $num2 + $num3;
        echo " $math";
       
    }
elseif ($operator1=='+' && $operator2 == '-')
    {
        $math = $num1 + $num2 - $num3;
        echo "$math";
    }

elseif ($operator1 == '-' && $operator2 == '+')
    {
        $math = $num1 - $num2 + $num3;
        echo "$math";
    }

elseif ($operator1 == '-' && $operator2 == '-')
    {
        $math = $num1 - $num2 - $num3;
        echo "$math";
    }

elseif ($operator1 == '+' && $operator2 == '*')
    {
        $math = $num1 + ($num2 * $num3);
        echo "$math";
    }

elseif ($operator1 == '+' && $operator2 == '/')
    {
        $math = $num1 + ($num2 / $num3);
        echo "$math";
    }
    
elseif ($operator1 == '-' && $operator2 == '*')
    {
        $math = $num1 - ($num2 * $num3);
        echo "$math";
    }
   
 elseif ($operator1 == '-' && $operator2 == '/')
    {
        $math = $num1 - ($num2 / $num3);
        echo "$math";
    }

elseif ($operator1 == '*' && $operator2 == '+')
    {
        $math = ($num1 * $num2 ) + $num3;
        echo "$math";
    }
    
elseif ($operator1 == '*' && $operator2 == '-')
    {
        $math = ($num1 * $num2 ) -  $num3;
        echo "$math";
    }

elseif ($operator1 == '*' && $operator2 == '*')
    {
        $math = ($num1 * $num2 )* $num3;
        echo "$math";
    }

elseif ($operator1 == '*' && $operator2 == '/')
    {
        $math = ($num1 / $num2 ) / $num3;
        echo "$math";
    }

    elseif ($operator1 == '/' && $operator2 == '+')
    {
        $math = ($num1 / $num2 ) + $num3;
        echo "$math";
    }

    elseif ($operator1 == '/' && $operator2 == '-')
    {
        $math = ($num1 / $num2 ) - $num3;
        echo "$math";
    }

    elseif ($operator1 == '/' && $operator2 == '*')
    {
        $math = ($num1 / $num2 ) * $num3;
        echo "$math";
    }

    elseif ($operator1 == '/' && $operator2 == '/')
    {
        if ($num2==0 ||$num3 == 0)
        { 
            echo "N/A";
        }
       else
       { 
         $math = ($num1 / $num2 ) /$num3;
         echo "$math";}
          
    }

  


elseif ( $operator1 != '+' && $operator2 != '+' && $operator1 != '-' && $operator2 != '-' 
    || $operator1 != '*' && $operator2 != '*' && $operator1 != '/' && $operator2 != '/')
    {
       echo "ERROR <br>";
      echo "The operators must be one of the following ( +, - , * , / ).";
    }

 }

 
?>