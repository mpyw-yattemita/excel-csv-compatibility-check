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

- Windows版及びMac版では，メニューの「開く」からのみしかウィザードは出現しません。`*.csv`をウィザード無しに開く場合にはダブルクリックを使います。また，`*.tsv`の場合には次のように実行します。
  - Windows (ファイル名を指定して実行)
    - `excel.exe ファイル名`
  - Mac (コマンドライン)
    - `open -a /Applications/Microsoft\ Excel.app ファイル名`

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
UTF-8.CSV.csv: ◎
UTF-8.CSV.tsv: ▲
UTF-8.TSV.csv: ×
UTF-8.TSV.tsv: ×
UTF-8N.CSV.csv: ×
UTF-8N.CSV.tsv: ×
UTF-8N.TSV.csv: ×
UTF-8N.TSV.tsv: ×
CRLF.CSV.csv: ◎
CRLF.CSV.tsv: ×
CRLF.TSV.csv: ×
CRLF.TSV.tsv: ▲
LF.CSV.csv: ◎
LF.CSV.tsv: ×
LF.TSV.csv: ×
LF.TSV.tsv: ▲
CR.CSV.csv: ×
CR.CSV.tsv: ×
CR.TSV.csv: ×
CR.TSV.tsv: ×
```

#### (Windows) Office 2013

```
Shift_JIS.CSV.csv: ◎
Shift_JIS.CSV.tsv: △
Shift_JIS.TSV.csv: ✕
Shift_JIS.TSV.tsv: ◎
UTF-16_LE.CSV.csv: △
UTF-16_LE.CSV.tsv: △
UTF-16_LE.TSV.csv: ◎
UTF-16_LE.TSV.tsv: ◎
UTF-8.CSV.csv: ◎
UTF-8.CSV.tsv: ▲
UTF-8.TSV.csv: ×
UTF-8.TSV.tsv: ◎
UTF-8N.CSV.csv: ×
UTF-8N.CSV.tsv: ×
UTF-8N.TSV.csv: ×
UTF-8N.TSV.tsv: ×
CRLF.CSV.csv: ◎
CRLF.CSV.tsv: ×
CRLF.TSV.csv: ×
CRLF.TSV.tsv: ▲
LF.CSV.csv: ◎
LF.CSV.tsv: ×
LF.TSV.csv: ×
LF.TSV.tsv: ▲
CR.CSV.csv: ×
CR.CSV.tsv: ×
CR.TSV.csv: ×
CR.TSV.tsv: ×
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
UTF-8.CSV.csv: ▲
UTF-8.CSV.tsv: ▲
UTF-8.TSV.csv: ×
UTF-8.TSV.tsv: ×
UTF-8N.CSV.csv: ×
UTF-8N.CSV.tsv: ×
UTF-8N.TSV.csv: ×
UTF-8N.TSV.tsv: ×
CRLF.CSV.csv: ◎
CRLF.CSV.tsv: ×
CRLF.TSV.csv: ×
CRLF.TSV.tsv: ▲
LF.CSV.csv: ◎
LF.CSV.tsv: ×
LF.TSV.csv: ×
LF.TSV.tsv: ▲
CR.CSV.csv: ×
CR.CSV.tsv: ×
CR.TSV.csv: ×
CR.TSV.tsv: ×
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
CR.CSV.csv: ◎
CR.CSV.tsv: ✕
CR.TSV.csv: ✕
CR.TSV.tsv: ▲
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
-->

## 暫定的な結論

### 文字コードのみを考慮

まず，Windows版とMac版で同じ挙動になるものを優先すべきです。そのため，現時点ではUTF-8は選択肢から外れます。それを踏まえた上で，ダブルクリックでスムーズに開けることを重視する場合，以下のような選択肢となります。

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

### セル内改行が含まれることを踏まえて，改行コードも考慮

`文字コード.改行コード.実際の中身のフォーマット.拡張子` で表現します。

```
Shift_JIS.*.CSV.csv: ◎
UTF-16_LE.*.CSV.csv: △
```

- Windows版を使う場合は，`*`の部分に`CRLF`と`LF`を適用することができます。
- Mac版を使う場合は，`*`の部分に`CR`を適用することができます。

ご覧の通り，完全な互換性を確保することは不可能です。但し，`CRLF`をMac版で開いたときには**2行目以降の先頭に空白ができる**という被害だけで済むので，1ファイルに統一したい場合は`CRLF`を使うと良いでしょう。見た目は半角スペースと同じなので，編集時に本物の半角スペースに置き換えてしまわないように注意しましょう。

## Contributors

- [@chitoku-k](https://github.com/chitoku-k)
- [@39ff](https://github.com/39ff)

Thank you very much!
