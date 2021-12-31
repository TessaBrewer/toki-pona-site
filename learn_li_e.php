<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Lesson 2: Sentence Structure</title>
        <meta charset="utf-8"/>
        <?php include("boilerplate.php");?>
    </head>
    <body>
        <?php include("header.php");?>
        <main>
            <h1>Lesson Two: Sentence Structure</h1>
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
                            getTerm("e", "../dictionary.csv", 1);
                            getTerm("li", "../dictionary.csv", 1);
                            getTerm("soweli", "../dictionary.csv", 1);
                            getTerm("kala", "../dictionary.csv", 1);
                            getTerm("ona", "../dictionary.csv", 1);
                            getTerm("lukin", "../dictionary.csv", 1);
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="lesson">
                <h2>Parts of Speech</h2>
                <p>Words in toki pona generally fall into two catagories, content words and connectors. Content words fill the role of noun, verb, adjective, adverb, and more depending on their context. Connectors indicate the structure of the sentence and the part of speech the content words are filling. The two connectors we're covering in this lesson are "li" and "e".</p>
                <p>In most sentences everything to the left of "li" will be the subject, and everything to the right of "e" will be the direct object, anything between "li" and "e" is the verb phrase. The sole exceptions to this rule are the nouns "mi" and "sina", these terms are never followed by "li" when used as the sole subject in a sentence (the "li" is implied).</p>
                <p>So for example <span lang="art-x-tok">"ona li soweli"</span> would roughly mean "It is a mammal", while <span lang="art-x-tok">"mi soweli"</span> would mean "I am a mammal", though it would be improper to say <span lang="art-x-tok">"mi <i>li</i> soweli"</span>. "mi pona e ona" would would mean "I fix it." as 'ona' is to the right of 'e' and is therefore the direct object.</p>
                <p>It's worth noting at this point that toki pona as a language is inherently ambiguous at times. The sentence <span lang="art-x-tok">"ona li pona."</span> could be <i>correctly</i> translated as both "It is good" and "It fixes", it would be up to the listener to determine the correct meaning of a sentence or word based upon context clues. This isn't always a bad thing, a skilled writer could use this as a source of humour, tension, or poetry by being aware of the potential ambiguity and using it wisely.</p>
            </div>
            <div id="quiz">
                <h2>Quiz Yourself</h2>
                <p id="quizResults"></p>
                <form>
                    <script>setAnswers(["second", "kala", "soweli", "third", "correct"]);</script>
                    <p>How would you say "I see the mammal" in toki pona?</p>
                        <input type="radio" id="questionOneAnswerOne" name="q1" value="first">
                        <label for="questionOneAnswerOne" lang="art-x-tok">soweli li lukin e mi.</label>
                        <input type="radio" id="questionOneAnswerTwo" name="q1" value="second">
                        <label for="questionOneAnswerTwo" lang="art-x-tok">mi lukin e soweli.</label>
                        <input type="radio" id="questionOneAnswerThree" name="q1" value="third">
                        <label for="questionOneAnswerThree" lang="art-x-tok">mi li lukin e soweli.</label>
                        <input type="radio" id="questionOneAnswerFour" name="q1" value="fourth">
                        <label for="questionOneAnswerFour" lang="art-x-tok">ona li lukin e soweli.</label>
                    <p>What would be the direct object in <span lang="art-x-tok">"soweli li lukin e kala."?</span></p>
                        <input type="radio" id="questionTwoAnswerOne" name="q2" value="soweli">
                        <label for="questionTwoAnswerOne" lang="art-x-tok">soweli</label>
                        <input type="radio" id="questionTwoAnswerTwo" name="q2" value="li">
                        <label for="questionTwoAnswerTwo" lang="art-x-tok">li</label>
                        <input type="radio" id="questionTwoAnswerThree" name="q2" value="lukin">
                        <label for="questionTwoAnswerThree" lang="art-x-tok">lukin</label>
                        <input type="radio" id="questionTwoAnswerFour" name="q2" value="e">
                        <label for="questionTwoAnswerFour" lang="art-x-tok">e</label>
                        <input type="radio" id="questionTwoAnswerFive" name="q2" value="kala">
                        <label for="questionTwoAnswerFive" lang="art-x-tok">kala</label>
                    <p>What would be the subject in <span lang="art-x-tok">"soweli li lukin e kala."?</span></p>
                        <input type="radio" id="questionThreeAnswerOne" name="q3" value="soweli">
                        <label for="questionThreeAnswerOne" lang="art-x-tok">soweli</label>
                        <input type="radio" id="questionThreeAnswerTwo" name="q3" value="li">
                        <label for="questionThreeAnswerTwo" lang="art-x-tok">li</label>
                        <input type="radio" id="questionThreeAnswerThree" name="q3" value="lukin">
                        <label for="questionThreeAnswerThree" lang="art-x-tok">lukin</label>
                        <input type="radio" id="questionThreeAnswerFour" name="q3" value="e">
                        <label for="questionThreeAnswerFour" lang="art-x-tok">e</label>
                        <input type="radio" id="questionThreeAnswerFive" name="q3" value="kala">
                        <label for="questionThreeAnswerFive" lang="art-x-tok">kala</label>
                    <p>What would <span lang="art-x-tok">"sina soweli."</span> roughly translate to in English?</p>
                        <input type="radio" id="questionFourAnswerOne" name="q4" value="first">
                        <label for="questionFourAnswerOne">I am a mammal.</label>
                        <input type="radio" id="questionFourAnswerTwo" name="q4" value="second">
                        <label for="questionFourAnswerTwo">It is a mammal.</label>
                        <input type="radio" id="questionFourAnswerThree" name="q4" value="third">
                        <label for="questionFourAnswerThree">You are a mammal.</label>
                        <input type="radio" id="questionFourAnswerFour" name="q4" value="fourth">
                        <label for="questionFourAnswerFour">You mammal.</label>
                    <p>What would <span lang="art-x-tok">"kala li pona."</span> roughly translate to in English?</p>
                        <input type="radio" id="questionFiveAnswerOne" name="q5" value="correct">
                        <label for="questionFiveAnswerOne">Fish is good.</label>
                        <input type="radio" id="questionFiveAnswerTwo" name="q5" value="correct">
                        <label for="questionFiveAnswerTwo">Fish is simple.</label>
                        <input type="radio" id="questionFiveAnswerThree" name="q5" value="correct">
                        <label for="questionFiveAnswerThree">Fish fixes.</label>
                        <input type="radio" id="questionFiveAnswerFour" name="q5" value="incorrect">
                        <label for="questionFiveAnswerFour">It is not a fish.</label>
                        <br>
                    <button type="button" id="quizSubmit">Grade Me!</button>
                </form>
            </div>
            <span class="bottomLinks">
                <a href="learn_basics.php" style="text-align: left">Previous Lesson</a>
                <a href="learn_adjectives.php" style="text-align: right">Next Lesson</a>
            </span>
        </main>
    </body>
</html>