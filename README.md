# Microsoft Excel で開ける CSV 関連のフォーマットまとめ

## 調査

### 凡例

```
◎: 一発で開けた
◯: 開こうとするとウィザードが出現するが，デフォルトの設定で開けた
△: 開こうとするとウィザードが出現し，区切り文字を変更すれば開けた
✕: 文字化けしたり表示が崩れたりして開けなかった

文字コード.実際の中身のフォーマット.拡張子
```

なお，**ファイルをダブルクリックで開いてもウィザードは出現せず**，Excelメニューの「開く」を使う必要があります。  
ウィザードが省略された場合に使われるのは，ウィザードが表示された場合におけるデフォルトの設定です。

### 結果

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

## Contributors

- [@chitoku-k](https://github.com/chitoku-k)
- [@39ff](https://github.com/39ff)

Thank you very much!