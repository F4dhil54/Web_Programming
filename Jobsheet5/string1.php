<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias 
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum 
quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen(string: $loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count(string: $loremIpsum) . "<br>";
echo "<p>" . strtoupper(string: $loremIpsum) . "</p>";
echo "<p>" . strtolower(string: $loremIpsum) . "</p>";
?>
