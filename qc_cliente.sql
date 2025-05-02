CREATE TABLE qc_clientes
(cli_nome VARCHAR(80) NULL,
 cli_sobrenome VARCHAR(80) NULL,
 cli_endereco VARCHAR(100) NULL,
 cli_numero VARCHAR(20) NULL,
 cli_bairro VARCHAR(80) NULL
 cli_cidade VARCHAR(150) NULL,
 cli_uf VARCHAR(2) NULL,
 cli_cep VARCHAR(10) NULL,
 cli_cpf VARCHAR(12) NULL,
 cli_rg VARCHAR(20) NULL,
 cli_ddd INT(2) NULL,
 cli_fone VARCHAR(10) NULL,
 cli_celular VARCHAR(10) NULL,
 cli_email VARCHAR(60) NULL,
 cli_pass VARCHAR(40) NULL,
 cli_data_nasc DATE NULL,
 cli_data_cad DATE NULL,
 cli_hora_cad TIME NULL
 CONSTRAINT qc_clientes_cli_nome_PK
     PRIMARY KEY(cli_nome));

     