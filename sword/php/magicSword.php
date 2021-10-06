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
        $roll = '(1d6)';
    }
    else if($input >= 51 && $input <= 75)
    {
        $int = rand(1, 6);
        $int += 2;
        $roll = '(1d6+2)';
    }
    else if($input >= 76 && $input <= 85)
    {
        $die1 = rand(1, 4);
        $die2 = rand(1, 4);
        $die3 = rand(1, 4);
        $int = $die1 + $die2 + $die3;
        $roll = '(3d4)';
    }
    else if($input >= 86 && $input <= 90)
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $int = $die1 + $die2;
        $roll = '(2d6)';
    }
    else if($input >= 91 && $input <= 94)
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $int = $die1 + $die2 + 2;
        $roll = '(2d6+2)';
    }
    else if($input >= 95 && $input <= 96)
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $die3 = rand(1, 6);
        $int = $die1 + $die2 + $die3;
        $roll = '(3d6)';
    }
    else if($input >= 97 && $input <= 98)
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $die3 = rand(1, 6);
        $int = $die1 + $die2 + $die3 + 2;
        $roll = '(3d6+2)';
    }
    else
    {
        $die1 = rand(1, 6);
        $die2 = rand(1, 6);
        $die3 = rand(1, 6);
        $int = $die1 + $die2 + $die3 + 4;
        $roll = '(3d6+4)';
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


function getSwordSpecialPurposeNumber($input)
{
    $specialPurpose = array();

    if($input <= 50)
    {
        $val = rand(1, 12);
        $val -= 6;

        if($val < 0)
        {
            $val = 0;
        }

        array_push($specialPurpose, $val);
    }
    else if($input >= 51 && $input <= 75)
    {
        $val = rand(1, 6);
        array_push($specialPurpose, $val);

    }
    else if($input >= 76 && $input <= 85)
    {
        $val1 = rand(1, 6);
        $val2 = rand(7, 12);
        array_push($specialPurpose, $val1);
        array_push($specialPurpose, $val2);
    }
    else if($input >= 86 && $input <= 90)
    {
        $val = rand(1, 12);
        array_push($specialPurpose, $val);
    }
    else if($input >= 91 && $input <= 94)
    {
        $val1 = rand(1, 8);

        $d14Array = array();

        for($i = 1; $i <= 14; ++$i)
        {
            if($i != $val1)
            {
                array_push($d14Array, $i);
            }
        }

        shuffle($d14Array);

        $val2 = $d14Array[0];
        array_push($specialPurpose, $val1);
        array_push($specialPurpose, $val2);

    }
    else if($input >= 95 && $input <= 96)
    {
        
        $d14 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);

        shuffle($d14);
        $val1 = $d14[0];
        $val2 = $d14[1];
        $val3 = $d14[2];
        array_push($specialPurpose, $val1);
        array_push($specialPurpose, $val2);
        array_push($specialPurpose, $val3);

    }
    else if($input >= 97 && $input <= 98)
    {
        $val1 = rand(1, 6);
        $val2 = rand(7, 12);
        array_push($specialPurpose, $val1);
        array_push($specialPurpose, $val2);
    }
    else
    {
        $val1 = rand(1, 6);
        $val2 = rand(11, 15);
        array_push($specialPurpose, $val1);
        array_push($specialPurpose, $val2);

        $third = rand(1, 6);

        if($third === 6)
        {
            $thirdPower = array();

            for($i = 11; $i < 16; ++$i)
            {
                if($i != $val2)
                {
                    array_push($thirdPower, $i);
                }
            }

            shuffle($thirdPower);

            $val3 = $thirdPower[0];
            array_push($specialPurpose, $val3);
        }


    }

    return $specialPurpose;
}



