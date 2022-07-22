<?php

/**
 * A doubly linked list data structure without the PHP interfaces, for educational purpose.
 * If you want to use a Linked List, use the SPL class.
 * @see https://www.php.net/manual/en/class.spldoublylinkedlist.php
 *
 * Inspired by William Fiset.
 *
 * @author Brandon Eichhorn
 */
class DoublyLinkedList
{
    private int $size = 0;

    private ?Node $head = null;
    private ?Node $tail = null;

    /**
     * Clear the linked list.
     * Time complexity O(n), thus linear, as for each N, the time will increase.
     *
     * @return void
     */
    public function clear()
    {
        $trav = $this->head;
        while($trav != null) {
            $next = $trav->next;
            [$trav->prev, $trav->next] = null;
            $trav->data = null;
            $trav = $next;
        }

        [$head, $tail, $trav] = null;
        $this->size = 0;
    }

    /**
     * Return the size of the Doubly Linked List.
     *
     * @return int
     */
    public function size(): int
    {
        return $this->size;
    }

    /**
     * Return whether the Doubly Linked List is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->size === 0;
    }

    /**
     *
     *
     * @param $elem
     * @return void
     */
    public function add($elem)
    {
        $this->addLast($elem);
    }

    /**
     * Add an element to the Doubly Linked List.
     *
     * @param $elem
     * @return void
     */
    public function addLast($elem)
    {
        if ($this->isEmpty()) {
            [$this->head, $this->tail] = new Node($elem, null, null);
        } else {
            $this->tail->next = new Node($elem, $this->tail, null);
            $this->tail = $this->tail->next;
        }

        $this->size++;
    }

    /**
     * Insert add the first spot.
     *
     * Time complexity O(1)
     *
     * @param $elem
     * @return void
     */
    public function addFirst($elem)
    {
        if($this->isEmpty()) {
            [$this->head, $this->tail] = new Node($elem, null, null);
        }else{
            $this->head->prev = new Node($elem, null, $this->head);
            $this->head = $this->head->prev;
        }

        $this->size++;
    }

    /**
     * Add an element at a specific index.
     *
     * Time complexity dependent on N, O(N)
     *
     * @throws Exception
     */
    public function addAt($index, $data)
    {
        if ($index < 0 || $index > $this->size) {
            throw new Exception("Roses are red, violets are blue, this spot in the linked list, is not for you.");
        }

        if($index === 0) {
            $this->addFirst($data);
            return;
        }

        if($index === $this->size) {
            $this->addLast($data);
            return;
        }

        $temp = $this->head;
        for ($i = 0; $i < $index - 1; $i++) {
            $temp = $temp->next;
        }

        $newNode = new Node($data, $temp, $temp->next);
        $temp->next->prev = $newNode;
        $temp->next = $newNode;

        $this->size++;
    }
}
