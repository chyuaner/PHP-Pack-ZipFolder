PHP 當場壓縮並下載
======================

## 基礎參考
* Recursively Zip a directory with PHP - Ninad's Blog
    * Author: [Ninad](http://ninad.pundaliks.in/blog/2011/05/recursively-zip-a-directory-with-php)
    * Blog: <http://ninad.pundaliks.in/blog/2011/05/recursively-zip-a-directory-with-php/>
    * Github Source: <https://gist.github.com/ninadsp/6098467>

## 注意
* 非apache上，可能造成只有<http://localhost/DownloadZip.php>有效
* 伺服器上必須有 zip - PHP Extension
    * 可參考 [Linux 中安裝 php-zip 模組 -小灰狼php筆記](http://phpwolf.blogspot.tw/2012/04/linux-php-zip.html)
* 伺服器必需要開啟檔案寫入才能正常運作

## 用法
### 修改要打包壓縮的資料夾
修改`DownloadZip.php`的`$ZIP_FOLDER`為要壓縮的路徑 （結尾不需加上"/"字元）。

### 可修改檔名
可修改`DownloadZip.php`成`<你喜歡的檔名>.php`，不過`.htaccess`也需連帶修改，不然無法直接以`<你喜歡的檔名>.zip`下載。

### 下載當場打包壓縮的資料夾
可直接以 <http://localhost/DownloadZip.zip> 就能當場壓縮下載範例中`sample_file`資料夾內容。

也可從瀏覽器 <http://localhost/DownloadZip.php> 下載

## 資料參考
* [Creating ZIP File with PHP](http://www.9lessons.info/2012/06/creating-zip-file-with-php.html)
* [Zip Archive Folder with PHP « DBL-A Dev Blog](http://dev.dbl-a.com/php/zip-archive-folder-with-php/)
* [download - Downloading zip folder using php - Stack Overflow](http://stackoverflow.com/questions/17699466/downloading-zip-folder-using-php)
* [Apache - rewrite images to php file with .htaccess - Stack Overflow](http://stackoverflow.com/questions/12925567/apache-rewrite-images-to-php-file-with-htaccess)
* [PHP- $_SERVER 用法教學 - ↗﹑不二≠藝術°­★〞〆 - 無名小站](http://www.wretch.cc/blog/nap7582360/557814)
* [PHP- $_SERVER 的詳細用法 @ The MAN !!! :: 隨意窩 Xuite日誌:](http://blog.xuite.net/trully.hsiang/man/26168821)
* [PHP: $_SERVER - Manual](http://php.net/manual/en/reserved.variables.server.php)
* [php - How to get last key in an array? - Stack Overflow](http://stackoverflow.com/questions/2348205/how-to-get-last-key-in-an-array)
* [PHP 5.3.0 後 不建議使用 split() 的替代方式 - Tsung's Blog](http://blog.longwin.com.tw/2010/05/php-530-split-replcae-2010/)