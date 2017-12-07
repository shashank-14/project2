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
        //$array = get_object_vars($this);
        //print_r ($array);
        /*if ($INSERT == TRUE) {
            unset($array['id']);
        }
        foreach (array_flip($array) as $key => $value) {
            $statement->bindParam(":$value", $this->$value);
            echo $statement;
        }*/
        $statement->execute();
        //if ($INSERT == TRUE) {
        //    $this->id = $db->lastInsertId();
        //}
        //return $this->id;
    }
    
    public static function lastID(){
      //$modelName = static::$modelName;
      //$tableName = $modelName::getTablename();
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
        echo 'insert';
        $id=model::lastID();
        //echo $id;
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
        //unset($array['id']);
        //$columnString = implode(',', array_flip($array));
        //$valueString = ':' . implode(',:', array_flip($array));
        $columnString = array_keys($array);
        $columnString1=implode(',', $columnString);
        //echo $columnString1;
        $valueString = "'".implode("','", $array)."'";
        //echo $valueString;
        $sql = 'INSERT INTO ' . $tableName . ' (' . $columnString1 . ') VALUES (' . $valueString . ')';
        //echo '<br>'.$sql;
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
        
        print_r($record);
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($record);
        echo '<br>';
        print_r($array);
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