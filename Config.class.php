<!-- Informações basicas do site  -->
 
<?php

        Class Config {

    const SITE_URL = "http://localhost";
    const SITE_PASTA = "fenix"; //local da pasta
    const SITE_NOME = "FÊNIX ESSENCE CLOTHING - PHP 7 e Mysqli";
    const SITE_EMAIL_ADM = "fenixtshirtcustom@gmail.com"; //email do site


     // Inoformações do banco de dados 
    const BD_HOST = "localhost",

          BD_USER = "root",

          BD_SENHA = "",

          BD_BANCO = "LojaFenix";
        
          
    //Informações para mailler
    const EMAIL_HOST = "stmp.gmail.com";  //servidor do gmail o "STMP"pode ser encontrado nas config de imap no gmail
    const EMAIL_USER = "fenixtshirtcustom@gmail.com";  
    const EMAIL_NOME = "Contato Loja fenix";  
    const EMAIL_SENHA = "LojadaFenix";  
    const EMAIL_PORTA = 587;  
    const EMAIL_SMTPAUTH = true; //Tipo de segurança do email
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "fenixtshirtcustom@gmail.com";

}
?>