drop database if exists lojaIzaCare;
create database lojaIzaCare;
use lojaIzaCare;

create table tipo_usuario(
	id int not null auto_increment,
	nome varchar(40) not null,
	primary key(id)
);
INSERT INTO tipo_usuario values
(1 , 'admin'),
(2 , 'client');

create table usuario(
	id int not null auto_increment,
   	nome varchar(50) not null,
	email varchar(50) not null,
	senha varchar(40) not null,
	tipo_usuario int,
	primary key(id),
	foreign key(tipo_usuario) references tipo_usuario(id)
);
INSERT INTO usuario values (null,'Iza','iza@iza','112233',1);

create table itens(
	id int not null auto_increment,
	nome varchar(50) not null,
	descricao varchar(50) not null,
	quantidade int not null,
	caminho  varchar(255),
	preco_custo float not null,
	preco_venda float not null,
	data_cadastro varchar(10),
	primary key(id)
);
create table carrinho(
	id int not null auto_increment,
	nome varchar(40) not null,
	itens_carrinho int,
	primary key(id),
	foreign key(itens_carrinho) references itens(id)
);
create table pedidos(
 	id int not null auto_increment,
	data_compra date, -- time now
	data_aprovacao date, -- time now
	aprovado bool, -- true or false
	valor_total float, -- post
   	usuario_id int, -- session login
	primary key(id),
	foreign key(usuario_id) references usuario(id)
);
create table pedidos_item(
	id int not null auto_increment, 
	item_id int, -- in session pedido
	quantidade int, -- in session pedido
	pedido_id int, -- result of insert
	primary key(id),
	foreign key(item_id) references itens(id),
	foreign key(pedido_id) references pedidos(id)
);

insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("hidratante", "colageno", 50, "img/hidratante/colageno.webp", 50, 89.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("hidratante", "vichy", 50, "img/hidratante/hidratante.webp", 80, 114.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("hidratante", "cerave", 50, "img/hidratante/hidratante2.webp", 30, 59.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("hidratante", "cicatrigel", 50, "img/hidratante/hidratante3.jpeg", 40, 69.90);

insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("serum", "serum", 50, "img/principia/principia.jpeg", 20, 39.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("serum", "serum", 50, "img/principia/principia2.jpeg", 20, 39.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("serum", "serum", 50, "img/principia/principia3.jpg", 20, 39.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("serum", "serum", 50, "img/principia/principia4.webp", 20, 39.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("serum", "serum", 50, "img/principia/principia5.jpeg", 20, 39.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("serum", "serum", 50, "img/serum/serum.jpeg", 30, 49.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("serum", "serum", 50, "img/serum/serum2.webp", 30, 49.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("serum", "serum", 50, "img/serum/serum3.webp", 30, 49.90);

insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("protetorSolar", "vichy", 50, "img/protetorSolar/protetorSolar.jpeg", 40, 79.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("protetorSolar", "nivea", 50, "img/protetorSolar/protetorSolar2.jpeg", 50, 89.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("protetorSolar", "solar", 50, "img/protetorSolar/protetorSolar3.webp", 60, 99.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("protetorSolar", "sundown", 50, "img/protetorSolar/protetorSolar4.png", 30, 69.90);

insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("sabonete", "ceraVe", 50, "img/sabonete/sabonete.jpeg", 10, 15.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("sabonete", "protex", 50, "img/sabonete/sabonete2.webp", 15, 20.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("sabonete", "nivea", 50, "img/sabonete/sabonete3.webp", 20, 25.90);
insert into itens(nome,descricao, quantidade, caminho, preco_custo, preco_venda) values("sabonete", "dove", 50, "img/sabonete/sabonete4.webp", 5, 10.90);
