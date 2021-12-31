<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Lesson 3: Adjectives</title>
        <meta charset="utf-8"/>
        <?php include("../boilerplate.php");?>
    </head>
    <body>
        <?php include("../header.php");?>
        <main>
            <h1>Lesson Three: Adjectives</h1>
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
                            getTerm("jaki", "../dictionary.csv", 1);
                            getTerm("lawa", "../dictionary.csv", 1);
                            getTerm("pipi", "../dictionary.csv", 1);
                            getTerm("lili", "../dictionary.csv", 1);
                            getTerm("telo", "../dictionary.csv", 1);
                            getTerm("seli", "../dictionary.csv", 1);
                            getTerm("sewi", "../dictionary.csv", 1);
                            getTerm("tomo", "../dictionary.csv", 1);
                            getTerm("nasa", "../dictionary.csv", 1);
                            getTerm("pi", "../dictionary.csv", 1);
                            getTerm("mute", "../dictionary.csv", 1);
                            getTerm("kama", "../dictionary.csv", 1);
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="lesson">
                <h2>Adjectives</h2>
                <p>Adjectives in toki pona always come after the content word that they modify, leaving the left-most word as a noun/verb/etc. There is no limit to the number of adjectives that can be applied to a word, but best practice is to limit yourself to only those which are absolutely necessary for clear communication.</p>
                <p>Typically the word <span lang="art-x-tok">"mute"</span> is used as an adjective to pluralize the word it's modifying.</p>
                <p>Following these rules we can see that a phrase like <span lang="art-x-tok">"tomo lili"</span> would roughly translate to "small structure", and <span lang="ar-x-tok">"tomo lili mute"</span> would roughly translate to "many small structures".</p>
                <p>Possession is typically indicated by using the 'possessor' as an adjective to describe the thing which is being possessed. Eg: <span lang="art-x-tok">"tomo mi"</span> would mean "my structure" or "my house"</p>
                <p>At this point I should note an exception to the <span lang="art-x-tok">"mi/sina"</span> rule described in the previous lesson. If the word <span lang="art-x-tok">"mi/sina"</span> is being used as an adjective, or is being modified by an adjective then it <b>does</b> use the <span lang="art-x-tok">"li"</span> connector.</p>
                <p>The term <span lang="art-x-tok">"kama"</span> when used to modify a verb is typically understood to indicate that the verb is in the progressive tense, ie it is 'coming to happen'.</p>
                <h2 lang="art-x-tok">pi</h2>
                <p>"pi" can be thought of as a sort of 'sub-connector'. It's purpose is to allow you to use adjective phrases in addition to individual adjectives. It should only be used when the verb phrase is more than word long, and should be structured so that the describing phrase is to the right of the <span lang="art-x-tok">"pi"</span> and the described phrase is to the left of the <span lang="art-x-tok">"pi"</span>.</p>
                <p>We see the necessity for <span lang="art-x-tok">"pi"</span> in <span lang="art-x-tok">"tomo pi telo nasa"</span>, the typical phrase for "bar". We can see that it literally translates to "structure of weird liquid", if a "weird liquid" is understood as alcohol (as most speakers will automatically assume) then the phrase as a whole be understood correctly. However, if we leave out <span lang="art-x-tok">"pi"</span> to get the phrase <span lang="art-x-tok">"tomo telo nasa"</span> which would literally translate to "weird water structure", or as a speaker would usually understand it "weird bathroom". The problem here arises when we are unable to specify which word is being modified by <span lang="art-x-tok">"nasa"</span>, this is solved through the use of <span lang="art-x-tok">"pi"</span>.</p>
            </div>
            <div id="quiz">
                <h2>Quiz Yourself</h2>
                <p id="quizResults"></p>
                <form>
                    <script>setAnswers(["first", "venom", "possessiveSelf", "first", "correct"]);</script>
                    <p>How would you tell somebody that your food is nasty?</p>
                        <input type="radio" id="questionOneAnswerOne" name="q1" value="first">
                        <label for="questionOneAnswerOne" lang="art-x-tok">moku mi li jaki.</label>
                        <input type="radio" id="questionOneAnswerTwo" name="q1" value="second">
                        <label for="questionOneAnswerTwo" lang="art-x-tok">moku li jaki.</label>
                        <input type="radio" id="questionOneAnswerThree" name="q1" value="third">
                        <label for="questionOneAnswerThree" lang="art-x-tok">mi moku li jaki.</label>
                        <input type="radio" id="questionOneAnswerFour" name="q1" value="fourth">
                        <label for="questionOneAnswerFour" lang="art-x-tok">jaki li moku mi.</label>
                    <p>What is <span lang="art-x-tok">"telo pi pipi ike"?</span></p>
                        <input type="radio" id="questionTwoAnswerOne" name="q2" value="squashedBug">
                        <label for="questionTwoAnswerOne">bad bug liquid (a squashed bug?)</label>
                        <input type="radio" id="questionTwoAnswerTwo" name="q2" value="venom">
                        <label for="questionTwoAnswerTwo">liquid from a bad bug (spider venom?)</label>
                        <input type="radio" id="questionTwoAnswerThree" name="q2" value="waterBug">
                        <label for="questionTwoAnswerThree">bad water bug</label>
                        <input type="radio" id="questionTwoAnswerFour" name="q2" value="mosquito">
                        <label for="questionTwoAnswerFour">bug of bad water (a swamp bug, maybe a mosquito?)</label>
                    <p>How would you talk about your pet dog?</p>
                        <input type="radio" id="questionThreeAnswerOne" name="q3" value="possessiveDog">
                        <label for="questionThreeAnswerOne" lang="art-x-tok">mi soweli</label>
                        <input type="radio" id="questionThreeAnswerTwo" name="q3" value="dogAlone">
                        <label for="questionThreeAnswerTwo" lang="art-x-tok">soweli</label>
                        <input type="radio" id="questionThreeAnswerThree" name="q3" value="pi">
                        <label for="questionThreeAnswerThree" lang="art-x-tok">soweli pi mi</label>
                        <input type="radio" id="questionThreeAnswerFour" name="q3" value="possessiveSelf">
                        <label for="questionThreeAnswerFour" lang="art-x-tok">soweli mi</label>
                    <p>What would <span lang="art-x-tok">"mi telo e telo nasa"</span> roughly translate to in English?</p>
                        <input type="radio" id="questionFourAnswerOne" name="q4" value="first">
                        <label for="questionFourAnswerOne">I drink alcohol.</label>
                        <input type="radio" id="questionFourAnswerTwo" name="q4" value="second">
                        <label for="questionFourAnswerTwo">My drink is alcohol.</label>
                        <input type="radio" id="questionFourAnswerThree" name="q4" value="third">
                        <label for="questionFourAnswerThree">My water is weird.</label>
                        <input type="radio" id="questionFourAnswerFour" name="q4" value="fourth">
                        <label for="questionFourAnswerFour">The liquid is weird.</label>
                    <p>How would you say that you are getting something?</p>
                        <input type="radio" id="questionFiveAnswerOne" name="q5" value="incorrect">
                        <label for="questionFiveAnswerOne" lang="art-x-tok">mi jo ijo.</label>
                        <input type="radio" id="questionFiveAnswerTwo" name="q5" value="incorrect">
                        <label for="questionFiveAnswerTwo" lang="art-x-tok">mi jo e ijo.</label>
                        <input type="radio" id="questionFiveAnswerThree" name="q5" value="correct">
                        <label for="questionFiveAnswerThree">mi jo kama e ijo.</label>
                        <input type="radio" id="questionFiveAnswerFour" name="q5" value="incorrect">
                        <label for="questionFiveAnswerFour">ijo li jo kama e mi.</label>
                        <br>
                    <button type="button" id="quizSubmit">Grade Me!</button>
                </form>
            </div>
            <span class="bottomLinks">
                <a href="learn_li_e.php" style="text-align: left">Previous Lesson</a>
                <a href="learn_questions.php" style="text-align: right">Next Lesson</a>
            </span>
        </main>
    </body>
</html>