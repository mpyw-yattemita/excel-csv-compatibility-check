# Microsoft Excel で開ける CSV 関連のフォーマットまとめ

## 調査

### 凡例

#### 文字コードに関して

```
◎: 一発で開けた
◯: 開こうとするとウィザードが出現するが，デフォルトの設定で開けた
△: 開こうとするとウィザードが出現し，区切り文字を変更すれば開けた
▲: ウィザードを抑制する手段を使えば開けた
✕: 文字化けしたり表示が崩れたりして開けなかった

文字コード.実際の中身のフォーマット.拡張子: 記号
```

#### 改行コードに関して

```
◎: 常に一発で開けた
◯: 開こうとするとウィザードが出現するが，デフォルトの設定で開けた
△: 開こうとするとウィザードが出現し，改行文字を変更すれば開けた
▲: ウィザードを抑制する手段を使えば開けた
✕: 表示が崩れて開けなかった

改行コード.実際の中身のフォーマット.拡張子: 記号
```

- Windows版では，メニューの「開く」とダブルクリックのどちらを利用してもウィザードは出現します。敢えてウィザードを抑制したい場合は<br><br>`excel.exe ファイル名`<br><br>のようにコマンドラインから実行します。`excel.exe`にパスが通っている必要があります。
- **Mac版では，メニューの「開く」のみからしかウィザードは出現しません。**`*.csv`をウィザード無しに開く場合にはダブルクリックを使います。また，`*.tsv`の場合には<br><br>`open -a /Applications/Microsoft\ Excel.app ファイル名`<br><br>のようにコマンドラインから実行します。

### 結果

#### (Windows) Office 2010

```
Shift_JIS.CSV.csv: ◎
Shift_JIS.CSV.tsv: △
Shift_JIS.TSV.csv: ✕
Shift_JIS.TSV.tsv: ◯
UTF-16_LE.CSV.csv: △
UTF-16_LE.CSV.tsv: △
UTF-16_LE.TSV.csv: ◯
UTF-16_LE.TSV.tsv: ◯
UTF-8.CSV.csv: 
UTF-8.CSV.tsv: 
UTF-8.TSV.csv: 
UTF-8.TSV.tsv: 
UTF-8N.CSV.csv: 
UTF-8N.CSV.tsv: 
UTF-8N.TSV.csv: 
UTF-8N.TSV.tsv: 
CRLF.CSV.csv: 
CRLF.CSV.tsv: 
CRLF.TSV.csv: 
CRLF.TSV.tsv: 
LF.CSV.csv: 
LF.CSV.tsv: 
LF.TSV.csv: 
LF.TSV.tsv: 
CR.CSV.csv: 
CR.CSV.tsv: 
CR.TSV.csv: 
CR.TSV.tsv: 
```

#### (Windows) Office 2013

```
Shift_JIS.CSV.csv: ◎
Shift_JIS.CSV.tsv: △
Shift_JIS.TSV.csv: ✕
Shift_JIS.TSV.tsv: ◯
UTF-16_LE.CSV.csv: △
UTF-16_LE.CSV.tsv: △
UTF-16_LE.TSV.csv: ◯
UTF-16_LE.TSV.tsv: ◯
UTF-8.CSV.csv: 
UTF-8.CSV.tsv: 
UTF-8.TSV.csv: 
UTF-8.TSV.tsv: 
UTF-8N.CSV.csv: 
UTF-8N.CSV.tsv: 
UTF-8N.TSV.csv: 
UTF-8N.TSV.tsv: 
CRLF.CSV.csv: 
CRLF.CSV.tsv: 
CRLF.TSV.csv: 
CRLF.TSV.tsv: 
LF.CSV.csv: 
LF.CSV.tsv: 
LF.TSV.csv: 
LF.TSV.tsv: 
CR.CSV.csv: 
CR.CSV.tsv: 
CR.TSV.csv: 
CR.TSV.tsv: 
```

#### (Windows) Office 2016

```
Shift_JIS.CSV.csv: ◎
Shift_JIS.CSV.tsv: △
Shift_JIS.TSV.csv: ✕
Shift_JIS.TSV.tsv: ◯
UTF-16_LE.CSV.csv: △
UTF-16_LE.CSV.tsv: △
UTF-16_LE.TSV.csv: ◯
UTF-16_LE.TSV.tsv: ◯
UTF-8.CSV.csv: 
UTF-8.CSV.tsv: 
UTF-8.TSV.csv: 
UTF-8.TSV.tsv: 
UTF-8N.CSV.csv: 
UTF-8N.CSV.tsv: 
UTF-8N.TSV.csv: 
UTF-8N.TSV.tsv: 
CRLF.CSV.csv: 
CRLF.CSV.tsv: 
CRLF.TSV.csv: 
CRLF.TSV.tsv: 
LF.CSV.csv: 
LF.CSV.tsv: 
LF.TSV.csv: 
LF.TSV.tsv: 
CR.CSV.csv: 
CR.CSV.tsv: 
CR.TSV.csv: 
CR.TSV.tsv: 
```

