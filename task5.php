<?php

function countAmountOfOne(array $nums)
{
    $counter = 0;
    $countLength = [];

    foreach ($nums as $num)
    {
        if ($num === 1)
        {
            $counter += 1;
        }else{
            $countLength[] = $counter;
            $counter = 0;
        }
    }

    return max($countLength);
}

