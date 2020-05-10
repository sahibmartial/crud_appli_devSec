
<?php
// Création d'un flux
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Accès à un fichier HTTP avec les entêtes HTTP indiqués ci-dessus
$file = file_get_contents('http://ec2-54-86-83-164.compute-1.amazonaws.com:8181/', false, $context);
?>

