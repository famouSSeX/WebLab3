<?php
if (!empty($_REQUEST['textar'])) {
    $text = $_REQUEST['textar'];
    $arr = array();
    $arr = str_word_count($text,  $format = 1);

    echo 'Кол-во знаков ', strlen($text), ' Кол-во слов ', count($arr);}
?>

<form action="" method="GET">

<label for = "textar">Textarea</label>
    <textarea rows = "3" name = "textar"></textarea>
    <input type = "submit" value = "Save">

</form>

