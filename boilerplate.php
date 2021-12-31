<script src="https://kit.fontawesome.com/f3a58b70c8.js" crossorigin="anonymous"></script> <!-- Gives us some nice icons to use, I take absolutely no create for creating them, only for selecting and incorporating them -->
<link rel="icon" href="/~0420bullwinkle/final_project/favicon.ico"> <!-- Set the website's favicon, not strictly necessary, but better safe than sorry -->
<link rel="stylesheet" type="text/css" href="/~0420bullwinkle/final_project/styles/mobile_styles.css"> <!-- Include the file with all of the styling specifically designed for narrower displays (mutually exclusive with the wide styling) -->
<link rel="stylesheet" type="text/css" href="/~0420bullwinkle/final_project/styles/desktop_styles.css"> <!-- #Include the file with all of the styling specifically designed for widder screens (mutually exclusive with the narrow styling) -->
<link rel="stylesheet" type="text/css" href="/~0420bullwinkle/final_project/styles/styles.css"> <!-- Include the file with all of the styling that applies regardless of the device accessing our site -->
<script src="/~0420bullwinkle/final_project/scripts.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Set Viewport for mobile devices, should improve our website's rendering -->

<?php
    function getTerm($word, $source, $number) //Outputs the specified line from the $fp file pointer as a table row, does not include the notes section or the (un)official identifier, retrieves the $number instance of a word (input 1 for the first definition, 2 for the second, etc)
    {
        $fp = fopen($source, "r");
        $currentRow;
        while($number > 0)
        {
            $currentRow = fgetcsv($fp);
            if($currentRow[0] == $word)
            {
                $number -= 1;
            }
            if($currentRow == null)
            {
                $number = 0;
            }
        }

        if($currentRow == null)
        {
            echo("<tr><td>$word could not be found</td><td>NULL</td></tr>");
        }else
        {
            echo("<tr><td lang=\"art-x-tok\">$currentRow[0]</td><td>$currentRow[1]</td></tr>");
        }
        fclose($fp);
    }
?>