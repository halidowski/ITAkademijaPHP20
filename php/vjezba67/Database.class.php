<?php

class Database{

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "bookstore";
    public $connection;

    public function connection(){

        $this->connection = new PDO(

            "mysql:host=" . $this->servername
            . ";dbname=" . $this->database
            ,$this->username
            ,$this->password);
    }

    public function get($table, $what, $where=null){

        if($where != NULL){
            $where = " WHERE " . $where;
        }

        $whatFinal = "";
        if(is_array($what)){

            $whatLength = count($what);
            $i = 0;

            foreach($what as $column){
                if($i == ($whatLength - 1)){
                    $whatFinal .= $column;

                }else{
                    $whatFinal .= $column . ", "; 
            }
            $i++;
        }

        return $whatFinal;
      }

    }

}

$baza = new Database();
$baza->connection();

echo $baza->get("users1", array('id', 'name', 'lastname', 'nickname'));

?>