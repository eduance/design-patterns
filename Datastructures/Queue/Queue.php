<?php

/**
 * You can use an array, SinglyLinkedList and DoublyLinkedList to implement a Queue.
 * This is because the basic operations of a queue exist out of adding, removing and peeking.
 */

class Queue
{
    private SplDoublyLinkedList $list;

    public function __construct($firstElem)
    {
        $this->list = new SplDoublyLinkedList();
        $this->list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

        $this->queue($firstElem);
    }

    public function isEmpty(): bool
    {
        return $this->list->count() === 0;
    }

    public function size(): int
    {
        return $this->list->count();
    }

    /**
     * @throws Exception
     */
    public function peek()
    {
        if($this->isEmpty()) {
            throw new Exception("Queue is currently empty");
        }

        return $this->list->bottom();
    }

    /**
     *
     */
    public function queue($elem)
    {
        $this->list->push($elem);
    }

    /**
     * @return SplDoublyLinkedList
     */
    public function get(): SplDoublyLinkedList
    {
        return $this->list;
    }

    /**
     * Dequeue an element from the front of the queue.
     *
     * @throws Exception
     */
    public function dequeue()
    {
        if($this->isEmpty()) {
            throw new Exception("Queue is empty");
        }

        $this->list->pop();
    }
}