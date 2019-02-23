
create table if not exists tb_enderecos (
    id int primary key auto_increment,
    cep varchar(15) not null,
    logradouro varchar(150) not null,
    bairro varchar(150) not null,
    cidade varchar(150) not null,
    estado varchar(150) not null,
    complemento varchar(250) not null
);