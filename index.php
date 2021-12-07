<!DOCTYPE html>
<html>
<head>
	<title>Morse Translate</title>
</head>
<body>
    <!-- 2 input fields -->
<form action="#" method="Post">
    <input type="text" name="message">
    <input type="text" name="morse">
    <button type="btn">Send</button>
</form>
</body>
</html>

<?php

// abc (keys) to morse (values)

$morseArray = [
    'a' => '.-',
    'b' => '-...',
    'c' => '-.-.',
    'd' => '-..',
    'e' => '.',
    'f' => '..-.',
    'g' => '--.',
    'h' => '....',
    'i' => '..',
    'j' => '.---',
    'k' => '-.-',
    'l' => '.-..',
    'm' => '--',
    'n' => '-.',
    'o' => '---',
    'p' => '.--.',
    'q' => '--.-',
    'r' => '.-.',
    's' => '...',
    't' => '-',
    'u' => '..-',
    'v' => '...-',
    'w' => '.--',
    'x' => '-..-',
    'y' => '-.--',
    'z' => '--..',
    ' ' => '|',
    '|' => ""
];

// checking for input with POST 

if($_POST){

    // first field

    if(isset($_POST["morse"])){

        // setting the string in a variable

        $message = $_POST["message"];

        // making the string into an array

        $letters = str_split(strtolower($message));

            // foreach value in the array loop as variable

            foreach ($letters as $checkThisLetter) {

                // foreach alphabet value to morse code

                foreach ($morseArray as $key => $value) {

                    // if it is a match from the input character given in the first loop

                    if ($key == $checkThisLetter) {

                        // print the matching value

                     echo "$value!";
        }
    }
    }
}
    // second field

    if(isset($_POST["morse"])){

        // saving the input in a variable

        $morse = $_POST["morse"];

        // cutting the variable into an array when ! is met in the variable

        $bits = explode("!", $morse);

            // foreach piece of morse that is equal to a alphabetic character
        
           foreach ($bits as $checkMorse) {

                // flipping the array and checking key with associated value
                  
                foreach (array_flip($morseArray) as $key => $value) {

                    // if the key matches the character saved in the variable given earlier in the first foreach 
                    
                    if ($key == $checkMorse) {

                        // print the translation and remove the ! characters
                        
                        echo trim($value, "!",);         
                 }
                 }
             }
          }
        }
?>
