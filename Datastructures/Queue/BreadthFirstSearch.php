<?php

/**
 * In breadth first search the objective is to traverse all nodes of a graph. (network, not line/bar graph)
 */

/**
 * Pseudo code BFS using Queues
 *
 * Timecomplexity of Queues are
 *
 * Enqueue O(1)
 * Dequeue O(1)
 * Peeking O(1) (visiting front node)
 * Contains O(N)
 * Removal O(N)
 * isEmpty O(1)
 *
 * Let Q be a Queue
 * Q.enqueue(starting_node)
 * starting_node.visited = true
 *
 * while Q is not empty Do
 *
 * node = Q.dequeue()
 *
 * For neighbour in neighbours(node):
 * If neighbour has not been visited:
 *      neighbour.visited = true
 *      Q.enqueue(neighbour)
 */




