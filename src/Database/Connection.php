<?php 
    namespace Miguel\ProjetoFinal\Database;

    use \PDO;
    use \PDOException;
    use Miguel\ProjetoFinal\Config;

    class Connection{
        public static function make(){
            try{
                return new PDO('mysql:host='.Config::DBHOSTNAME.';dbname='.Config::DBDATABASE, Config::DBUSERNAME, Config::DBUSERPASS);
            }catch(PDOException $e){
                exit($e -> getMessage());
            }
        }
    }
?>