CREATE TABLE qc_pedidos
(ped_id INT(11) NULL,
 ped_data DATE NULL,
 ped_hora TIME NULL,
 ped_cliente INT(11) NULL,
 ped_cod VARCHAR(100) NULL,
 ped_ref VARCHAR(40) NULL,
 ped_pag_status VARCHAR(20) NULL,
 ped_pag_forma VARCHAR(20) NULL,
 ped_pag_tipo VARCHAR(20) NULL,
 ped_pag_codigo VARCHAR(220) NULL,
 ped_frete_valor DOUBLE(9, 2) NULL,
 