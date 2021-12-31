<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Lesson 1: The Basics</title>
        <meta charset="utf-8"/>
        <?php include("../boilerplate.php");?>
    </head>
    <body>
        <?php include("../header.php");?>
        <main>
            <h1>Lesson One: The Basics</h1>
            <div id="vocab">
                <h2>Vocabulary</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Term</th>
                            <th>Definition</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            getTerm("toki", "../dictionary.csv", 1);
                            getTerm("pona", "../dictionary.csv", 1);
                            getTerm("ike", "../dictionary.csv", 1);
                            getTerm("mi", "../dictionary.csv", 1);
                            getTerm("sina", "../dictionary.csv", 1);
                            getTerm("jo", "../dictionary.csv", 1);
                            getTerm("ijo", "../dictionary.csv", 1);
                            getTerm("ilo", "../dictionary.csv", 1);
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="lesson">
                <h2>Pronunciation</h2>
                <p>Consonants and vowels are always pronounced the same, and stress always falls on the first syllable of a word. Pronounciation is as follows:</p>
                <table>
                    <thead>
                        <tr><th>Letter</th><th>Example</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>J</td><td><b>Y</b>ellow</td></tr>
                        <tr><td>K</td><td><b>K</b>id</td></tr>
                        <tr><td>L</td><td><b>L</b>ick</td></tr>
                        <tr><td>M</td><td><b>M</b>om</td></tr>
                        <tr><td>N</td><td><b>N</b>o</td></tr>
                        <tr><td>P</td><td><b>P</b>ut</td></tr>
                        <tr><td>S</td><td><b>S</b>it</td></tr>
                        <tr><td>T</td><td><b>T</b>wo</td></tr>
                        <tr><td>W</td><td><b>W</b>et</td></tr>
                        <tr><td>A</td><td>F<b>a</b>ther</td></tr>
                        <tr><td>E</td><td>W<b>e</b>t</td></tr>
                        <tr><td>I</td><td>S<b>ee</b></td></tr>
                        <tr><td>O</td><td>Th<b>ou</b>ght</td></tr>
                        <tr><td>U</td><td>B<b>oo</b>t</td></tr>
                    </tbody>
                </table>
                <h2>Capitalization</h2>
                <p>Words in toki pona are always lowercase unless they're a proper noun, which we will cover in Lesson Seven: Tokiponization</p>
            </div>
            <span class="bottomLinks">
                <a href="learn_home.php" style="text-align: left">Previous Lesson</a>
                <a href="learn_li_e.php" style="text-align: right">Next Lesson</a>
            </span>
        </main>
    </body>
</html>