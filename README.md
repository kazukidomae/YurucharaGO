# 開発環境をするまで

1. C/xampp/htdocsに移動
2. git clone https://github.com/kazukidoumae/YurucharaGO.git
3. composer install
4. vendor/.env.exmpleの.exmpleを削除(「ファイル名を.envにする」)
5. php artisan key:generate（.envファイルにkeyが生成される）
6. Apacheを起動
7. http://localhost/YurucharaGO/public/ でLaravelのページが表示されればOK
