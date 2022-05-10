<?php
    include './utils/connectBdd.php';
    include './model/model_cards.php';
    include './view/view_show_all_cards.php';

    //instance d'un objet Cards
    $card = new Cards();
    //tableau de cartes (stocké un tableau d'objet)
    $tab = $card->showAllCards($bdd);

    //boucle pour afficher les cards version (fetch_obj)
    foreach($tab as $value){
        echo '<div class="cards"><h4>'.$value->title_cards.'
        </h4><img src="'.$value->url_cards.'"></img></div>';
    }
    //tableau de cartes (stocké un tableau associatif)
    /* $tab2 = $card->showAllCardsV2($bdd);

    //boucle pour afficher les cards (version fetch_assoc)
    foreach($tab as $value){
        echo '<div class="cards"><h4>'.$value['title_cards'].'
        </h4><img src="'.$value['url_cards'].'"></img></div>';
    } */
    echo '</div>';
?>