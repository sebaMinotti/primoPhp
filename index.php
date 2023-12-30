<?php
  
  $paragrafo='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, harum amet illum iusto enim cum repellendus rem nihil illo assumenda iste! Soluta optio quia aliquam alias ut eveniet, molestiae rem?';
  $parola = $_GET['censura'];
  echo $paragrafo;
  echo "<h3>"."il mio paragrafo è lungo".strlen($paragrafo)."caratteri"."</h3>";

$newParagrafo = str_replace($parola,"***",$paragrafo);

echo $newParagrafo;
echo "<h3>"."il nuovo paragrafo censurato è lungo".strlen($newParagrafo)."caratteri"."</h3>";
?>