<?php

function mutateTheArray($n,$a){
    $b= [];
    if(count($a) == 1)
    {
        return $a;
    }
    for($i = 0; $i < count($a) - 1; $i++)
    {
        if($i == 0)
        {
            $b[0] = 0 + $a[$i] + $a[$i + 1];
        }
        if($i == count($a))
        {
            $b[count($a)] = $a[$i - 1] + $a[$i] + 0;
        }
        else if($i != count($a) && $i != 0)
        {
            $b[$i] = $a[$i - 1] + $a[$i] + $a[$i + 1];
        }
    }

    return $b;

}

$n = 7;

$a = [4,0,1,-2,3];
echo "[ ";
foreach (mutateTheArray($n,$a) as $value){

    echo " ".$value." ";
}
echo " ]";




