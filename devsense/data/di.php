<?php
$xmlFile = '/var/www/html/AWS.drawio'; // Шлях до вашого XML-файлу

// Зчитуємо XML-файл
$xml = file_get_contents($xmlFile);

// Перевіряємо, чи XML успішно завантажено
if ($xml !== false) {
    // Вставляємо XML-діаграму в HTML-сторінку
    echo '<div id="diagram-container">' . $xml . '</div>';
} else {
    echo 'Помилка при завантаженні XML-файлу.';
}
?>