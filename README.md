# Laravel 11 消除垃圾郵件散播者和假資料的擔憂

引入 rahulalam31 的 laravel-abuse-ip 套件來擴增消除垃圾郵件散播者和假資料的擔憂，封鎖 IP 位址可防止特定 IP 位址或 IP 位址組與伺服器、電腦或與應用程式的連接。通常會利用封鎖 IP 位址，以防止有害伺服器連接到服務。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __abuseip:update__ 來取得最新 AbuseIPDB 的資料庫。
```sh
$ php artisan abuseip:update
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/` 來進行歡迎畫面瀏覽。

----

## 畫面截圖
![](https://i.imgur.com/wSJreYP.png)
> 根據 AbuseIPDB 的資料庫（或自訂）主動防堵可能有害的 IP 位址，提高資料安全性

![](https://i.imgur.com/7iusTW5.png)
> 如果某個核准的 IP 位址遭到封鎖，移除封鎖清單來允許存取
