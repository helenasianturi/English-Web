<?php
// Mulai atau lanjutkan session
// session_start(); // Ini sudah di index.php

$totalQuestions = count($quizData);

// Inisialisasi atau ambil state kuis dari session
if (!isset($_SESSION['current_question_index'])) {
    $_SESSION['current_question_index'] = 0;
    $_SESSION['score'] = 0;
    $_SESSION['quiz_completed'] = false;
    $_SESSION['feedback'] = null; // Untuk menyimpan feedback setelah jawaban
}

// Logika untuk mereset kuis
if (isset($_GET['action']) && $_GET['action'] === 'reset') {
    $_SESSION['current_question_index'] = 0;
    $_SESSION['score'] = 0;
    $_SESSION['quiz_completed'] = false;
    $_SESSION['feedback'] = null;
    // Redirect untuk membersihkan parameter action dari URL
    header("Location: index.php?page=quiz");
    exit;
}

$currentQuestionIndex = $_SESSION['current_question_index'];
$score = $_SESSION['score'];
$quizCompleted = $_SESSION['quiz_completed'];

// Proses jawaban jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_answer'])) {
    if (!$quizCompleted && isset($_POST['quiz_option'])) {
        $selectedAnswer = $_POST['quiz_option'];
        $correctAnswer = $quizData[$currentQuestionIndex]['answer'];

        if ($selectedAnswer === $correctAnswer) {
            $_SESSION['score']++;
            $_SESSION['feedback'] = ["type" => "correct", "message" => "Correct!"];
        } else {
            $_SESSION['feedback'] = ["type" => "incorrect", "message" => "Wrong, The correct answer is: " . htmlspecialchars($correctAnswer)];
        }
        
        $_SESSION['current_question_index']++;
        
        if ($_SESSION['current_question_index'] >= $totalQuestions) {
            $_SESSION['quiz_completed'] = true;
        }
    }
    // Redirect untuk mencegah resubmission form saat refresh (Post/Redirect/Get pattern)
    header("Location: index.php?page=quiz");
    exit;
}

?>

<h2>Interactive Quiz</h2>

<?php if (isset($_SESSION['feedback'])): ?>
    <div class="quiz-feedback <?= $_SESSION['feedback']['type'] ?>">
        <?= $_SESSION['feedback']['message'] ?>
    </div>
    <?php $_SESSION['feedback'] = null; // Hapus feedback setelah ditampilkan ?>
<?php endif; ?>


<?php if ($quizCompleted): ?>
    <h3>Result</h3>
    <p>You Got <?= $score ?> dari <?= $totalQuestions ?> correct!</p>
    <a href="index.php?page=quiz&action=reset" class="quiz-button">Repeat Quiz</a>
<?php elseif ($currentQuestionIndex < $totalQuestions): ?>
    <?php $questionData = $quizData[$currentQuestionIndex]; ?>
    <form method="POST" action="index.php?page=quiz">
        <div class="quiz-question">
            <p>Pertanyaan <?= $currentQuestionIndex + 1 ?>/<?= $totalQuestions ?>: <?= htmlspecialchars($questionData['question']) ?></p>
            <div class="quiz-options">
                <?php foreach ($questionData['options'] as $option): ?>
                    <label>
                        <input type="radio" name="quiz_option" value="<?= htmlspecialchars($option) ?>" required>
                        <?= htmlspecialchars($option) ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
        <button type="submit" name="submit_answer" class="quiz-button">Send your answers</button>
    </form>
<?php else: ?>
    <p>An error occurred in the quiz or the quiz was completed without a clear result.</p>
    <a href="index.php?page=quiz&action=reset" class="quiz-button">Start</a>
<?php endif; ?>