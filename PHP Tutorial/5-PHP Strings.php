<?php

//The PHP strlen() function returns the length of a string.
echo strlen("Hello world!"); // outputs 12


//The PHP str_word_count() function counts the number of words in a string.
echo "<br>";
echo str_word_count("osama osama");


//The PHP strrev() function reverses a string.
echo "<br>";
echo strrev("osama");

//The PHP strpos() function searches for a specific text within a string
echo "<br>";
echo strpos("Hello world!", "world");

//The PHP str_replace() function replaces some characters with some other characters in a string.
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>