function getSwordSpecialPurpose($power, $alignment)
{
    $numberPowers = count($power);
    $specialPurpose = array();

    for($i = 0; $i < $numberPowers; ++$i)
    {
        $roll = $power[$i];

        if($alignment === 'Lawful')
        {
            switch($roll)
            {
                case 0:
                    $purpose = '';
                    break;
                    
                case 1:
                    $purpose = 'Enforce the law';
                    break;
                    
                case 2:
                    $purpose = 'Protect the weak';
                    break;
                    
                case 3:
                    $purpose = 'Punish evildoers';
                    break;
                    
                case 4:
                    $purpose = 'Punish murderers';
                    break;
                    
                case 5:
                    $purpose = 'Punish thieves';
                    break;
                    
                case 6:
                    $purpose = 'Jail the guilty';
                    break;
                    
                case 7:
                    $purpose = 'Provide charity to the needy';
                    break;
                    
                case 8:
                    $purpose = 'Defend against the incursion of Chaos';
                    break;
                    
                case 9:
                    $purpose = 'Slay chaotic creatures*';
                    break;
                    
                case 10:
                    $purpose = 'Slay chaotic dragons*';
                    break;

                case 11:
                    $purpose = 'Slay chaotic demons*';
                    break;
                    
                case 12:
                    $purpose = 'Build monuments to great heroes';
                    break;
                    
                case 13:
                    $purpose = 'Build the world’s greatest city';
                    break;
                    
                case 14:
                    $purpose = 'Slay a specific Chaos Lord, demon or unique monster*';
                    break;
                    
                case 15:
                    $purpose = 'Clear the world of all obstacles to the imposition of Law';
                    break;

                default:
                    $purpose = '9999999';

            }
    
        }
        else if($alignment === 'Neutral')
        {
            switch($roll)
            {
                case 0:
                    $purpose = '';
                    break;
                    
                case 1:
                    $purpose = 'Avoid conflict';
                    break;
                    
                case 2:
                    $purpose = 'Spill the blood of no man';
                    break;

                case 3:
                    $purpose = 'Bridge understanding between enemies';
                    break;
                    
                case 4:
                    $purpose = 'Live alone as a warrior-hermit';
                    break;
                    
                case 5:
                    $purpose = 'Bring Balance to a specific place';
                    break;
                    
                case 6:
                    $purpose = 'Take no sides';
                    break;
                    
                case 7:
                    $purpose = 'Achieve perfect self-harmony';
                    break;
                    
                case 8:
                    $purpose = 'Become one with nature';
                    break;
                    
                case 9:
                    $purpose = 'Break all allegiances';
                    break;
                    
                case 10:
                    $purpose = 'Purge the world of all paragons of Law and Chaos';
                    break;
                    
                case 11:
                    $purpose = 'Slay one lawful creature for every chaotic creature slain, and vice versa';
                    break;

                case 12:
                    $purpose = 'Bring peace between gods';
                    break;
                    
                case 13:
                    $purpose = 'Seek the Void';
                    break;
                    
                case 14:
                    $purpose = 'Deliver an esoteric item to an identified place at one point of time, performing one tiny step in a master plan beyond any man’s understanding';
                    break;
                    
                case 15:
                    $purpose = 'Prepare the world for the return of the Old Ones';
                    break;

                default:
                    $purpose = '9999999';

            }
    
        }
        else
        {
            switch($roll)
            {
                case 0:
                    $purpose = '';
                    break;
                    
                case 1:
                    $purpose = 'Undermine authority';
                    break;
                    
                case 2:
                    $purpose = 'Dominate all others';
                    break;
                    
                case 3:
                    $purpose = 'Reward the ambitious at all costs';
                    break;
                    
                case 4:
                    $purpose = 'Punish interlopers and those who interfere';
                    break;
                    
                case 5:
                    $purpose = 'Acquire wealth through theft';
                    break;
                    
                case 6:
                    $purpose = 'Free prisoners';
                    break;
                    
                case 7:
                    $purpose = 'Spread the seven deadly sins';
                    break;
                    
                case 8:
                    $purpose = 'Defend against the incursion of Law';
                    break;
                    
                case 9:
                    $purpose = 'Slay lawful creatures*';
                    break;
                    
                case 10:
                    $purpose = 'Slay lawful dragons*';
                    break;

                case 11:
                    $purpose = 'Slay lawful outsiders*';
                    break;
                    
                case 12:
                    $purpose = 'Build a monument to Chaos from the rubble of civilization';
                    break;
                    
                case 13:
                    $purpose = 'Destroy the world’s kingdoms, one by one';
                    break;
                    
                case 14:
                    $purpose = 'Slay a specific hero of Law, such as an angel or celestial';
                    break;
                    
                case 15:
                    $purpose = 'Clear the world for the invasion of Chaos';
                    break;
                    
                default:
                    $purpose = '9999999';

            }
    
        }

        array_push($specialPurpose, $purpose);

    }

    return $specialPurpose;

}



