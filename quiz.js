
let quiz = [];
function loadQuiz() {
    // Створення XMLHttpRequest
    const xhr = new XMLHttpRequest();
    const currentUrl = window.location.href;
    const url = new URL(currentUrl);
    const id = url.searchParams.get('id'); //отримуємо id вікторини
    xhr.open('GET', 'lib/get_quiz.php?id='+id, true);

    // Обробка відповіді
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            quiz = JSON.parse(xhr.responseText);
            displayQuiz(quiz);
        }
    };

    // Відправка запиту
    xhr.send();
}

const quizContainer = document.getElementById("quiz");

function displayQuiz(quiz) {
    const output = [];

    quiz.forEach((currentQuestion, questionNumber) => {
        const answers = [];

        if (currentQuestion.type === "text" || !currentQuestion.answers) {
            answers.push(`<input type="text" name="question${questionNumber}">`);
        } else {
            for (let i = 0; i < currentQuestion.answers.length; i++) {
                answers.push(
                    `<label>
            <input type="${currentQuestion.type}" name="question${questionNumber}" value="${i}">
            ${currentQuestion.answers[i].text}
          </label>`
                );
            }
        }

        output.push(
            `<li>
        <div class="question"><strong>${currentQuestion.question}</strong></div>
        <div class="answers">${answers.join("")}</div>
      </li>`
        );

        // Додаємо відступ після кожного питання
        output.push('<div style="margin-bottom:20px;"></div>');
    });
    if(quiz.length == 0){
        document.getElementById("err").style.display = 'block';
        document.getElementById('quiz').style.display='none';
        document.getElementById('submit').style.display='none';
    }
    quizContainer.innerHTML = output.join("");
}

function submitQuiz() {
    const answerContainers = quizContainer.querySelectorAll(".answers");
    let numCorrect = 0;

    quiz.forEach((currentQuestion, questionNumber) => {
        const answerContainer = answerContainers[questionNumber];
        const selector = `input[name=question${questionNumber}]:checked`;
        const userAnswerContainer = answerContainer.querySelector(selector);
        const userAnswer = userAnswerContainer ? userAnswerContainer.value : null;
        if (userAnswer !== null) {
            const selectedAnswerIndex = parseInt(userAnswer); // Перетворення рядка на ціле число

            // Визначаємо всі відповіді для поточного питання
            const allAnswers = answerContainer.querySelectorAll("input[type=radio], input[type=checkbox]");
            // Проходимо через всі відповіді
            for (let i = 0; i < allAnswers.length; i++) {
                // Якщо відповідь правильна, змінюємо колір на зелений
                if (currentQuestion.answers[i].correct == 1) {
                    allAnswers[i].parentNode.style.color = "green";
                }// Якщо відповідь неправильна, змінюємо колір на червоний
                else {
                    allAnswers[i].parentNode.style.color = "red";
                }
            }

            if (currentQuestion.answers[selectedAnswerIndex].correct == 1) {
                numCorrect++;
            }
        } else if (currentQuestion.type === "text") {
            const userAnswer = answerContainer.querySelectorAll(`input[type=text]`)[0].value;
            if(userAnswer != "")
            {
                const selector = `span`;
                const resultContainer = answerContainer.querySelector(selector);
                if (resultContainer !== null)
                {
                    resultContainer.remove()
                }
                const resultText = document.createElement('span'); // Створюємо новий елемент span для відображення результату
                if (userAnswer.toUpperCase() === currentQuestion.correct.toUpperCase()) {
                    numCorrect++;
                    answerContainer.style.color = "green";
                    resultText.textContent = "Правильно"; // Встановлюємо текст елемента span
                    resultText.style.color = "green"; // Змінюємо колір тексту на зелений
                } else {
                    answerContainer.style.color = "red";
                    resultText.textContent = "Неправильно"; // Встановлюємо текст елемента span
                    resultText.style.color = "red"; // Змінюємо колір тексту на червоний
                }
                answerContainer.appendChild(resultText); // Додаємо елемент span до контейнера відповіді
            }
        }
    });

    save(numCorrect, quiz.length);

    document.getElementById("res").innerHTML = `Ви вірно відповіли на ${numCorrect} із ${quiz.length} питань`
}

//Зберігаємо результат в БД за допомогою XMLHttpRequest
function save(numCorrect, countQuet){
    const currentUrl = window.location.href;
    const url = new URL(currentUrl);
    const id = url.searchParams.get('id'); //отримуємо id вікторини
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "/lib/sendQuiz.php", true);
    xhr.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    const body = JSON.stringify({
        id: id,
        result: numCorrect,
        count_quest: countQuet
    });
    xhr.onload = () => {
        if (xhr.readyState == 4 && xhr.status == 201) {
            console.log(JSON.parse(xhr.responseText));
        } else {
            console.log(`Error: ${xhr.status}`);
        }
    };
    xhr.send(body);

}


// Завантаження вікторини після завантаження сторінки
window.onload = loadQuiz;