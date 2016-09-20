<?php
/*
ANTI-CRSF SCRIPT CHECK

#Uso    : Formulários, autenticações e verificações de usuários.
#Método : Verifica o Token de identificação.
#Autor  : Diego Vellasco | ChameleonBit
#Email  : chameleonbit@gmail.com
#Base   : Funções PHP nativas, escritas e editadas por usuários da comunidade.
###############################################################################
#                      Vamos verificar o TOKEN recebido                       #
#
Vamos usar criptografia, funções nativas do PHP para gerar tokens
e aumentar a segurança da sua aplicação
*/
/*LEMBRE SE SEMPRE DE TRATAR OS DADOS RECEBIDOS | GET,POST,ETC...            */
/*caso não tenha um script específico que inicie a sessão, fazemos isso      */
session_start();

/*Agora vamos verificar o token recebido                                     */

/*Caso o POST securitytoken for true (verdadeiro)                            */
if (isset($_POST["securitytoken"])) {
  /*Se mesmo sendo verdadeiro ele não for vazio na sessão preenchemos
  $Token["SecurityToken"] com os dados da sessão para comparação             */
$Token["SecurityToken"] = empty($_SESSION["SecurityToken"]) ? NULL : $_SESSION["SecurityToken"];

  /* Agora comparamos se a sessão é igual ao POST enviado */
  if ($_POST["securitytoken"] === $Token["SecurityToken"]) {
      /* Caso esteja correto */
    echo "Validado, o token confere.";
  }else {
      /* Caso os dados não sejam compatíveis */
      echo "Requisição inválida, os tokens não batem.";
  }


}else {
  /* Caso o POST esteja inválido, false, vazio. */
  echo "Dados POST não recebidos.";
}
