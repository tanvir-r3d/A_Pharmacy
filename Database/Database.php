<?php
class Database{

  private $server_name=SERVER_NAME;
  private $user_name=USER_NAME;
  private $user_pass=USER_PASS;
  private $db_name=DB_NAME;

  public $db;

  function __construct()
  {
      $this->connection();
  }
  private function connection()
  {
    $this->db=new mysqli($this->server_name,$this->user_name,$this->user_pass,$this->db_name);
    if (!$this->db)
    {
      echo "Database Connection Problem!";
    }
  }

  public function insert($table_name,$value)
  {
    $query="INSERT INTO $table_name SET $value";
    $insert=$this->db->query($query) or die("ERROR".__LINE__);
    if ($this->db->affected_rows>0)
    {
      return $insert;
    }
    else {
      return false;
    }
  }

  public function select($table_name,$condition)
  {
    $query="SELECT * FROM $table_name WHERE $condition";
    $select=$this->db->query($query) or die("ERROR".__LINE__);
    if($this->db->affected_rows>0)
    {
      return $select;
    }
  }

  public function select_all($table_name)
  {
    $query="SELECT * FROM $table_name ";
    $select_all=$this->db->query($query) or die("ERROR".__LINE__);
    if($this->db->affected_rows>0)
    {
      return $select_all;
    }
  }

  public function get($data,$table_name,$condition)
  {
    $query="SELECT $data FROM $table_name WHERE $condition";
    $get=$this->db->query($query) or die("ERROR".__LINE__);
    if ($this->db->affected_rows>0)
    {
      return $get;
    }
  }

  public function destroy($table_name,$condition)
  {
    $query="DELETE FROM $table_name WHERE $condition";
    $destroy=$this->db->query($query) or die("ERROR".__LINE__);
    if ($destroy)
    {
      echo "DATA DELETED";
    }
  }

  public function update($table_name,$value,$condition)
  {
    $query="UPDATE $table_name SET $value WHERE $condition";
    $update=$this->db->query($query) or die("ERROR".__LINE__);
    if ($this->db->affected_rows>0)
    {
      return $update;
    }
  }

}
