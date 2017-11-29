<?php

class Task
{
    public $id;
    public $task;
    public $done;

    /**
     * Tasks constructor.
     */

    public function checkDoneStatus($task, $doneStatus)
    {
        return $task['done'] == $doneStatus;
    }

}