<?php
namespace database;
abstract class model
{
    public function save()
    {
        if ($this->id != '') {
            $sql = $this->update();
        } else {
            $sql = $this->insert();
            $INSERT = TRUE;
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
    }
    
    public function lastID(){
      $modelName = static::$modelName;
      $tableName = $modelName::getTablename();
      $db = dbConn::getConnection();
      $sql='select MAX(id) from todos';
      $statement = $db->prepare($sql);
      $statement->execute();
      $statement->setFetchMode();
      $recordsSet =  $statement->fetchAll(\PDO::FETCH_ASSOC);
      $record=$recordsSet[0];
      $LastID= $record["MAX(id)"];
      return $LastID+1;
    }
    private function insert()
    {
        $id=$this->lastID();
        $record= new \todo;
        $record->id=$id;
        $record->owneremail=$_POST['owneremail'];
        $record->ownerid=$_POST['ownerid'];
        $record->createddate=$_POST['createddate'];
        $record->duedate=$_POST['duedate'];
        $record->message=$_POST['message'];
        $record->isdone=$_POST['isdone'];
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($record);
        $columnString = array_keys($array);
        $columnString1=implode(',', $columnString);
        $valueString = "'".implode("','", $array)."'";
        $sql = 'INSERT INTO ' . $tableName . ' (' . $columnString1 . ') VALUES (' . $valueString . ')';
        return $sql;
    }
    private function update()
    {
        $record= new \todo;
        $record->id=$_REQUEST['id'];
        $record->owneremail=$_POST['owneremail'];
        $record->ownerid=$_POST['ownerid'];
        $record->createddate=$_POST['createddate'];
        $record->duedate=$_POST['duedate'];
        $record->message=$_POST['message'];
        $record->isdone=$_POST['isdone'];
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($record);
        $comma = " ";
        $sql = 'UPDATE ' . $tableName . ' SET ';
        foreach ($array as $key => $value) {
            if (!empty($value)) {
            echo '<br>';
            echo $value;
                $sql .= $comma . $key . ' = "' . $value . '"';
                $comma = ", ";
            }
        }
        $sql .= ' WHERE id=' . $this->id;
        return $sql;
    }
    public function delete()
    {
        $db = dbConn::getConnection();
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $sql = 'DELETE FROM ' . $tableName . ' WHERE id=' . $this->id;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}
?>