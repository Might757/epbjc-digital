<?php 
class dataAccess{
    private $connection;

    private function connect(){
        $db = "epbjc_digital";
        $user = "root";
        $pwd = "";
        $server = "localhost";


        $this->connection = mysqli_connect($server, $user, $pwd, $db);

        if(!$this->connection){
            die("error: ".mysqli_connect_error());
        }else{
            $this->execute("set names 'utf8'");
            $this->execute("set character_set_connection=utf8");
            $this->execute("set character_set_client=utf8");
            $this->execute("set character_set_results=utf8");
        }
    }

    private function execute($command){
        $res = mysqli_query($this->connection, $command);
        if(!$res)
            die("invalid query: ".mysqli_error($this->connection));
        else
            return $res;
    }

    private function disconnect(){
        mysqli_close($this->connection);
    }

    private function bridge($query){
        $this->connect();
        $res = $this->execute($query);
        $this->disconnect();
        return $res;
    }


?>