<?php
class todos extends database\collection
{
    protected static $modelName = 'todo';
    //Returns records for particular user id
    public static  function findTasksbyID($userid) {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE ownerid = ?';
        $recordsSet = self::getResults($sql, $userid);
        if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet;
        }
    
    }
}
?>