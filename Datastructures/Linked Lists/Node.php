<?php

class Node
{
    public $data;
    public $next;
    public $prev;

    public function __construct($data, $prev, $next)
    {
        $this->data = $data;
        $this->prev = $prev;
        $this->next = $next;
    }

    public function next()
    {
        // ...
    }
}