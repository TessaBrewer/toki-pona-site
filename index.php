<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Toki Pona Home</title>
        <meta charset="utf-8"/>
        <?php include("boilerplate.php");?>
        <link rel="stylesheet" type="text/css" href="/~0420bullwinkle/final_project/styles/home_styles.css">
    </head>
    <body>
        <h1 lang="art-x-tok" class="topGreeting">kama pona!</h1> <!-- the 'art' tag specifies an artistic language, ideally I'd use toki pona's code, but it has yet to be assigned an official code, I use the 'tok' code due to it's tentative status in TP's application: https://iso639-3.sil.org/sites/iso639-3/files/change_requests/2017/2017-035_tok.pdf -->
        <h2 class="bottomGreeting">Welcome!</h2>
        <img src="images/classic_smiley.svg" width=200px height=200px class="smileyGreeting">
        <ul class="homeNavButtons">
            <li><button type="button" id="aboutButton"><h1> About</h1></button></li>
            <li><button type="button" id="dictionaryButton"><h1> Dictionary</h1></button></li>
            <li><button type="button" id="learnButton"><h1> Learn</h1></button></li>
        </ul>
    </body>
</html>