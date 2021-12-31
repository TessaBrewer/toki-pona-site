<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Lesson 6: Connectors</title>
        <meta charset="utf-8"/>
        <?php include("boilerplate.php");?>
    </head>
    <body>
        <?php include("header.php");?>
        <main>
            <h1>Lesson Six: Connectors</h1>
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
                            getTerm("tenpo", "../dictionary.csv", 1);
                            getTerm("la", "../dictionary.csv", 1);
                            getTerm("kama", "../dictionary.csv", 1);
                            getTerm("tawa", "../dictionary.csv", 1);
                            getTerm("kepeken", "../dictionary.csv", 1);
                            getTerm("pali", "../dictionary.csv", 1);
                            getTerm("nasin", "../dictionary.csv", 1);
                            getTerm("pini", "../dictionary.csv", 1);
                            getTerm("lete", "../dictionary.csv", 1);
                            getTerm("suwi", "../dictionary.csv", 1);
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="lesson">
                <h2>Connectors</h2>
                <p>We've already covered <span lang="art-x-tok">"li & e"</span> but here we're going to introduce the remainder of toki pona's connectors. All connectors go at the end of a sentence, and apply to all words after it up to the next connector in the sentence. The only exception to this rule is <span lang="art-x-tok">"la"</span>, which goes at the beginning of the sentence, with all terms before <span lang="art-x-tok">"la"</span> falling under the connector, and all terms between <span lang="art-x-tok">"la & li"</span> acting as the subject.</p>
                <h3 lang="art-x-tok">la</h3>
                <p><span lang="art-x-tok">"la"</span> acts as toki pona's context connector, ie the terms under it's control exist to provide context. For example, the most common way to make a sentence past tense would be to place <span lang="art-x-tok">"tenpo pini"</span>, so if somebody wanted to say that they ate something in the past they might say <span lang="art-x-tok">"tenpo pini la mi moku"</span></p>
                <h3 lang="art-x-tok">tawa</h3>
                <p><span lang="art-x-tok">"tawa"</span> is used to mean motion, to go to, or 'to'. When used to mean 'to go to' or 'to' the sentence omits the word <span lang="art-x-tok">"e"</span> and the words under <span lang="art-x-tok">"tawa"</span> take on the role of the direct object. So if somebody wanted to say "He's going to my house" they could say <span lang="art-x-tok">"ona li tawa tomo mi."</span></p>
                <p>It's worth noting here that the agreed upon way to say that you like or dislike something is to say that it is good or bad to you, eg <span lang="art-x-tok">"ona li pona tawa mi."</span> and <span lang="art-x-tok">"ona li ike tawa mi.</span>.</p>
                <h3 lang="art-x-tok">kepeken</h3>
                <p><span lang="art-x-tok">"kepeken"</span> is used to mark the method or tool used by the subject to preform the action in the sentence. A common use is to ask how somebody did something by saying something like <span lang="art-x-tok">"sina li pali e ona kepeken seme nasin?"</span>, literally: "You made this using what method?"</p>
            </div>
            <div id="quiz">
                <h2>Quiz Yourself</h2>
                <p id="quizResults"></p>
                <form>
                    <script>setAnswers(["soon", "iloMoku", "mokuSuwi", "mokuLete"]);</script>
                    <p>If somebody says <span lang="art-x-tok">"tenpo kama lili la mi li tawa tomo mi."</span> when are they going home?</p>
                        <input type="radio" id="questionOneAnswerOne" name="q1" value="later">
                        <label for="questionOneAnswerOne">later</label>
                        <input type="radio" id="questionOneAnswerTwo" name="q1" value="soon">
                        <label for="questionOneAnswerTwo">soon</label>
                        <input type="radio" id="questionOneAnswerThree" name="q1" value="tomorrow">
                        <label for="questionOneAnswerThree">tomorrow</label>
                        <input type="radio" id="questionOneAnswerFour" name="q1" value="tonight">
                        <label for="questionOneAnswerFour">tonight</label>
                    <p>If somebody says <span lang="art-x-tok">"mi li pali e moku kepeken ilo moku."</span> what are they using?</p>
                        <input type="radio" id="questionTwoAnswerOne" name="q2" value="moku">
                        <label for="questionTwoAnswerOne" lang="art-x-tok">moku</label>
                        <input type="radio" id="questionTwoAnswerTwo" name="q2" value="iloMoku">
                        <label for="questionTwoAnswerTwo" lang="art-x-tok">ilo moku</label>
                        <input type="radio" id="questionTwoAnswerThree" name="q2" value="pali">
                        <label for="questionTwoAnswerThree" lang="art-x-tok">pali</label>
                        <input type="radio" id="questionTwoAnswerFour" name="q2" value="kepeken">
                        <label for="questionTwoAnswerFour" lang="art-x-tok">kepeken</label>
                        <input type="radio" id="questionTwoAnswerFive" name="q2" value="ilo">
                        <label for="questionTwoAnswerFive" lang="art-x-tok">ilo</label>
                    <p>If somebody says <span lang="art-x-tok">"moku suwi li pona tawa mi. moku lete li pona tawa mi."</span> what do they like?</p>
                        <input type="radio" id="questionThreeAnswerOne" name="q3" value="mokuLete">
                        <label for="questionThreeAnswerOne" lang="art-x-tok">moku lete</label>
                        <input type="radio" id="questionThreeAnswerTwo" name="q3" value="lete">
                        <label for="questionThreeAnswerTwo" lang="art-x-tok">lete</label>
                        <input type="radio" id="questionThreeAnswerThree" name="q3" value="suwi">
                        <label for="questionThreeAnswerThree" lang="art-x-tok">suwi</label>
                        <input type="radio" id="questionThreeAnswerFour" name="q3" value="mokuSwui">
                        <label for="questionThreeAnswerFour" lang="art-x-tok">moku suwi</label>
                    <p>If somebody says <span lang="art-x-tok">"moku suwi li pona tawa mi. moku lete li pona tawa mi."</span> what do they dislike?</p>
                        <input type="radio" id="questionThreeAnswerOne" name="q3" value="mokuLete">
                        <label for="questionThreeAnswerOne" lang="art-x-tok">moku lete</label>
                        <input type="radio" id="questionThreeAnswerTwo" name="q3" value="lete">
                        <label for="questionThreeAnswerTwo" lang="art-x-tok">lete</label>
                        <input type="radio" id="questionThreeAnswerThree" name="q3" value="suwi">
                        <label for="questionThreeAnswerThree" lang="art-x-tok">suwi</label>
                        <input type="radio" id="questionThreeAnswerFour" name="q3" value="mokuSwui">
                        <label for="questionThreeAnswerFour" lang="art-x-tok">moku suwi</label>
                        <br>
                    <button type="button" id="quizSubmit">Grade Me!</button>
                </form>
            </div>
            <span class="bottomLinks">
                <a href="learn_colours_numbers.php" style="text-align: left">Previous Lesson</a>
                <a href="learn_tokiponization.php" style="text-align: right">Next Lesson</a>
            </span>
        </main>
    </body>
</html>