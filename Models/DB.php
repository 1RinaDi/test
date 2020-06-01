<?php
    define('DB_Host', "localhost");
    define('DB_Name', "test");
    define('DB_Username', "root");
    define('DB_PassWord', "");
    define('DB_char', 'utf8');

    class DB{
        static $instance;

        public static function Get_Instance(){
            if(self::$instance ==  null)
                self::$instance =  new PDO('mysql:host='.DB_Host.'; dbname='.DB_Name.';charset='.DB_char,
                    DB_Username, DB_PassWord);
            return self::$instance;
        }

        public static function Execute($SQL, $Args){
            $s = self::Get_Instance()->prepare($SQL);
            $s->execute($Args);
            return $s->fetchAll();
        }
    }
?>