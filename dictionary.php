<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Toki Pona Dictionary</title>
        <meta charset="utf-8"/>
        <?php include("boilerplate.php");?>
    </head>
    <body>
        <?php include("header.php");?>
        <main>
            <h1 lang="art-x-tok">nimi mute pi toki pona</h1>
            <h2>The Toki Pona Dictionary</h2>
            <p>Please note: No dictionary can be a complete record of a language's vocabulary, there may be words missing from this list which are nevertheless valid toki pona. I have included several words which are not widely considered to be valid, in these cases I have added explanations in the notes section. I've marked all words which appeared in <a href="https://read.amazon.com/kp/embed?asin=B012M1RLXS&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_oTiKEb81TSVEE">Toki Pona: The Language of Good</a> as official, and those which have arisen naturally from the community or by later invention as unofficial.</p>
            <?php
                #PHP which converts a csv file to a html table, the 'table' can easily be modified and updated in any spreadsheet editor (like excel)
                $fp = fopen("dictionary.csv", "r");

                $csvLine = fgetcsv($fp);
                echo("<table><thead><tr><th>$csvLine[0]</th><th>$csvLine[1]</th><th>$csvLine[2]</th><th>$csvLine[3]</th></thead><tbody>");

                while($csvLine = fgetcsv($fp))
                {
                    if($csvLine[2] == "TRUE")
                    {
                        $csvLine[2] = "Official";
                    }else
                    {
                        $csvLine[2] = "Unofficial";
                    }

                    echo("<tr><td lang=\"art-x-tok\">$csvLine[0]</td><td>$csvLine[1]</td><td>$csvLine[2]</td><td>$csvLine[3]</td></tr>");
                }
                echo("</tbody></table>");

                fclose($fp);
            ?>
        </main>
    </body>
</html>