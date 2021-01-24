<?php 

    Class Database {
    private $host;
    private $user ;
    private $pass ;
    private $db;

        
    protected function connect() {
        $this->host = "";
        $this->user = "";
        $this->pass = "";
        $this->db = "";
        
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        return $conn;
    
    }
        
}
?>
