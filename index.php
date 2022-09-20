<?php

$t = $_GET['word'];
$text = 'Lorem ipsum merda sit amet consectetur, adipisicing elit. Recusandae sit eligendi ullam optio deserunt eum harum merda quam ipsam provident velit tempora vitae veritatis, nostrum illo amet merda dicta unde?';
$length = strlen($text);

$newString = str_replace($t, '****', $text);
$wordCount = str_word_count($newString);


?>
<!-- <pre>

</pre> -->

<h1><?= $text ?></h1>
<p>Il testo ha <?= $length ?> caratteri.</p>
<h1><?= $newString ?></h1>
<p>Il testo ha<?= $wordCount ?> parole</p>
