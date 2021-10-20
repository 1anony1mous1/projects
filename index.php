<?php
$page = $_GET["page"];

if(!isset($page)) {
  header("Location: /?pagina=home");
} else {
  $page = $_GET["page"];
}

switch($page) {
  case "home":
    echo 'home';
  break;
  case "contact":
    echo 'contact';
  break;
}
?>
