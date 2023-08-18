<?php

require_once('loader.php');

$content = file_get_contents('php://input');
$update = json_decode($content, true);

if (isset($update) && ($update["message"])) {
   $chatID = $update["message"]["chat"]["id"];
   $userID = $update["message"]["from"]["id"];
   $msg = $update["message"]["text"];
   $username = $update["message"]["chat"]["username"];
   $name = $update["message"]["chat"]["first_name"];
   if (substr($msg,0,1) == "/") {
      // Comandos iniciados por /
      $msg=trim($msg);
      $msg=strtolower(substr($msg,1,strlen($msg)-1));
      $p_espaco=strpos($msg," ");
      if ($p_espaco === false) {
         $cmd=$msg;
         $param="";
      }
      else {
         $cmd=substr($msg,0,$p_espaco);
         $param=substr($msg,$p_espaco+1,strlen($msg)-$p_espaco);
      }
      if (file_exists("cmd/".$cmd.".php")) {
         include("cmd/".$cmd.".php");
      }
      else {
         sm($chatID, "Comando $cmd não encontrado.");
      }
   }
}


?>