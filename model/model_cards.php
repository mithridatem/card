<?php
    class Cards{
        //attributs
        private $id_cards;
        private $title_cards;
        private $url_cards;
        //constructeur
        public function __construct(){
        }
        //getter and setter
        public function getIdCard():int{
            return $this->id_cards;
        }
        public function getTitleCard():int{
            return $this->title_cards;
        }
        public function getUrlCard():int{
            return $this->url_cards;
        }
        public function setIdCards($id):void{
            $this->id_cards = $id;
        }
        public function setTitleCards($title):void{
            $this->id_title = $title;
        }
        public function setUrlCards($url):void{
            $this->url_cards = $url;
        }
        public function showAllCards($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM cards');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        public function showAllCardsV2($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM cards');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>