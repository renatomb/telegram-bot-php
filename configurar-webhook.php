<?php

require("loader.php");
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = str_ireplace("configurar-webhook.php", "index.php", $url);
$args = array(
  'url' => $url
);
$r = new HttpRequest("post", API . "setWebhook", $args);
echo $r->getResponse();
?>
