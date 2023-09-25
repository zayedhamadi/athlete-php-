<?php
class config
{
    function getConnexion()
    {
        $dsn = "mysql:host=localhost;dbname=Gestion_Athletisme";
        $user = "root";
        $pw = "";
        $cnx = new PDO($dsn, $user, $pw);
        return $cnx;
    }
}
