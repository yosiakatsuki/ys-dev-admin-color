# 開発環境のカラーを強制変更するプラグイン(ys-dev-admin-color)

開発環境のWordPressサイトを操作しているのか、本番サイトのWordPressサイトを操作しているのかをわかりやすくするため、管理画面の色設定を強制的に変更するプラグインです。

## ダウンロード
GitHubのリリースページから最新のものをダウンロードしてください。

[https://github.com/yosiakatsuki/ys-dev-admin-color/releases](https://github.com/yosiakatsuki/ys-dev-admin-color/releases)

## 使い方

1. `config-sample.json`をコピー・リネームして`config.json`を作ります。
2. `config-sample.json`の中身を参考に`user_name`(キー)をユーザー名またはメールアドレスに変更します。
3. 対応するカラー設定を`config-sample.json`に既に記載されている9種類の中から選びます。

## mu-pluginsに入れる場合

`ys-dev-admin-color`ディレクトリを`mu-plugins`内にコピーし、`mu-ys-dev-admin-color.php`を`mu-plugins`直下にコピーします。
