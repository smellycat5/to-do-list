<?php

class Task{
    public $description;
    public $completed = false;
    public function complete(){
        $this->completed =true;
    }
    public function iscomplete(){
        return $this ->completed;
    }
}