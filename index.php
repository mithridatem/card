<?php
    //version sans api

    //imports
    include './utils/connectBdd.php';
    include './model/model_cards.php';
    include './view/view_show_all_cards.php';

    //instance d'un objet Cards
    $card = new Cards();
    //tableau de cartes (stocké un tableau d'objet)
    $tab = $card->showAllCards($bdd);
    //test si la liste de cards est différente de vide
    if($tab != ""){
        //boucle pour afficher les cards version (fetch_obj)
        foreach($tab as $value){
            echo '<div class="cards" id="'.$value->id_cards.'"><h4>'.$value->title_cards.'
            </h4><img src="'.$value->url_cards.'"></img></div>';
        }
    }
    //sinon affiche message d'erreur
    else{
        echo '<div class="cards">La liste de card est vide</div>';
    }
    echo '</div>';
?>