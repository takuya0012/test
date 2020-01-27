<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class frameworks extends Model
{
    function up(){
        $dsn = 'mysql:host=localhost;dbname=testdb';
        $db_user = 'takuya';
        $db_pass = 'tk0201';

        try {
            var_dump("1");
            $pdo = new PDO($dsn, $db_user, $db_pass);
        } catch (PDOException $e) {
            var_dump("2");
            exit('データベース接続失敗。' . $e->getMessage());
        }
    }

    function dp(){
      var_dump("aaaaaa");
    }
}
