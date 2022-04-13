# criar 
mysql -u root
#criar base
create database trabalhofinal;
# chamar a base 
use trabalhofinal

#criar tabela
create table usuarios(
    idusuario int primary key auto_increment,
    nome varchar(50),
    email varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')

);

create table produto(
    idproduto int auto_increment primary key,
    nome varchar(20),
    tipo varchar(20),
    pais varchar(20),
    nota varchar(20),
    comentario varchar(40)
);

desc produto;

#inserir dado na tabela
insert into usuarios values(null,'adm','admin',md5('12751'), 'adm');
insert into usuarios values(null,'user','ju',md5('12751'), 'user');
insert into usuarios values(null,'user','lua',md5('12751'), 'user');

insert into produto values(null,'Heineken','Long neck','Holanda','5','Muito boa');
insert into produto values(null,'Praya','Witbier','Brasil','5', 'Muito boa');
#mostrar tabela
select * from usuarios;

select * from produto;