<?php
abstract class Model
{
    public $sql = null;

    public function __construct(string $user, string $pass, string $db, string $host)
    {
        $this->sql = mysqli_connect($host, $user, $pass, $db);
        if(!$this->sql){
            die('Cannot connect to database');
        }
    }

    // Returns all records in a table
    abstract public function findall(string $tablename);

    // Returns one record from a table with the given id
    abstract public function find(string $tablename, string $id);

    // Deletes a record from a table with given id
    abstract public function del(string $tablename, string $id);

    // Updates the database
    abstract public function update(string $tablename, array $fields);

    // Adds a record to a table
    // abstract public function add(string $tablename, array $fields);

}