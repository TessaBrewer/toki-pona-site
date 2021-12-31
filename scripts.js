let quizAnswers = [];

function setAnswers(a)
{
    quizAnswers = [...a];
}

function gradeQuiz()
{
    let correctAnswers = 0;
    let totalAnswers = 0;
    quizAnswers.forEach(answer =>
    {
        totalAnswers++;
        let radio = document.getElementsByName("q"+totalAnswers.toString());
        for(let i = 0; i < radio.length; i++)
        {
            if(radio[i].checked)
            {
                if(radio[i].value == answer)
                {
                    correctAnswers++;
                }
            }
        }
    });

    document.getElementById("quizResults").innerHTML = correctAnswers.toString()+" correct out of "+totalAnswers.toString();
}

window.onload = function()
{
    let homeButton = document.getElementById("homeButton");
    if(homeButton == null)
    {
        console.log("Could not find element with id homeButton");
    }else
    {
        homeButton.addEventListener("click", function()
        {
            window.location.href = "index.php";
        });
    }

    let aboutButton = document.getElementById("aboutButton");
    if(aboutButton == null)
    {
        console.log("Could not find element with id aboutButton");
    }else
    {
        aboutButton.addEventListener("click", function()
        {
            window.location.href = "about.php";
        });
    }

    let dictionaryButton = document.getElementById("dictionaryButton");
    if(dictionaryButton == null)
    {
        console.log("Could not find element with id dictionaryButton");
    }else
    {
        dictionaryButton.addEventListener("click", function()
        {
            window.location.href = "dictionary.php";
        });
    }

    let learnButton = document.getElementById("learnButton");
    if(learnButton == null)
    {
        console.log("Could not find element with id learnButton");
    }else
    {
        learnButton.addEventListener("click", function()
        {
            window.location.href = "learn/learn_home.php";
        });
    }

    let quizButton = document.getElementById("quizSubmit");
    if(quizButton != null)
    {
        quizButton.addEventListener("click", gradeQuiz);
    }
}