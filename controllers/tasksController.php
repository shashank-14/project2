<?php

class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }
    //to call the show function the url is index.php?page=task&action=list_task
    public static function all()
    {
        $records = todos::findAll();
        self::getTemplate('all_tasks', $records);
    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks
    //you should check the notes on the project posted in moodle for how to use active record here
    public static function create()
    {
        //$record = todos::findOne($_REQUEST['id']);
        //if($re)
        self::getTemplate('create_task', NULL);
        //print_r($_POST);
    }
    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
    }
    //this would be for the post for sending the task edit form
    public static function store()
    {
        //$record = todos::findOne($_REQUEST['id']);
        //print_r($record);
        //$record->body = $_REQUEST['body'];
        //echo '<br>';
        $id=$_REQUEST['id'];
        if($id==null){
          $record=new \todo;
          $record->save(); 
        }
        else{
          echo 'id '.$id;
          $record = todos::findOne($_REQUEST['id']);
          $record->save();
          }
        header('Location:index.php?page=tasks&action=all');
        
        //$record->save();
        //print_r($_POST);
    }
    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header('Location:index.php?page=tasks&action=all');
    }
}
?>