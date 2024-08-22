<?php
//По никнейму определить пол собеседника
function detGender($username)
{
    $uniqueChars = count(array_unique(str_split($username)));
    if ($uniqueChars % 2 == 0) {
        return "Girl!";
    } else {
        return "Boy!";
    }
}
function randomName($letters = 'abcdefghijklmnopqrstuvwxyz')
{
    $length = rand(10, 100);
    $username = '';
    for ($i = 0; $i < $length; $i++) {
        $username .= $letters[rand(0, strlen($letters) - 1)];
    }
    return $username;
}


print_r(detGender(randomName()));



