# Microsoft Excel で開ける CSV 関連のフォーマットまとめ

## プラットフォーム別早見表

2010年より古いものは考慮しません。

#### 凡例

```
◎: 一発で開けた
◯: 開こうとするとウィザードが出現するが，デフォルトの設定で開けた
△: 開こうとするとウィザードが出現し，区切り文字を変更すれば開けた
✕: 文字化けしたり表示が崩れたりして開けなかった

文字コード.実際の中身のフォーマット.拡張子
```

なお，**ファイルをダブルクリックで開いてもウィザードは出現せず**，Excelメニューの「開く」を使う必要があります。  
ウィザードが省略された場合に使われるのは，ウィザードが表示された場合におけるデフォルトの設定です。

### Windows

#### Office 2010

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

#### Office 2013

```
```

#### Office 2016

```
```

### Mac

#### Office for Mac 2011

```
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
```

## Contribution

不明である場所は空けてあります。空欄埋めにご協力ください。  
`questionnaire_form.txt`の形式で Pull Request または Issue でご報告ください。  
各ファイルは `files` の中にあります。

