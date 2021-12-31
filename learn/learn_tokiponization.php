<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Lesson 7: Tokiponization</title>
        <meta charset="utf-8"/>
        <?php include("../boilerplate.php");?>
    </head>
    <body>
        <?php include("../header.php");?>
        <main>
            <h1>Lesson Seven: Tokiponization</h1>
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
                            getTerm("kalama", "../dictionary.csv", 1);
                            getTerm("musi", "../dictionary.csv", 1);
                            getTerm("ma", "../dictionary.csv", 1);
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="lesson">
                <h2>Importing Words</h2>
                <p>If somebody wants to use a word from another language in toki pona it must first be tokiponized before it can then be used. Loan words are always capitalized and always used as an adjective, so "America" in toki pona would be <span lang="art-x-tok">"ma Amelika".</span></p>
                <h3><a href="http://tokipona.net/tp/janpije/tpize.php">Tokiponization Rules</a></h3>
            </div>
            <span class="bottomLinks">
                <a href="learn_connectors.php" style="text-align: left">Previous Lesson</a>
                <a href="learn_home.php" style="text-align: right">Next Lesson</a>
            </span>
        </main>
    </body>
</html>