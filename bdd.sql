create database card;
use card;
create table cards
(
	id_cards int primary key auto_increment not null,
    title_cards varchar(50),
    url_cards varchar(100)
)engine=InnoDB;


insert into cards(title_cards, url_cards) VALUES("Titre 7", "./asset/image/image1.png"),
("Titre 8", "./asset/image/image2.png"),
("Titre 9", "./asset/image/image3.png")
;