function getNumberOfBanes($input)
{
    if($input <= 50)
    {
        return 0;
    }
    else if($input >= 51 && $input <= 75)
    {
        return 1;
    }
    else if($input >= 76 && $input <= 85)
    {
        $dieRoll = rand(1, 3);
        $dieRoll -= 1;
        return $dieRoll;
    }
    else if($input >= 86 && $input <= 90)
    {
        $dieRoll = rand(1, 4);
        $dieRoll -= 1;
        return $dieRoll;
    }
    else if($input >= 91 && $input <= 94)
    {
        $dieRoll = rand(1, 4);
        return $dieRoll;
    }
    else if($input >= 95 && $input <= 96)
    {
        $dieRoll = rand(1, 3);
        $dieRoll += 1;
        return $dieRoll;
    }
    else if($input >= 97 && $input <= 98)
    {
        $dieRoll = rand(1, 4);
        $dieRoll += 1;
        return $dieRoll;
    }
    else
    {
        $dieRoll1 = rand(1, 4);
        $dieRoll2 = rand(1, 4);
        return $dieRoll1 + $dieRoll2;
    }

}

function getBaneType($input)
{
    $swordBanes = array(
        'Goblinoids',
        'Giants',
        'Lycanthropes',
        'Un-dead',
        'Wizards',
        'Demons',
        'Dragons',
        'Creatures of opposed alignment',
        'Vampires',
        'Elves',
        'All Elementals',
        'Fire Elementals',
        'Water Elementals',
        'Air Elementals',
        'Earth Elementals',
        'Clerics',
        'Dwarves',
        'Halflings',
        'Men',
        'Orcs',
        'Fey',
        'Thieves',
        'Warriors',
        'Serpents',
        'Naga',
        'Sphinxes',
        'Golems',
        'Unicorns',
        'Gods');

    shuffle($swordBanes);

    $swordBaneTypes = array();

    for($i = 0; $i < $input; ++$i)
    {
        array_push($swordBaneTypes, $swordBanes[$i]);
    }

    return $swordBaneTypes;

}

function getBaneEffect($input)
{
    $baneEffects = array(
        'Unreasoning hatred; sword urges wielder to attack bane at every opportunity (ego check)',
        'Additional +1 attack bonus',
        'Additional +1 damage bonus',
        'Additional +1 bonus to attack and damage',
        'Berserker fury when facing bane; ego check or wielder gains +4 Strength and Stamina for 2d6 rounds, then is exhausted at -4 Strength and Stamina for 1d6 turns thereafter ',
        'Unerring throw; only against bane, sword can be thrown with a 60’ range, and always returns to the attacker’s hand; when thrown, it uses attacker’s normal missile fire attack roll but includes his Strength modifier to damage',
        'Extended critical threat range; attacker scores criticals against bane at 1 more result on the die (e.g., if normally score criticals on 19-20, now score on 18-20)',
        'Beacon of hope; allies within 100’ engaged in battle against bane gain +2 bonus to all 
        saving throws and morale checks',
        'Beacon of fury; sword attempts to persuade everyone that it can communicate with to attack the bane under any circumstances (ego check for wielder and potentially others',
        'Bleeding wounds; sword’s wounds against bane continue to bleed, inflicting an additional 1 hp damage (cumulative) per round after hit until magically healed, so a bane target hit by three successive attacks from the sword takes 3 hp damage per round thereafter',
        'Neutralization; after a direct hit, sword prevents bane from using one of its natural powers (as determined by judge) for one full day; if bane does not have any specific natural powers (e.g., if bane is “men”), sword gives victim a cumulative -1 attack modifier for every direct hit (fades after 1 day)',
        'Ability score drain; sword inflicts normal damage plus 1d4 points of ability score drain per hit against bane; determine ability score with 1d5: (1) Strength, (2) Stamina, (3) Agility, (4) Personality, (5) Intelligence',
        'Spotter; sword marks bane so it is more easily attacked; allies can fire into melee between wielder and bane at no penalty and no chance of hitting wielder, and allies attacking bane with missile fire within 100’ of sword receive a +1 attack bonus',
        'Hardiness; when taking damage from the bane, wielder can make a Fort save (DC 1d20+10); success means the attack inflicts only half damage',
        'Shattering blow; on a critical hit, sword inflicts an additional 1d10 damage',
        'Banishment; with a successful hit, sword sends bane back to its native plane or lair (Will save to resist vs. DC 1d20+10)',
        'Painful wound; sword inflicts an additional 1d4 damage to bane',
        'Festering wound; sword inflicts an additional 1d6 damage to bane, then another 1d4 damage on following round',
        'Summoning; when battling bane, sword can summon reinforcements, which are a creature type antithetical to the bane (per judge’s discretion) of total HD equal to half of wielder; sword can summon 1/day with 50% chance of success for duration 1d4 turns',
        'Hunter; sword can detect bane creatures within 100’, even if invisible or otherwise concealed, and can overcome magical defenses against detection as if with a +10 Will save or spell check',
        'Defender; wielder gains a +2 AC bonus when defending against attacks from the bane',
        'Additional +2 attack bonus ',
        'Additional +2 damage bonus',
        'Additional +2 bonus to attack and damage',
        'Death dealer; when bane is struck, it must make a Fort save (DC = 1d20+10) or instantly die');

    $swordBaneEffects = array();
    
    for($i = 0; $i < $input; ++$i)
    {
        array_push($swordBaneEffects, $baneEffects[$i]);
    }

    return $swordBaneEffects;
}


