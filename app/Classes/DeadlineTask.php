<?php
namespace app\Classes;

use app\Classes\Task;

class DeadlineTask extends Task {
    protected $startDate;
    protected $dueDate;

    //Methods
    public function __construct( $title, $description, $startDate, $dueDate ) {
        parent::__construct( $title, $description );
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
    }

    //Getters
    public function getStartDate() {
        return $this->startDate;
    }

    public function getDueDate() {
        return $this->dueDate;
    }

    public function getPriority() {
        return "Low";
    }

    public function markAsCompleted() {
        $this->completed = true;
    }
}