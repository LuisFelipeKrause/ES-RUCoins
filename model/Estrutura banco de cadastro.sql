CREATE SCHEMA `loginRU` ;

create table legendas_estado(
legendas_estado_id integer not null auto_increment primary key,
estado varchar(45)
);

insert into legendas_estado(estado)
values
("inativo"),
("ativo");

create table legendas_permissao(
legendas_permissao_id integer not null auto_increment primary key,
permissao varchar(45)
);

insert into legendas_permissao(permissao)
values
("Gerente de TI"),
("Administrador"),
("Atendente"),
("Cobrador"),
("Usuario");

create table usuarios(
usuario_id integer not null auto_increment primary key,
nome varchar(45),
sobrenome varchar(45),
cpf varchar(45) not null,
email varchar(45) not null,
senha varchar(40) not null,
data_de_nascimento date,
permissao integer,
estado_conta integer,
data_criacao date,
data_atualizacao date
);

alter table usuarios add foreign key (permissao) references legendas_permissao(legendas_permissao_id);
alter table usuarios add foreign key (estado_conta) references legendas_estado(legendas_estado_id);

insert into usuarios(nome, sobrenome, cpf, email, senha, data_de_nascimento, data_criacao, data_atualizacao)
values
("Pedro", "Loyola", "12345678912", "[pedrinho@uol.com](mailto:pedrinho@uol.com)", "senha", now(), now(), now()),
("Maiara", "Mineira", "12909678912", "[maia@uol.com](mailto:maia@uol.com)", "famasnas", now(), now(), now()),
("Patricia", "Lulia", "12345634312", "[pat@uol.com](mailto:pat@uol.com)", "bartelonde", now(), now(), now()),
("Richard", "Oliver", "12232123912", "[nho@uol.com](mailto:nho@uol.com)", "cogumelo louco", now(), now(), now()),
("Peter", "Parker", "987654321123", "[peter@uol.com](mailto:peter@uol.com)", "mirabolante", now(), now(), now())
;

create table saldo(
saldo_id integer not null auto_increment primary key,
usuario_id integer,
saldo double,
data_criacao date,
data_atualizacao date
);
alter table saldo add foreign key (usuario_id) references usuarios(usuario_id);

insert into saldo (usuario_id,saldo,data_criacao,data_atualizacao)
values
(1, 350.50, now(), now()),
(2, 0, now(), now()),
(3, 50.50, now(), now()),
(4, 30, now(), now()),
(5, 5, now(), now());