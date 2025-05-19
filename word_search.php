<?php
$words = ["I", "TWO", "FORTY", "THREE", "JEN", "TWO", "tWo", "Two"];
$target = "TWO";
$indexes = [];

$readable = implode(", ", $words);


$words_2 = ["WE", "We", "Tesa", "wE", "THREE", "ONE", "TEST", "WE"];
$target_2 = "WE";
$indexes_2 = [];

$readable_2 = implode(", ", $words_2);



foreach ($words as $index => $word) {
    if ($word === $target) {
        $indexes[] = $index;
    }
}


foreach ($words_2 as $index_2 => $word_2) {
    if ($word_2 === $target_2) {
        $indexes_2[] = $index_2;
    }
}



echo 'First Example:';
echo '<br>';
echo $readable;
echo '<br>';
echo '<br>';
echo 'Answer: ';
echo "[" . implode(",", $indexes) . "]";


echo '<br>';
echo '<br>';


echo 'Second Example:';
echo '<br>';
echo $readable_2;
echo '<br>';
echo '<br>';
echo 'Answer: ';
echo "[" . implode(",", $indexes_2) . "]";







?>
