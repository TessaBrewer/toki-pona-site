<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Lesson 5: Colours and Numbers</title>
        <meta charset="utf-8"/>
        <?php include("boilerplate.php");?>
    </head>
    <body>
        <?php include("header.php");?>
        <main>
            <h1>Lesson Five: Colours and Numbers</h1>
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
                            getTerm("kule", "dictionary.csv", 1);
                            getTerm("loje", "dictionary.csv", 1);
                            getTerm("laso", "dictionary.csv", 1);
                            getTerm("jelo", "dictionary.csv", 1);
                            getTerm("kasi", "dictionary.csv", 1);
                            getTerm("pimeja", "dictionary.csv", 1);
                            getTerm("walo", "dictionary.csv", 1);
                            getTerm("nanpa", "dictionary.csv", 1);
                            getTerm("wan", "dictionary.csv", 1);
                            getTerm("tu", "dictionary.csv", 1);
                            getTerm("luka", "dictionary.csv", 2);
                            getTerm("mute", "dictionary.csv", 2);
                            getTerm("ale ali", "dictionary.csv", 2);
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="lesson">
                <h2>Numbers</h2>
                <p>Toki pona has two numbering systems, both of which follow the same rules, but differ in their acceptable building blocks. Both systems operate by listing out a long list of number terms which are all added up to get the final number. So the number four would be <span lang="art-x-tok">"tu tu"</span> (2 + 2 = 4).</p>
                <p>Numbers should be applied to nouns through the use of <span lang="art-x-tok">"pi"</span> if a number has to be constructed with more than one term. So "two homes" would be <span lang="art-x-tok">"tomo tu"</span>, while "four homes" would be <span lang="art-x-tok">"tomo pi tu tu"</span>.</p>
                <h3>The Old System</h3>
                <p>The first numbering system only allows <span lang="art-x-tok">"wan, tu, & luka"</span>. This is obviously a quite unwieldy system, 28 for example would be <span lang="art-x-tok">"luka luka luka luka luka tu wan"</span>. True to the spirit of toki pona this system forces speakers to consider wether or not they care about the exact value of a number or if they should just use <span lang="art-x-tok">"mute"</span>.</p>
                <h3>The New System</h3>
                <p>The new system was created in light of a perceived need to handle large numbers in a more compact manner. While following the same rules, and including the same vocabulary as the old system it adds <span lang="art-x-tok">"mute & ali"</span> to mean 20 and 100. Under this new system 28 would translate to <span lang="art-x-tok">"mute luka tu wan"</span>, which while still a little unwieldy is much better than <span lang="art-x-tok">"luka luka luka luka luka tu wan"</span>.</p>
                <h2>Colours</h2>
                <p>Toki pona colours are applied to nouns using the same rules as numbers (no <span lang="art-x-tok">"pi"</span> if constructed with one term, using a <span lang="art-x-tok">"pi"</span> if constructed with multiple terms). Colours are constructed using "compass rules", so somebody will add extra terms in order to make the phrase more specific. So in the same way that one can say "North", "North East", "North North East", etc one can also say <span lang="art-x-tok">"loje", "loje laso", "loje laso pimeja"</span>, etc.</p>
                <p>Alternatively one can make use of <span lang="art-x-tok">"kule"</span> to reference an objects colour. So one could either refer to a "green house" by saying <span lang="art-x-tok">"tomo pi laso jelo"</span> or <span lang="art-x-tok">"tomo pi kule kasi"</span>.</p>
            </div>
            <div id="quiz">
                <h2>Quiz Yourself</h2>
                <p id="quizResults"></p>
                <form>
                    <script>setAnswers(["darkGreen", "104", "23", "lightPurple", "lightGrey"]);</script>
                    <p>How would you say "dark green" in toki pona?</p>
                        <input type="radio" id="questionOneAnswerOne" name="q1" value="darkGreen">
                        <label for="questionOneAnswerOne" lang="art-x-tok">kule kasi pimeja</label>
                        <input type="radio" id="questionOneAnswerTwo" name="q1" value="darkPlant">
                        <label for="questionOneAnswerTwo" lang="art-x-tok">kasi pimeja</label>
                        <input type="radio" id="questionOneAnswerThree" name="q1" value="darkGreen">
                        <label for="questionOneAnswerThree" lang="art-x-tok">laso jelo pimeja</label>
                        <input type="radio" id="questionOneAnswerFour" name="q1" value="dark">
                        <label for="questionOneAnswerFour" lang="art-x-tok">pimeja</label>
                    <p>What number is <span lang="art-x-tok">"ali tu tu"?</span></p>
                        <input type="radio" id="questionTwoAnswerOne" name="q2" value="96">
                        <label for="questionTwoAnswerOne">96</label>
                        <input type="radio" id="questionTwoAnswerTwo" name="q2" value="104">
                        <label for="questionTwoAnswerTwo">104</label>
                        <input type="radio" id="questionTwoAnswerThree" name="q2" value="400">
                        <label for="questionTwoAnswerThree">400</label>
                        <input type="radio" id="questionTwoAnswerFour" name="q2" value="202">
                        <label for="questionTwoAnswerFour">202</label>
                    <p>How would you say 23 in toki pona?</p>
                        <input type="radio" id="questionThreeAnswerOne" name="q3" value="23">
                        <label for="questionThreeAnswerOne" lang="art-x-tok">mute tu wan</label>
                        <input type="radio" id="questionThreeAnswerTwo" name="q3" value="23">
                        <label for="questionThreeAnswerTwo" lang="art-x-tok">luka luka luka luka tu wan</label>
                        <input type="radio" id="questionThreeAnswerThree" name="q3" value="12">
                        <label for="questionThreeAnswerThree" lang="art-x-tok">tu tu luka tu wan</label>
                        <input type="radio" id="questionThreeAnswerFour" name="q3" value="many">
                        <label for="questionThreeAnswerFour" lang="art-x-tok">mute</label>
                    <p>What colour is <span lang="art-x-tok">"loje laso walo"</span></p>
                        <input type="radio" id="questionFourAnswerOne" name="q4" value="purple">
                        <label for="questionFourAnswerOne">Purple</label>
                        <input type="radio" id="questionFourAnswerTwo" name="q4" value="lightPurple">
                        <label for="questionFourAnswerTwo">Light purple</label>
                        <input type="radio" id="questionFourAnswerThree" name="q4" value="pink">
                        <label for="questionFourAnswerThree">Pink</label>
                        <input type="radio" id="questionFourAnswerFour" name="q4" value="darkPink">
                        <label for="questionFourAnswerFour">Dark pink</label>
                    <p>What colour is <span lang="art-x-tok">"pimeja walo walo"</span>?</p>
                        <input type="radio" id="questionFiveAnswerOne" name="q5" value="grey">
                        <label for="questionFiveAnswerOne">Grey</label>
                        <input type="radio" id="questionFiveAnswerTwo" name="q5" value="lightGrey">
                        <label for="questionFiveAnswerTwo">Light grey</label>
                        <input type="radio" id="questionFiveAnswerThree" name="q5" value="lightGrey">
                        <label for="questionFiveAnswerThree">Light light black</label>
                        <input type="radio" id="questionFiveAnswerFour" name="q5" value="white">
                        <label for="questionFiveAnswerFour">White</label>
                        <br>
                    <button type="button" id="quizSubmit">Grade Me!</button>
                </form>
            </div>
            <span class="bottomLinks">
                <a href="learn_questions.php" style="text-align: left">Previous Lesson</a>
                <a href="learn_connectors.php" style="text-align: right">Next Lesson</a>
            </span>
        </main>
    </body>
</html>