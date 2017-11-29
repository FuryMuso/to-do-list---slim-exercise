<?php

class ViewHelperMethods {

    public function checkDoneStatus($task, $doneStatus)
    {
        return $task['done'] == $doneStatus;
    }

    public function displayToDo($task)
    {
        return "<td>" . $task['tasks'] . "</td>";
    }

}