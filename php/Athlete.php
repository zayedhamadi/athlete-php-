<?php
    class Athlete{
        private $cin;
        private $nom;
        private $prenom;
        private $date_naissance;
        private $etat;
        private $tauxDetecte;






        /**
         * Get the value of cin
         */ 
        public function getCin()
        {
                return $this->cin;
        }

        /**
         * Set the value of cin
         *
         * @return  self
         */ 
        public function setCin($cin)
        {
                $this->cin = $cin;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of date_naissance
         */ 
        public function getDate_naissance()
        {
                return $this->date_naissance;
        }

        /**
         * Set the value of date_naissance
         *
         * @return  self
         */ 
        public function setDate_naissance($date_naissance)
        {
                $this->date_naissance = $date_naissance;

                return $this;
        }

        /**
         * Get the value of etat
         */ 
        public function getEtat()
        {
                return $this->etat;
        }

        /**
         * Set the value of etat
         *
         * @return  self
         */ 
        public function setEtat($etat)
        {
                $this->etat = $etat;

                return $this;
        }

        /**
         * Get the value of tauxDetecte
         */ 
        public function getTauxDetecte()
        {
                return $this->tauxDetecte;
        }

        /**
         * Set the value of tauxDetecte
         *
         * @return  self
         */ 
        public function setTauxDetecte($tauxDetecte)
        {
                $this->tauxDetecte = $tauxDetecte;

                return $this;
        }
    }