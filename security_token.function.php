<?php
/*
ANTI-CRSF SCRIPT

#Uso    : Formulários, autenticações e verificações de usuários.
#Método : Cria um Token de identificação.
#Autor  : Diego Vellasco | ChameleonBit
#Email  : chameleonbit@gmail.com
#Base   : Funções PHP nativas, escritas e editadas por usuários da comunidade.
###############################################################################
#                     Vamos verificar o TOKEN recebido                        #
#
Vamos usar criptografia, funções nativas do PHP para gerar tokens
e aumentar a segurança da sua aplicação
*/

/*caso não tenha um script específico que inicie a sessão, fazemos isso      */
session_start();

/*Agora vamos gerar um token para consulta na aplicação                      */

$_SESSION["SecurityToken"] = md5(uniqid(rand(),true));

/* Coloque no topo do script e use o arquivo security_token_check.func.php
para checar

Use em <input type="hidden" name="securitytoken" value="{securitytoken}" />
ou qualquer outro meio de checagem/envio que prefirir                        */
