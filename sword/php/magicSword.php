<?php

function getDieRoll ()
{
    $roll = rand(1, 100);

    return $roll;
}

function getSwordType()
{
    $number = rand(1, 100);

    if($number <= 15)
    {
        return 'Dagger';
    }
    else if($number >= 16 && $number <= 30)
    {
        return 'Short Sword';
    }
    else if($number >= 31 && $number <= 80)
    {
        return 'Longsword';
    }
    else
    {
        return 'Two-handed Sword';
    }
}


function getSwordAlignment()
{
    $number = rand(1, 100);

    if($number <= 40)
    {
        return 'Chaotic';
    }
    else if($number >= 41 && $number <= 60)
    {
        return 'Neutral';
    }
    else
    {
        return 'Lawful';
    }
}

function getToHitBonus($input)
{
    if($input <= 90)
    {
        return '+1';
    }
    else if($input >= 91 && $input <= 96)
    {
        return '+2';
    }
    else if($input >= 97 && $input <= 98)
    {
        $number = rand(1, 100);

        if($number <= 75)
        {
            return '+3';
        }
        else
        {
            return '+4';
        }
    }
    else
    {
        $number = rand(1, 100);
        if($number <= 50)
        {
            return '+3';
        }
        else if($number >= 51 && $number <= 85)
        {
            return '+4';
        }
        else
        {
            return '+5';
        }
    }

}


function getSwordIntelligence($input)
{
    if($input <= 50)
    {
        $int = rand(1, 6);
        $roll = ' (1d6)';
    }
    else if($input >= 51 && $input <= 75)
    {
        $int = rand(1, 6);
        $int += 2;
        $roll = ' (1d6+2)';
    }
    else if($input >= 76 && $input <= 85)
    {
        $die1 = rand(1, 4);
        $die2 = rand(1, 4);
        $die3 = rand(1, 4);
        $int = $die1 + $die2 + $die3;
        $roll = ' (3d4)';
    }
    else if($input >= 86 && $input <= 90)
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $int = $die1 + $die2;
        $roll = ' (2d6)';
    }
    else if($input >= 91 && $input <= 94)
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $int = $die1 + $die2 + 2;
        $roll = ' (2d6+2)';
    }
    else if($input >= 95 && $input <= 96)
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $die3 = rand(1, 6);
        $int = $die1 + $die2 + $die3;
        $roll = ' (3d6)';
    }
    else if($input >= 97 && $input <= 98)
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $die3 = rand(1, 6);
        $int = $die1 + $die2 + $die3 + 2;
        $roll = ' (3d6+2)';
    }
    else
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $die3 = rand(1, 6);
        $int = $die1 + $die2 + $die3 + 4;
        $roll = ' (3d6+4)';
    }

    $inteligence = array($int, $roll);
    return $inteligence;
}


function getSwordCommunication($input)
{
    if($input <= 50)
    {
        return 'None';
    }
    else if($input >= 51 && $input <= 85)
    {
        return 'Simple urges';
    }
    else if($input >= 86 && $input <= 94)
    {
        return 'Empathy';
    }
    else if($input >= 95 && $input <= 96)
    {
        return 'Speech';
    }
    else if($input >= 97 && $input <= 98)
    {
        return 'Telepathy';
    }
    else
    {
        return 'Speech & telepathy';
    }

}


?>