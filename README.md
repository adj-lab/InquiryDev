# お問い合わせフォーム

## 環境構築

### Docker ビルド

1.git clone
2.docker-compose up -d --build
　 MySQL は、作業端末で.evn を作成し任意の変数を用意

### Laravel 環境構築

1.docker-compose exec php bash
2.composer install
3..env.example ファイルから.env ファイル作成、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

## 使用技術

- NGINX1.21.1
- PHP7.4.9
- Laravel8.83.29
- MySQL8.0.26

## URL
- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/