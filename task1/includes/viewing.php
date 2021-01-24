<?php 

    Class ViewUser extends Users
{ 
    public function showAllUsers() {
        $datas = $this->getAllUsers();
        foreach ($datas as $data) {
            echo $data['id']." ";
            echo $data['login']."<br>";
        }
        
        
    
    }
}
?>