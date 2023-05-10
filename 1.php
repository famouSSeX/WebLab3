<?php
$str = "'ahb acb aeb aeeb adcb axeb";
$regs = "/a..b/";
$matc = array();
preg_match_all($regs, $str, $match);

foreach($match[0] as $word){
    echo $word, " ";}
?>

<?php
$str = "a1b2c3";
$regs = "/[0-9]{1,}/";

function power($matches){
    return ($matches[0] ** 3);}

echo preg_replace_callback($regexp, "power", $string);
?>

