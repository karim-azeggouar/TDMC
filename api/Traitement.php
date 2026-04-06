<?php

// traitement talab1 : 

function Authentification($login,$password)
{
    $flag=0;    
    if($login=='TDM'    &&    $password='123')
    {
        $flag=1;
    }    
    return $flag;
}
