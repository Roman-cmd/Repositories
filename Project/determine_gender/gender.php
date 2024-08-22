<?php
function detGender($input)
{

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







