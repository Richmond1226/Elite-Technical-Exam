<?php
$sentence = "True Friends are me and you"; # <----- Change nyo po ito into kahit anong sentence

$words = explode(" ", $sentence);

$shortest = $words[0];
$shortestLength = strlen($shortest);

foreach ($words as $word) {

    if (strlen($word) < $shortestLength && strlen($word) > 0) {
        $shortest = $word;
        $shortestLength = strlen($word);
    }
}
echo  "Current Sentence: '".$sentence."'";
echo '<br>';
echo '<br>';
echo "\"$shortest\" is the lowest word in the sentence.";
echo '<br>';
echo '<br>';
echo 'Open nyo lang po yung PHP "shortest_word.php" tapos palitan nyo po nang $sentence para ma test nyo po nang ibang output';
?>
