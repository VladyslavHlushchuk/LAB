<?php
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');

function alphabet_order($file_path) {
$text = file_get_contents($file_path);
$words = explode(" ", $text);
sort($words);

foreach ($words as $word) {
  echo $word . " ";
}
}


function frequnci_word($file_path) {
$text = file_get_contents($file_path);

$words = explode(" ", $text);
$word_counts = array_count_values($words);
arsort($word_counts);
$top_words = array_slice(array_keys($word_counts), 0, 2);

echo "Два слова які найбільше зустрічаються у тексті це: " . $top_words[0] . " і " . $top_words[1];
}


function longest_word($file_path) {
$text = file_get_contents($file_path);
$words = explode(" ", $text);

$longest_words = array();
$longest_length = 0;

foreach ($words as $word) {
  $word_length = strlen($word);

  if ($word_length > $longest_length) {
    $longest_words = array($word);
    $longest_length = $word_length;

  } elseif ($word_length == $longest_length) {
    $longest_words[] = $word;
  }
}

echo "Найбільше(-і) слово(-а) у тексті: ";
foreach ($longest_words as $word) {
  echo $word . " (Довжина = " . $longest_length . ") ";
}
}


function shortest_word($file_path) 
{
$text = file_get_contents($file_path);
$words = explode(" ", $text);

$shortest_words = array();
$shortest_length = PHP_INT_MAX;

foreach ($words as $word) {
  $word_length = strlen($word);

  if ($word_length < $shortest_length) {
    $shortest_words = array($word);
    $shortest_length = $word_length;

  } elseif ($word_length == $shortest_length) {
    $shortest_words[] = $word;
  }
}

echo "Найменше(-і) слово(-а) у тексті: ";
foreach ($shortest_words as $word) {
  echo $word . " (Довжина  = " . $shortest_length . ") ";
}
}


function find_letter_in_word($file_path, $first_letter) {
$text = file_get_contents($file_path);
$words = explode(" ", $text);
$found_words = array();

foreach ($words as $word) {
  if (strtolower(substr($word, 0, 1)) === strtolower($first_letter)) {
    $found_words[] = $word;
  }
}

if (count($found_words) === 0) {
  $new_sentence = "Мене звати Василь і я дуже крутий. ";
  file_put_contents($file_path, " " . $new_sentence, FILE_APPEND);
  echo "Слово не знайдено. Добавлено нове речення до текстового файлу.";
} else {
  echo "Слово яке починається з першої букви мого імені: ";
  foreach ($found_words as $word) {
    echo $word . " ";
  }
}
}

function change_letter($file_path) {
$text = file_get_contents($file_path);
$text = str_replace("о", "О", $text);
file_put_contents($file_path, $text);

echo "Всі малі букви 'о' були змінені на великі букви 'О'.";
}


function random_paragraph() {
    $paragraphs = array(
        "PHP не підтримує беззнакові цілі числа. Дійсні числа із плаваючою крапкою можуть бути подані в десятковій або експоненційній формі. Рядки розділяють на два класи — рядки, що підлягають аналізу, та рядки, що не підлягають аналізу.",
        "PHP надає широкий спектр функцій для пошуку та заміни тексту в рядках. Для цього використовують як традиційний підхід, так і спеціальний підхід, що базується на використанні регулярних виразів. ",
        "Константи в PHP - ідентифікатори простих значень. Можливе визначення константи, причому після її оголошення стає неможливою зміна її значення чи анулювання. Константи можуть мати лише скалярні значення. Підтримується можливість отримання значення константи за динамічним ім'ям. ",
        "Оператори бувають трьох типів - унарні, бінарні та тернарні. Оператори, як і в інших мовах характеризуються не   лише дією, а й асоціативністю    та пріоритетністю. ",
        "Функції в сенсі мови є контейнерами коду: причому можливе поміщення інших функцій та класів. На цьому і базується можливість умовного визначення функції. В цьому випадку висувається вимога попередньої декларації викликаної функції, що не обов'язково в інших випадках. "
      );
      
      $random_paragraph = $paragraphs[array_rand($paragraphs)];
      
      echo $random_paragraph;
}




?>