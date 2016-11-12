<?php

$charsets = [
    'Shift_JIS'  => ['cp932', ""],
    'UTF-16_LE' => ['utf-16le', "\xEF\xBB\xBF"],
    'UTF-8' => ['utf-8', "\xEF\xBB\xBF"],
    'UTF-8N' => ['utf-8', ""],
];
$newlines = [
    'CRLF' => "\r\n",
    'LF' => "\n",
    'CR' => "\r",
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


【検証1: 文字コードに関して】

以下の書式でお答えください

◎: 一発で開けた
◯: 開こうとするとウィザードが出現するが，デフォルトの設定で開けた
△: 開こうとするとウィザードが出現し，区切り文字を変更すれば開けた
▲: ウィザードを抑制する手段を使えば開けた
✕: 文字化けしたり表示が崩れたりして開けなかった

文字コード.実際の中身のフォーマット.拡張子: 記号


【検証2: 改行コードに関して】

以下の書式でお答えください

◎: 一発で開けた
◯: 開こうとするとウィザードが出現するが，デフォルトの設定で開けた
△: 開こうとするとウィザードが出現し，改行文字を変更すれば開けた
▲: ウィザードを抑制する手段を使えば開けた
✕: 表示が崩れて開けなかった

改行コード.実際の中身のフォーマット.拡張子: 記号



EOD
);

foreach ($charsets as $charset => list($to, $bom)) {
    foreach ($delimiters as $format => $delimiter) {
        foreach ($extensions as $extension) {
            fwrite($form, "$charset.$format.$extension: \n");
            $fp = fopen(__DIR__ . "/files/$charset.$format.$extension", 'wb');
            stream_filter_prepend($fp, "convert.iconv.utf-8/$to");
            fwrite($fp, $bom);
            fputcsv($fp, ['キャラ', '声優']);
            fputcsv($fp, ['保登心愛', '佐倉綾音'], $delimiter);
            fputcsv($fp, ['香風智乃', '水瀬いのり'], $delimiter);
            fputcsv($fp, ['桐間紗路', '内田真礼'], $delimiter);
        }
    }
}
foreach ($newlines as $newline => $code) {
    foreach ($delimiters as $format => $delimiter) {
        foreach ($extensions as $extension) {
            fwrite($form, "$newline.$format.$extension: \n");
            $fp = fopen(__DIR__ . "/files/$newline.$format.$extension", 'wb');
            fputcsv($fp, ['Character', 'Actor']);
            fputcsv($fp, ["Cocoa{$code}Hoto", "Ayane{$code}Sakura"], $delimiter);
            fputcsv($fp, ["Chino{$code}kafuu", "Inori{$code}Minase"], $delimiter);
            fputcsv($fp, ["Sharo{$code}Kirima", "Maya{$code}Uchida"], $delimiter);
        }
    }
}