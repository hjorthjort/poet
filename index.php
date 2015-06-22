<?php
/**
 * User: hjorthjort
 * Date: 15-06-18
 * Time: 03:38
 */
?>

<html>
<head></head>
<neck></neck>
<body>
<?php
include_once("src/model/Sentence.php");
$sentence = new Sentence(10, true);
$string = implode(' ', $sentence->getAsArray()).'.';
$string = strtoupper(substr($string, 0, 1)) . substr($string, 1);

echo $string;

?>
</body>
</html>