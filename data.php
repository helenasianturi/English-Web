<?php

$vocabularyData = [
    ["english" => "Hello", "indonesian" => "Halo", "category" => "Greetings"],
    ["english" => "Goodbye", "indonesian" => "Selamat tinggal", "category" => "Greetings"],
    ["english" => "Thank you", "indonesian" => "Terima kasih", "category" => "Phrases"],
    ["english" => "Apple", "indonesian" => "Apel", "category" => "Fruits"],
    ["english" => "Book", "indonesian" => "Buku", "category" => "Objects"],
    ["english" => "Water", "indonesian" => "Air", "category" => "Nature"],
    ["english" => "Sun", "indonesian" => "Matahari", "category" => "Nature"],
    ["english" => "Happy", "indonesian" => "Senang", "category" => "Feelings"],
    ["english" => "Sad", "indonesian" => "Sedih", "category" => "Feelings"],
];

$grammarData = [
    [
        "title" => "Simple Present Tense",
        "explanation" => "Digunakan untuk menyatakan fakta, kebiasaan, atau kejadian yang terjadi saat ini. Contoh: <i>I eat rice. She reads a book.</i>",
        "examples" => ["They play football every Sunday.", "The sun rises in the east."]
    ],
    [
        "title" => "Nouns (Kata Benda)",
        "explanation" => "Kata yang merujuk pada orang, tempat, benda, atau ide. Contoh: <i>student, school, table, happiness.</i>",
        "examples" => ["My <b>cat</b> is sleeping.", "<b>Jakarta</b> is a big city."]
    ],
    [
        "title" => "Adjectives (Kata Sifat)",
        "explanation" => "Kata yang menjelaskan atau memodifikasi kata benda. Contoh: <i>beautiful, big, red.</i>",
        "examples" => ["She has a <b>beautiful</b> voice.", "This is a <b>heavy</b> box."]
    ]
];

$quizData = [
    [
        "question" => "What is 'apel' in English?",
        "options" => ["Orange", "Apple", "Banana", "Grape"],
        "answer" => "Apple"
    ],
    [
        "question" => "Choose the correct sentence:",
        "options" => [
            "She read a book.",
            "She reads a book.",
            "She reading a book.",
            "She is reads a book."
        ],
        "answer" => "She reads a book."
    ],
    [
        "question" => "Which one is a greeting?",
        "options" => ["Book", "Water", "Goodbye", "Happy"],
        "answer" => "Goodbye"
    ],
    [
        "question" => "'Matahari' in English is...",
        "options" => ["Moon", "Star", "Sun", "Cloud"],
        "answer" => "Sun"
    ]
];

?>