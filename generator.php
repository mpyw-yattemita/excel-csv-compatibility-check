<?php

$charsets = [
    'Shift_JIS'  => ['cp932', ""],
    'UTF-16_LE' => ['utf-16le', "\xEF\xBB\xBF"],
    'UTF-8' => ['utf-8', "\xEF\xBB\xBF"],
    'UTF-8N' => ['utf-8', ""],
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

以下の書式でお答えください

◎: 一発で開けた
◯: 開こうとするとウィザードが出現するが，デフォルトの設定で開けた
△: 開こうとするとウィザードが出現し，区切り文字を変更すれば開けた
✕: 文字化けしたり表示が崩れたりして開けなかった

文字コード.実際の中身のフォーマット.拡張子: 記号 [正しく表示された改行コード]

例   Shift_JIS.CSV.csv: ◎ [CRLF][LF]



EOD
);

foreach ($charsets as $charset => list($to, $bom)) {
    foreach ($delimiters as $format => $delimiter) {
        foreach ($extensions as $extension) {
            fwrite($form, "$charset.$format.$extension: \n");
            $fp = fopen(__DIR__ . "/files/$charset.$format.$extension", 'wb');
            stream_filter_prepend($fp, "convert.iconv.utf-8/$to");
            fwrite($fp, $bom);
            fputcsv($fp, ['改行コード', 'キャラ名 (氏名間で改行)', '声優名 (氏名間で改行)']);
            fputcsv($fp, ["CRLF", "保登\r\n心愛", "佐倉\r\n綾音"], $delimiter);
            fputcsv($fp, ["LF", "香風\n智乃", "水瀬\nいのり"], $delimiter);
            fputcsv($fp, ["CR", "桐間\r紗路", "内田\r真礼"], $delimiter);
        }
    }
}