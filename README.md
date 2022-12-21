# docker環境でのlaravel基本環境構築


## 起動コマンド
```
docker-compose build

docker-compose up -d

docker ps

docker exec -it laravel_app bash
// 8以上のlaravelのプロジェクトを作成
// laravelapp =>프로젝트 이름
composer create-project "laravel/laravel=~8.0" --prefer-dist laravelapp
// 위는 버전선택 하여 라라벨 작성
// 밑의 커맨드는 최신버젼의 라라벨 다운로드
composer create-project laravel/laravel --prefer-dist laravelapp

// 웹에서 입력
http://localhost:8000

//DB設定
DB_CONNECTION=mysql
DB_HOST=laravel_db
DB_PORT=3306
DB_DATABASE=laraveldb
DB_USERNAME=dbuser
DB_PASSWORD=dbpass

//DB설정
docker exec -it laravel_app bash
cd laravel_app
php artisan migrate

//phpmyadmin
http://localhost:3000/

//mysql serverに入る
docker exec -it laravel_db bash

mysql -uroot -p 

Enter password:（docker-compose.ymlで決めたrootユーザのパスワード）

show databases;

use laraveldb;

show tables;
```
# docker環境でのlaravel基本環境構築


## 起動コマンド
```
docker-compose build

docker-compose up -d

docker ps

docker exec -it laravel_app bash
// 8以上のlaravelのプロジェクトを作成
// laravelapp =>프로젝트 이름
composer create-project "laravel/laravel=~8.0" --prefer-dist laravelapp
// 위는 버전선택 하여 라라벨 작성
// 밑의 커맨드는 최신버젼의 라라벨 다운로드
composer create-project laravel/laravel --prefer-dist laravelapp

// 웹에서 입력
http://localhost:8000

//DB設定
DB_CONNECTION=mysql
DB_HOST=laravel_db
DB_PORT=3306
DB_DATABASE=laraveldb
DB_USERNAME=dbuser
DB_PASSWORD=dbpass

//DB설정
docker exec -it laravel_app bash
cd laravel_app
php artisan migrate

//phpmyadmin
http://localhost:3000/

//mysql serverに入る
docker exec -it laravel_db bash

mysql -uroot -p 

Enter password:（docker-compose.ymlで決めたrootユーザのパスワード）

show databases;

use laraveldb;

show tables;
```
----------------------------------------------------------
//로그인 기능 
//최신 버젼의 ui를 다운로드
composer require laravel/ui:*
//bootstrap의 인증 을 다운로드
php artisan ui bootstrap --auth
//vue의 인증을 다운로드
php artisan ui vue --auth

npm install && npm run dev

npm run build
//laravel9 부터는 vite가 실행된다... 기존보다 속도가 빠름.
----------------------------------------------------------

Laravel Breezeのインストール
https://chigusa-web.com/blog/laravel8-breeze/

composer require laravel/breeze --dev
php artisan breeze:install
artisan migrate
npm install
npm run dev
