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
    include_once("src/model/Word.php");
$word = new Word('Hello');
echo $word->getWord();

$word->condition('World');
echo $word->getTotalConditionings();

?>
</body>
</html>