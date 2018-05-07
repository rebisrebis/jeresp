<?php

$jeri = $_POST['j'];
$djeri = $_POST['d'];

$jeri = str_replace("qu", "&%&", $jeri);
$jeri = str_replace("gue", "//$", $jeri);
$jeri = str_replace("gui", "/$$", $jeri);
$jeri = str_replace("a", "apa", $jeri);
$jeri = str_replace("e", "epe", $jeri);
$jeri = str_replace("i", "ipi", $jeri);
$jeri = str_replace("o", "opo", $jeri);
$jeri = str_replace("u", "upu", $jeri);
$jeri = str_replace("&%&", "qu", $jeri);
$jeri = str_replace("//$", "guepe", $jeri);
$jeri = str_replace("/$$", "guipi", $jeri);
$jeri = str_replace("p0p3t", "<b>ERES UN PIMPÍN Y TE AMO TANTOOOO!!</b>", $jeri);

echo $jeri;

//desjeri

$djeri = str_replace("apa", "·$%", $djeri);
$djeri = str_replace("epe", "&/(", $djeri);
$djeri = str_replace("ipi", "(=?", $djeri);
$djeri = str_replace("opo", "=!·", $djeri);
$djeri = str_replace("upu", "%/º", $djeri);


$djeri = str_replace("apa", "a", $djeri);
$djeri = str_replace("epe", "e", $djeri);
$djeri = str_replace("ipi", "i", $djeri);
$djeri = str_replace("opo", "o", $djeri);
$djeri = str_replace("upu", "u", $djeri);



$djeri = str_replace("·$%", "a", $djeri);
$djeri = str_replace("&/(", "e", $djeri);
$djeri = str_replace("(=?", "i", $djeri);
$djeri = str_replace("=!·", "o", $djeri);
$djeri = str_replace("%/º", "u", $djeri);

echo $djeri;
?>