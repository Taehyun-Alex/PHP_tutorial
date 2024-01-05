<?php
$sentence = 'this is a sentence and I want you to replace the text
that i am about to type. Please be mindful';
$word = 'mindful';
$replace_text = 'careful';

$position_index = strpos($sentence, $word);
echo $position_index;

$new_sentence = substr_replace($sentence, $replace_text, $position_index, strlen($replace_text));

//echo $new_sentence;
?>