<?php
class RegistrationModel extends Model
{
    public function find(string $tablename, string $id)
    {
        
    }

    public function findall(string $tablename)
    {
        
    }

    public function add(string $tablename, array $fields)
    {
        
        $result = $this->sql->query("INSERT INTO citizen (First_Name, Last_Name, License_No, National_ID, Password_) VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger','password')");
        if(!$result){
            die('Could not add citizen '.$this->sql->error);
        }
        
    }

    public function del(string $tablename, string $id)
    {
        
    }

    public function update(string $tablename, array $fields)
    {
        
    }
}