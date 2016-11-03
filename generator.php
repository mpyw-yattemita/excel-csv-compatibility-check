<?php

$charsets = [
    'Shift_JIS'  => ['cp932', ""],
    'UTF-16_LE' => ['utf-16le', "\xEF\xBB\xBF"],
];
$delimiters = [
    'CSV' => ',',
    'TSV' => "\t",
];
$extensions = ['csv', 'tsv'];

$form = fopen(__DIR__ . '/questionnaire_form.txt', 'wb');
fwrite($form, <<<EOD
<< アンケートフォーム >>

【環境】

OS: 
Officeバージョン: 


【動作結果】

以下の記号でお答えください

◎: 一発で開けた
◯: 開こうとするとウィザードが出現するが，デフォルトの設定で開けた
△: 開こうとするとウィザードが出現し，区切り文字を変更すれば開けた
✕: 文字化けしたり表示が崩れたりして開けなかった


EOD
);

foreach ($charsets as $charset => list($to, $bom)) {
    foreach ($delimiters as $format => $delimiter) {
        foreach ($extensions as $extension) {
            fwrite($form, "$charset.$format.$extension: \n");
            $fp = fopen(__DIR__ . "/files/$charset.$format.$extension", 'wb');
            stream_filter_prepend($fp, "convert.iconv.utf-8/$to");
            fwrite($fp, $bom);
            fputcsv($fp, ['佐倉綾音', '保登心愛'], $delimiter);
            fputcsv($fp, ['水瀬いのり', '香風智乃'], $delimiter);
        }
    }
}