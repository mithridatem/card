//url api
//url qui récupère la liste des cards (json)
const url = './api.php?allCard';
//url qui récupére le json d'erreur
const url2 = './api.php';

//zone pour afficher le contenu de l'api
let zone = document.querySelector('#container_card');

//fonction récupération et affichage du json dans la page
async function showAllCardApi(){
    //json liste des cards
    const data =  await fetch(url);
    const json =  await data.json();
    //json d'erreur
    const data2 =  await fetch(url2);
    const json2 =  await data2.json();
    //test si le Json n'est pas vide
    if(json != ""){
        //version foreach
        json.forEach(obj =>{
            zone.innerHTML += "<div class='cards' id="+obj.id_cards+"><h4>"+obj.title_cards
            +"</h4><img src="+obj.url_cards+"></img></div>"; 
        });
    }
    //test si le Json est vide
    else{
        //affichage du Json d'erreur dans zone
        zone.innerHTML += "<p>erreur : " + json2.error + "</p>"; 
    }
}
//appel de la fonction
showAllCardApi();