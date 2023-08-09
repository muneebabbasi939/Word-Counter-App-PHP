<?php
if(isset($_POST['data'])){
    $values = $_POST['data'];
    $charCount = $_POST['charCount'];
    $sentenceCount = $_POST['sentenceCount'];
    $paragraphCount = $_POST['paragraphCount'];

    // Count words (assuming words are separated by spaces)
    $wordCount = str_word_count($values);

    echo "<p>The Characters are: " . $charCount . "</p>";
    echo "<p>The Words are: " . $wordCount . "</p>";
    echo "<p>The Sentences are: " . $sentenceCount . "</p>";
    echo "<p>The Paragraphs are: " . $paragraphCount . "</p>";
}
?>
