# 環境構築

## 下記レポジトリをForkする
https://github.com/sj-824/unit_test
## ディレクトリの作成・移動
任意のディレクトリを作成
```mkdir unit_test && cd unit_test```
## リポジトリをcloneする
```git clone https://github.com/{自分のユーザー名}/unit_test.git```
## ディレクトリの移動
```cd unit_test```
## コンテナの立ち上げ
```docker-compose up -d --build```
## phpunitのインストール
```docker-compose exec php composer require --dev phpunit/phpunit```
## phpunitの実行
```docker-compose exec php vendor/bin/phpunit src/tests```
