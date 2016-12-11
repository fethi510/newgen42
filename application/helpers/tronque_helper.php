<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function tronque($chaine, $lg_max)
    {
            if (strlen($chaine) > $lg_max)
            {	
                    $chaine = mb_substr(strip_tags(trim($chaine)), 0,$lg_max,'utf-8');
                    $chaine = $chaine."...";
            }
            return $chaine;
    }
?>
