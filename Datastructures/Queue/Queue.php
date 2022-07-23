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

    /**
     * Determine whether the queue is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->list->count() === 0;
    }

    /**
     * Get the size of the queue.
     *
     * @return int
     */
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
     * Queue an element.
     *
     * @return void
     */
    public function queue($elem)
    {
        $this->list->push($elem);
    }

    /**
     * Get the Doubly Linked List.
     *
     * @return SplDoublyLinkedList
     */
    public function get(): SplDoublyLinkedList
    {
        return $this->list;
    }

    /**
     * Dequeue an element from back of the queue.
     *
     * @throws Exception
     */
    public function dequeue()
    {
        if($this->isEmpty()) {
            throw new Exception("Queue is empty");
        }

        $this->list->offsetUnset(0);
    }
}