function getSwordPowerCount($input)
{    
    $swordPowerCount = array();
    
    if($input <= 50)
    {
        $die = rand(1, 2);

        if($die === 1)
        {
            array_push($swordPowerCount, 0);
        }
        else
        {
            array_push($swordPowerCount, 1);
        }
        
        array_push($swordPowerCount, 0);
        array_push($swordPowerCount, 0);

        return $swordPowerCount;
    }
    else if($input >= 51 && $input <= 75)
    {
        $die = rand(1, 4);

        if($die === 1)
        {
            array_push($swordPowerCount, 0);
        }
        else
        {
            array_push($swordPowerCount, 1);
        }
        
        array_push($swordPowerCount, 0);
        array_push($swordPowerCount, 0);

        return $swordPowerCount;
    }
    else if($input >= 76 && $input <= 85)
    {
        $powersI = 1;
        $die = rand(1, 2);
        
        array_push($swordPowerCount, $powersI);

        if($die === 1)
        {
            array_push($swordPowerCount, 0);
        }
        else
        {
            array_push($swordPowerCount, 1);
        }
        
        array_push($swordPowerCount, 0);

        return $swordPowerCount;
    }
    else if($input >= 86 && $input <= 90)
    {
        $powersI = rand(1, 3);
        $die = rand(1, 4);
        
        array_push($swordPowerCount, $powersI);

        if($die === 1)
        {
            array_push($swordPowerCount, 0);
        }
        else
        {
            array_push($swordPowerCount, 1);
        }
        
        array_push($swordPowerCount, 0);

        return $swordPowerCount;
    }
    else if($input >= 91 && $input <= 94)
    {
        $powersI = 0;
        $powersII = 0;
        $powersIII = 0;

        $randomDie = rand(1, 4);

        for($i = 0; $i < $randomDie; ++$i)
        {
            $chance = rand(1, 2);
            if($chance === 1)
            {
                $powersI += 1;
            }
            else
            {
                $powersII += 1;
            }
        }
        
        array_push($swordPowerCount, $powersI);
        array_push($swordPowerCount, $powersII);

        $chance2 = rand(1, 2);
        if($chance2 === 1)
        {
            $powersIII += 1;
        }

        array_push($swordPowerCount, $powersIII);
    }
    else if($input >= 95 && $input <= 96)
    {
        $powersI = 0;
        $powersII = 0;
        $powersIII = 0;

        $randomDie = rand(2, 5);

        for($i = 0; $i < $randomDie; ++$i)
        {
            $chance = rand(1, 2);
            if($chance === 1)
            {
                $powersI += 1;
            }
            else
            {
                $powersII += 1;
            }
        }
        
        array_push($swordPowerCount, $powersI);
        array_push($swordPowerCount, $powersII);

        $chance2 = rand(1, 4);
        if($chance2 < 4)
        {
            $powersIII += 1;
        }

        array_push($swordPowerCount, $powersIII);
    }
    else if($input >= 97 && $input <= 98)
    {
        $powersI = 0;
        $powersII = 0;
        $powersIII = 1;

        $randomDie = rand(2, 5);

        for($i = 0; $i < $randomDie; ++$i)
        {
            $chance = rand(1, 2);
            if($chance === 1)
            {
                $powersI += 1;
            }
            else
            {
                $powersII += 1;
            }
        }
        
        array_push($swordPowerCount, $powersI);
        array_push($swordPowerCount, $powersII);
        array_push($swordPowerCount, $powersIII);
    }
    else
    {
        $powersI = 0;
        $powersII = 0;
        $powersIII = rand(1, 3);

        $randomDie = rand(3, 6);

        for($i = 0; $i < $randomDie; ++$i)
        {
            $chance = rand(1, 2);
            if($chance === 1)
            {
                $powersI += 1;
            }
            else
            {
                $powersII += 1;
            }
        }
        
        array_push($swordPowerCount, $powersI);
        array_push($swordPowerCount, $powersII);
        array_push($swordPowerCount, $powersIII);
    }

}

?>