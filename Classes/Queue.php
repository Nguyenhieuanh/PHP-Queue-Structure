<?php
include_once "Node.php";

class Queue
{
    protected $front;
    protected $back;

    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($data)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $data;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $deleteQueue = $this->front->value;
        $this->front = $this->front->next;
        return $deleteQueue;
    }
}