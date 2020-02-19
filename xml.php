<?php
$xml = simplexml_load_file("http://servicos.cptec.inpe.br/XML/cidade/241/dia/0/ondas.xml");

//print_r($xml);

echo "Cidade: ".$xml->nome."<br/><br/>";
echo "Altura das Ondas: <br/>";
echo "Manhã: ".$xml->manha->altura."<br/>";
echo "Tarde: ".$xml->tarde->altura."<br/>";
echo "Noite: ".$xml->noite->altura."<br/>";
?>