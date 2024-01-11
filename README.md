# 環境構築

## コンテナの立ち上げ
```docker-compose up -d --build```
## phpunitのインストール
```docker-compose exec phpunit composer require --dev phpunit/phpunit```
## phpunitの実行
```docker-compose exec php vendor/bin/phpunit src/tests```