#### Office for Mac 2011

```
Shift_JIS.CSV.csv: ◎
Shift_JIS.CSV.tsv: △
Shift_JIS.TSV.csv: ✕
Shift_JIS.TSV.tsv: ◯
UTF-16_LE.CSV.csv: △
UTF-16_LE.CSV.tsv: △
UTF-16_LE.TSV.csv: ◯
UTF-16_LE.TSV.tsv: ◯
UTF-8.CSV.csv: 
UTF-8.CSV.tsv: 
UTF-8.TSV.csv: 
UTF-8.TSV.tsv: 
UTF-8N.CSV.csv: 
UTF-8N.CSV.tsv: 
UTF-8N.TSV.csv: 
UTF-8N.TSV.tsv: 
CRLF.CSV.csv: 
CRLF.CSV.tsv: 
CRLF.TSV.csv: 
CRLF.TSV.tsv: 
LF.CSV.csv: 
LF.CSV.tsv: 
LF.TSV.csv: 
LF.TSV.tsv: 
CR.CSV.csv: 
CR.CSV.tsv: 
CR.TSV.csv: 
CR.TSV.tsv: 
```

#### Office 2016 for Mac

```
Shift_JIS.CSV.csv: ◎
Shift_JIS.CSV.tsv: △
Shift_JIS.TSV.csv: ✕
Shift_JIS.TSV.tsv: ◯
UTF-16_LE.CSV.csv: △
UTF-16_LE.CSV.tsv: △
UTF-16_LE.TSV.csv: ◯
UTF-16_LE.TSV.tsv: ◯
UTF-8.CSV.csv: ▲
UTF-8.CSV.tsv: ▲
UTF-8.TSV.csv: ✕
UTF-8.TSV.tsv: ✕
UTF-8N.CSV.csv: ✕
UTF-8N.CSV.tsv: ✕
UTF-8N.TSV.csv: ✕
UTF-8N.TSV.tsv: ✕
CRLF.CSV.csv: ✕
CRLF.CSV.tsv: ✕
CRLF.TSV.csv: ✕
CRLF.TSV.tsv: ✕
LF.CSV.csv: ✕
LF.CSV.tsv: ✕
LF.TSV.csv: ✕
LF.TSV.tsv: ✕
CR.CSV.csv: ◯
CR.CSV.tsv: ✕
CR.TSV.csv: ✕
CR.TSV.tsv: ✕
```

<!--
以下の製品を対象としました。

- Office 2010
- Office 2013
- Office 2016
- Office for Mac 2011
- Office 2016 for Mac

結果はすべて同一でした。

```
Shift_JIS.CSV.csv: ◎
Shift_JIS.CSV.tsv: △
Shift_JIS.TSV.csv: ✕
Shift_JIS.TSV.tsv: ◯
UTF-16_LE.CSV.csv: △
UTF-16_LE.CSV.tsv: △
UTF-16_LE.TSV.csv: ◯
UTF-16_LE.TSV.tsv: ◯
```

## 結論

ダブルクリックでスムーズに開けることを重視する場合，以下のような選択肢となります。

```
Shift_JIS.CSV.csv: ◎
UTF-16_LE.TSV.csv: ◯
```

拡張子の意味を重視し，ダブルクリックで開けることにこだわらないのであれば，以下のような選択肢となります。

```
Shift_JIS.CSV.csv: ◎
Shift_JIS.TSV.tsv: ◯
UTF-16_LE.TSV.tsv: ◯
```

エンジニア系のユーザを対象にする場合は，文字化けリスクのあるShift_JISを採用する理由は皆無なので，以下のような選択肢が無難です。

```
UTF-16_LE.CSV.csv: △
UTF-16_LE.TSV.tsv: ◯
```
-->

## 追記

Issue [#7](https://github.com/mpyw-yattemita/excel-csv-compatibility-check/issues/7) の報告によれば，Excel 2016 for Windows ではUTF-8Nがサポートされた可能性があります。但し，Office Insider に限定しない全体を対象としたアップデート時期などについては不明です。情報が入手でき次第編集します。

## Contributors

- [@chitoku-k](https://github.com/chitoku-k)
- [@39ff](https://github.com/39ff)

Thank you very much!