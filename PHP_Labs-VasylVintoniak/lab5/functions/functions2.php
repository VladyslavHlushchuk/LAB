<?php
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');


function londest_word() {
    $text = "PHP не підтримує беззнакові цілі числа. Дійсні числа із плаваючою крапкою можуть бути подані в десятковій або експоненційній формі. Рядки розділяють на два класи — рядки, що підлягають аналізу, та рядки, що не підлягають аналізу.";
    $words = explode(" ", $text);
    
    $max_length = 0;
    $max_word = "";
    
    foreach ($words as $word) {
        $word_length = strlen($word);
        if ($word_length > $max_length) {
            $max_length = $word_length;
            $max_word = $word;
        }
    }

    echo "Найбільше слово це: " . $max_word . ", з довжиною " . $max_length . " символів.";
}


function count_words() {
$text = "PHP надає широкий спектр функцій для пошуку та заміни тексту в рядках. Для цього використовують як традиційний підхід, так і спеціальний підхід, що базується на використанні регулярних виразів.";

$text = preg_replace("/[^a-zA-Z\s],[^а-яА-Я\s]/", "", strtolower($text));
$words = explode(" ", $text);
$wordCounts = array_count_values($words);

foreach ($wordCounts as $word => $count) {
    echo "$word: $count<br>";
}
}


function remove_repeted() {
$text = "Константи в PHP - ідентифікатори простих значень. Можливе визначення константи, причому після її оголошення стає неможливою зміна її значення чи анулювання. Константи можуть мати лише скалярні значення. Підтримується можливість отримання значення константи за динамічним ім'ям.";

$text = preg_replace("/[^a-zA-Z\s],[^а-яА-Я\s]/", "", strtolower($text));
$words = explode(" ", $text);

$uniqueWords = array_unique($words);
$numDeletions = count($words) - count($uniqueWords);

echo implode(" ", $uniqueWords) . "<br><br>";
echo "Кількість зроблених видалень: " . $numDeletions . "<br>";
}

?>