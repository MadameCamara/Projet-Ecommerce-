<?php

    function connexionBD()
    {

        // connexion a mysql
        $con = mysqli_connect("localhost","root", '');

        if (!$con)
        {
            print("connexion impossible a mysql"); 
            exit;
        }
        // selection de la BD restau
        if (!mysqli_select_db($con ,"dieme_sanokho"))
        {
            print("connexion impossible a la BD"); 
            exit;
        }
        return $con ; 
    }


    function connexionBD2($b)
    {     
        $con = mysqli_connect("localhost","root", '');

        if (!$con)
        {
            print("connexion impossible a mysql"); 
            exit;
        }
        // selection de la BD restau
        if (!mysqli_select_db($con ,$b))
        {
            print("connexion impossible a la BD"); 
            exit;
        }
        return $con ; 
    }


    function FermerBD($con)
    {
        if (mysqli_close($con) == false)
        {
            print("Fermeture impossible de la BD"); 
            exit;
        }
    }

?>