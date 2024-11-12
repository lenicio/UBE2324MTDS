drop database if exists zorp;

create database if not exists zorp;

use zorp;

create table noticias (
	id int auto_increment,
	titulo varchar(200) not null unique,
	descricao text not null,
	data_criacao timestamp default current_timestamp,
	primary key (id)
);

INSERT INTO noticias (titulo, descricao) VALUES
("Rato encontra uma fatia de pizza e se aposenta!",
"'Não trabalho mais, agora sou um rato investidor em queijo e massa fina', declara ele."),
("Nova pesquisa revela que 90% dos gatos não ligam para o seu 'miau miau'",
"Especialistas afirmam que, na verdade, eles estão apenas julgando a sua imitação."),
("Estudo comprova: 80% das dietas falham ao ver foto de uma coxinha",
"'A coxinha tem um poder irresistível', admite nutricionista."),
("Vaso de planta revela que está cansado de ser apenas 'decoração'",
"'Quero ser reconhecido pelo meu trabalho árduo de purificar o ar!' declara o filodendro."),
("Inventor cria despertador que serve café na cama",
"Mas ainda ninguém descobriu como fazer o café chegar à cama sem cair."),
("Jovem acorda cedo para correr e descobre que prefere dormir",
"'Foi um erro, voltarei para a minha rotina de maratonas… de séries', diz o jovem atleta de sofá."),
("Homem diz que vai 'só dar uma olhadinha' no mercado e sai com o carrinho cheio",
"Segundo ele, foi 'coisa de momento', mas o bolso dele não acha o mesmo."),
("Computador diz que 'vai reiniciar para atualizações' e desaparece por horas",
"Especialistas suspeitam que ele só queria uma pausa para refletir sobre a vida digital.");

select * from noticias;
