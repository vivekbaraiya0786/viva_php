<?php

class Config{
    public $HOSTNAME = "localhost";
    public $SERVERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "viva";
    public $connect_res;

    public function connect(){
        $this->connect_res = mysqli_connect($this->HOSTNAME, $this->SERVERNAME, $this->PASSWORD, $this->DB_NAME);
        return $this->connect_res;
    }


    public function insert($name,$post,$salary,$comname){
        $this->connect();

        $query = "INSERT INTO employees(name, post, salary, comname) VALUES ('$name','$post','$salary','$comname');";

        $res = mysqli_query($this->connect_res,$query);

        return $res;
    }

    public function fetch(){
        $this->connect();

        $query = "SELECT * FROM employees";
        $res = mysqli_query($this->connect_res,$query);
        return $res;
    }

    public function delete($id){
        $this->connect();
        $query = "DELETE FROM employees WHERE id='$id';";
        $res = mysqli_query($this->connect_res,$query);
        return $res;
    }



}
?>