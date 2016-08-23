<?php
/**
 * Created by PhpStorm.
 * User: jerry
 * Date: 2016/8/23
 * Time: 20:31
 */

if (isset($_POST['url']))
{
    echo file_get_contents("http://".SanitizeString($_POST['url']));
}

function SanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    return stripslashes($var);
}