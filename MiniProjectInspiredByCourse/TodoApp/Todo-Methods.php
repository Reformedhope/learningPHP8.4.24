<?php
class TodoMethods {
    public $toDoTasks = 'Tasks still to do'; 
    public $completedTasks = 'Great job you completed these tasks';

    function getUncompletedTasks($name = "wash dishes", $timelimit = "20 minutes"){
        $fullTask = $this->toDoTasks;

         

        return $fullTask . '</br>' . $name . '</br>' .$timelimit; 

    }

    public function getCompletedTasks(){
        $completed = $this->completedTasks; 

        return $completed;
    }




}

$todo = new TodoMethods();
print $todo->getUncompletedTasks();

print $todo->getCompletedTasks();


?>