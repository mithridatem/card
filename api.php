<?php
    //autorisation JSON
    header("Access-Control-Allow-Origin: *");
    
    //imports
    include './utils/connectBdd.php';
    include './model/model_cards.php';

    //instance d'un objet Cards
    $card = new Cards();

    //tableau de cartes (stocké un tableau d'objet)
    $tab = $card->showAllCards($bdd);

    //Test si le paramètre GET allCard existe 
    if(isset($_GET['allCard'])){
        //retourne une liste de card en JSON
        echo json_encode($tab);
    }
    //test si le paramètre GET allCard n'existe pas
    else{
        //retourne un json d'erreur
        print_r('{"error" : "aucune card"}');
    }
?>