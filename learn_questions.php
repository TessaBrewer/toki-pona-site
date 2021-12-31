<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Lesson 4: Questions</title>
        <meta charset="utf-8"/>
        <?php include("boilerplate.php");?>
    </head>
    <body>
        <?php include("header.php");?>
        <main>
            <h1>Lesson Four: Questions</h1>
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
                            getTerm("seme", "../dictionary.csv", 1);
                            getTerm("ala", "../dictionary.csv", 1);
                            getTerm("ale ali", "../dictionary.csv", 1);
                            getTerm("musi", "../dictionary.csv", 1);
                            getTerm("sona", "../dictionary.csv", 1);
                            getTerm("wile", "../dictionary.csv", 1);
                            getTerm("ma", "../dictionary.csv", 1);
                            getTerm("nimi", "../dictionary.csv", 1);
                            getTerm("pilin", "../dictionary.csv", 1);
                            getTerm("luka", "../dictionary.csv", 1);
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="lesson">
                <h2>Questions</h2>
                <p>There are generally two methods for asking questions in toki pona, the first makes use of <span lang="art-x-tok">"ala"</span>, and the second makes use of <span lang="art-x-tok">"seme"</span>.</p>
                <h3 lang="art-x-tok">ala</h3>
                <p><span lang="art-x-tok">"ala"</span> is used to ask binary yes or no questions. These questions are structured the exact same way they would be if you were stating the affirmative response as a fact, except you replace the bit which is in question (almost always the <i>verb</i>) with <span lang="art-x-tok">"x ala x"</span> where 'x' is the bit in question. One can respond to with either "x" (where 'x' is the bit in question) to answer in the affirmative, or with <span lang="art-x-tok">"x ala"</span> (where 'x' is the bit in question) to answer in the negation. Alternatively one could respond with <span lang="art-x-tok">"ali/ala"</span> to answer in the affirmative or negation respectively, although this method is very uncommon and informal.</p>
                <p>Following this structure we can see that a sentence like <span lang="art-x-tok">"mi sona ala sona e sina?"</span> could be translated into English as "Do I know you?"</p>
                <h3 lang="art-x-tok">seme</h3>
                <p>The second way to ask a question is with the word <span lang="art-x-tok">"seme"</span>. These types of questions are mainly used to request a bit of information, and are structured as though on knows that info, except unknown bit is replaced with the word <span lang="art-x-tok">"seme"</span>.</p>
                <p>For example, if you wanted to ask somebody what their name is you might say <span lang="art-x-tok">"nimi sina li seme?"</span></p>
            </div>
            <div id="quiz">
                <h2>Quiz Yourself</h2>
                <p id="quizResults"></p>
                <form>
                    <script>setAnswers(["first", "second", "soweli", "third", "correct"]);</script>
                    <p>How would you ask somebody how they think?</p>
                        <input type="radio" id="questionOneAnswerOne" name="q1" value="first">
                        <label for="questionOneAnswerOne" lang="art-x-tok">sina pilin e seme?</label>
                        <input type="radio" id="questionOneAnswerTwo" name="q1" value="second">
                        <label for="questionOneAnswerTwo" lang="art-x-tok">mi pilin e seme?</label>
                        <input type="radio" id="questionOneAnswerThree" name="q1" value="third">
                        <label for="questionOneAnswerThree" lang="art-x-tok">seme sina pilin?</label>
                        <input type="radio" id="questionOneAnswerFour" name="q1" value="fourth">
                        <label for="questionOneAnswerFour" lang="art-x-tok">seme pilin?</label>
                    <p lang="art-x-tok">sina jo kama ala jo kama e sona pi toki pona?</p>
                        <input type="radio" id="questionTwoAnswerOne" name="q2" value="first">
                        <label for="questionTwoAnswerOne" lang="art-x-tok">jo kama ala</label>
                        <input type="radio" id="questionTwoAnswerTwo" name="q2" value="second">
                        <label for="questionTwoAnswerTwo" lang="art-x-tok">jo kama</label>
                        <input type="radio" id="questionTwoAnswerThree" name="q2" value="third">
                        <label for="questionTwoAnswerThree" lang="art-x-tok">seme?</label>
                    <p>How would you ask somebody if they're hungry?</p>
                        <input type="radio" id="questionThreeAnswerOne" name="q3" value="first">
                        <label for="questionThreeAnswerOne" lang="art-x-tok">sina wile e moku?</label>
                        <input type="radio" id="questionThreeAnswerTwo" name="q3" value="second">
                        <label for="questionThreeAnswerTwo" lang="art-x-tok">sina seme e moku?</label>
                        <input type="radio" id="questionThreeAnswerThree" name="q3" value="third">
                        <label for="questionThreeAnswerThree" lang="art-x-tok">sina wile e moku ala moku?</label>
                        <input type="radio" id="questionThreeAnswerFour" name="q3" value="fourth">
                        <label for="questionThreeAnswerFour" lang="art-x-tok">sina wile ala wile e moku?</label>
                        <br>
                    <button type="button" id="quizSubmit">Grade Me!</button>
                </form>
            </div>
            <span class="bottomLinks">
                <a href="learn_adjectives.php" style="text-align: left">Previous Lesson</a>
                <a href="learn_colours_numbers.php" style="text-align: right">Next Lesson</a>
            </span>
        </main>
    </body>
</html>