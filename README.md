# お問い合わせフォーム（Contact-form）

## 環境構築

- Docker ビルド
- 1.git clone git@github.com:coachtech-material/ laravel-docker-template.git
- 2.docker-compose up -d --build

- laravel 環境構築
- 1.docker-compose exec php bash
- 2.composer install
- 3.cp .env.example .env(.env.example ファイルから.env を作成し、環境変数を変更)
- 4.php artisan key:generate
- 5.php artisan migrate
- 6.php artisan db:seed

## 使用技術

- ・PHP 8.0
- ・Laravel 8.83.8
- ・MySQL 8.0

## URL

- ・開発環境：http://localhost/
- ・phpMyAdmin:http://localhost:8080/

## ER 図

![ER図](./index.png)

## URL

- ・開発環境：http://localhost/
- ・phpMyAdmin:http://localhost:8080/
# CopyContact-form
