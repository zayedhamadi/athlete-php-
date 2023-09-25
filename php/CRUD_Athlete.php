<?php
    require_once "config.php";
    require_once "Athlete.php";
    class CRUD_Athlete{
        private $cnx;

        public function __construct()
        {
            $pdo=new config();
            $this->cnx=$pdo->getConnexion();
        }


        public function listeAthlete($etat)
        {
            $sql="select cin,nom,prenom,date_naissance from athlete where etat=$etat";
            $req=$this->cnx->query($sql);
            $lesAthletes=$req->fetchAll(PDO::FETCH_NUM);
            return $lesAthletes;
        }

        public function Passer_test($cin,$taux){
            if ($taux>1) {
                $sql="update athlete set etat='1',tauxDetecte=$taux where cin=$cin";
                $req=$this->cnx->exec($sql);
            }
        }

    }