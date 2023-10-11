<?php
namespace app\Traits;

trait HasAssigneeTrairt {
    protected $assignees = [];

    public function addAssignee( $assignee ) {
        $this->assignee = $assignee;
    }

    public function getAssignees() {
        return $this->assignees;
    }
}