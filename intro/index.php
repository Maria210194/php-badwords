<?php 

$nome = $_GET['name'];

$string = '<p>Ciao, mi chiamo ' . $nome . '</p>';

$string2 = str_replace( [$nome] , '***', $string);


?>

<h2>Frase originale: </h2>
<?php 

echo('<pre>');
var_dump($string);
echo('</pre>'); 

?>

<h2>Frase modificata: </h2>
<?php 

echo('<pre>');
var_dump($string2); 
echo('</pre>');

?>



