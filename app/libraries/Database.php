<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $pdo;
    private $stmt;
    private $error;

    public function __construct()
    {
        //to connect to the mysql database
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        //mean separate different part, In this  ; means end of the host part and beginning of the database
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false // For General Error
        );

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
            // print_r($this->pdo);
            // echo "Success";
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function create($table, $data)
    {
        try {
            $column = array_keys($data);
            $columnSql = implode(', ', $column);
            $bindingSql = ':' . implode(',:', $column);
            //echo $bindingSql;
            $sql = "INSERT INTO $table ($columnSql) VALUES ($bindingSql)";
            // echo $sql;
            $stm = $this->pdo->prepare($sql);  
            foreach ($data as $key => $value) {
                $stm->bindValue(':' . $key, $value);
            }
            // print_r($stm);
            $status = $stm->execute();
            // echo $status;
            return ($status) ? $this->pdo->lastInsertId() : false;
        } catch (PDOException $e) {
            echo $e;
        }
    }
    // Update Query
    public function update($table, $id, $data)
    {   
        // First, we don't want id from category table
        if (isset($data['id'])) {
            unset($data['id']);
        }

        try {
            $columns = array_keys($data);
            function map ($item) {
                return $item . '=:' . $item;
            }
            $columns = array_map('map', $columns);
            $bindingSql = implode(',', $columns);
            // echo $bindingSql;
            // exit;
            $sql = 'UPDATE ' .  $table . ' SET ' . $bindingSql . ' WHERE `id` =:id';
            $stm = $this->pdo->prepare($sql);

            // Now, we assign id to bind
            $data['id'] = $id;

            foreach ($data as $key => $value) {
                $stm->bindValue(':' . $key, $value);
            }
            $status = $stm->execute();
            // print_r($status);
            return $status;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function delete($table, $id)
    {
        $sql = 'DELETE FROM ' . $table . ' WHERE `id` = :id';
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':id', $id);
        $success = $stm->execute();
        return ($success);
    }

    public function columnFilter($table, $column, $value)
    {
        // $sql = 'SELECT * FROM ' . $table . ' WHERE `' . $column . '` = :value';
        $sql = 'SELECT * FROM ' . $table . ' WHERE `' . str_replace('`', '', $column) . '` = :value';
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':value', $value);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function loginCheck($email, $password)
    {
        $sql = 'SELECT * FROM users WHERE `email` = :email AND `password` = :password';
        // echo $sql;
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':email', $email);
        $stm->bindValue(':password', $password);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function setLogin($id)
    {
        $sql = 'UPDATE users SET `is_login` = :value WHERE `id` = :id';
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':value', 1);
        $stm->bindValue(':id', $id);
        $success = $stm->execute();
        $stm->closeCursor();    // to solve PHP Unbuffered Queries
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function unsetLogin($id)
    {
       try{ 
           $sql = "UPDATE users SET is_login = :false WHERE id = :id"; //is_login = :false .is a placeholder to indicate user login(true) or not(false)
                                                                              // id = :id also 
           $stm = $this->pdo->prepare($sql);
           $stm->bindValue(':false','0');
           $stm->bindValue(':id',$id);
           $success = $stm->execute();
           $row     = $stm->fetch(PDO::FETCH_ASSOC);
           return ($success) ? $row : [];
        }
        catch( Exception $e)
        {
            echo($e);
        }
    }

    public function readAll($table)
    {
        $sql = 'SELECT * FROM ' . $table;
        // print_r($sql);
        $stm = $this->pdo->prepare($sql);
        $success = $stm->execute();
        $row = $stm->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function getById($table, $id)
    {
        $sql = 'SELECT * FROM ' . $table . ' WHERE `id` =:id';
        // print_r($sql);
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function getByCategoryId($table, $column)
    {
        $stm = $this->pdo->prepare('SELECT * FROM ' . $table . ' WHERE name =:column');
        $stm->bindValue(':column', $column);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
       //  print_r($row);
        return ($success) ? $row : [];
    }
    public function getByCategoryAndCuisine($table, $column1,$column2)
    {
        $stm = $this->pdo->prepare('SELECT * FROM ' . $table. ' WHERE category_name =:column1 and cuisine_name =:column2');
        // $stm = $this->pdo->prepare('SELECT * FROM $table where category_name=$column1 and cuisine_name=$column2');
        $stm->bindValue(':column1', $column1);
        $stm->bindValue(':column2', $column2);
        $success = $stm->execute();
        $row = $stm->fetchAll(PDO::FETCH_ASSOC);
       //  print_r($row);
        return ($success) ? $row : [];
    }
    // For Dashboard
    public function getTotalCount($table)
    {
        $sql = 'SELECT COUNT(*) as total FROM ' . $table;
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
 
     
        return $result['total'];
    }

     // Method to read a record by ID
     public function readById($table, $id) {
        try {
            $query = "SELECT * FROM $table WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            // Handle errors gracefully, e.g., log or return false
            return false;
        }
    }

    public function filterByMultipleColumns($table, $conditions)
    {
        // Initialize the SQL query
        $sql = 'SELECT * FROM ' . $table . ' WHERE ';
        
        // Create an array to hold the column-value pairs for the SQL query
        $clauses = [];
        $parameters = [];

        // Loop through the conditions array to build the SQL query dynamically
        foreach ($conditions as $column => $value) {
            // Skip empty values
            if (empty($value)) {
                continue;
            }
            
            $column = str_replace('`', '', $column); // Remove any backticks from column names
            $clauses[] = "`$column` = :$column";
            $parameters[":$column"] = $value;
        }

        // Join the clauses with 'AND' to form the final WHERE clause
        if (empty($clauses)) {
            return []; // Return empty array if no conditions
        }
        
        $sql .= implode(' AND ', $clauses);

        // Prepare and execute the SQL statement
        $stm = $this->pdo->prepare($sql);

        // Bind the values dynamically
        foreach ($parameters as $param => $value) {
            $stm->bindValue($param, $value);
        }

        // Execute the statement and fetch all results
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        
        // Return the results
        return ($success) ? $row : [];
    }


}

