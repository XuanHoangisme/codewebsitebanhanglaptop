<?php
class Database {
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $db_name = DB_NAME;
    public $link;
    public $error;

    public function __construct() {
        $this->connectDB();
    }

    public function connectDB() {
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        if ($this->link->connect_error) {
            $this->error = "Connection failed: " . $this->link->connect_error;
            return false;
        }
        return true;
    }

    //select or read data
    public function select($query) {
        $result = $this->link->query($query);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    //insert data
    public function insert($query) {
        $insert_row = $this->link->query($query) or die($this->link->error . "__LINE__");
        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

    //update data
    public function update($query) {
        $update_row = $this->link->query($query) or die($this->link->error . "__LINE__");
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

    //delete data
    public function delete($query) {
        $delete_row = $this->link->query($query) or die($this->link->error . "__LINE__");
        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
        }
    }
}
?>
