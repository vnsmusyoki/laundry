# -*- coding: utf-8 -*-
"""python-tasks.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/13o8N9fDDhB4po0Xc6C0t9q7IBXp6KrR_
"""

1. (15 pts) Show how you can use these operations to implement a queue (operations Q = create_queue() , enqueue(i) , i = dequeue() )
A picture might help to explain your answer
Hint: take a look at the following image:

# Python program to
# demonstrate stack implementation
# using collections.deque

from collections import deque

stack = deque()

# append() function to push
# element in the stack
stack.append('a')
stack.append('b')
stack.append('c')

print('Initial stack:')
print(stack)

# pop() function to pop
# element from stack in
# LIFO order
print('\nElements popped from stack:')
print(stack.pop())
print(stack.pop())
print(stack.pop())

print('\nStack after elements are popped:')
print(stack)

2. (5 pts) What's the worst-case running time of your dequeue implementation?

Searching for a value entails going through all of the objects, starting at the top, and working your way down. In the worst-case scenario, you'd have to go through the entire queue, resulting in an  time complexity O(n).
The temporal complexity of removing the tail, for example, would be O. (n). This is because you'd need to locate a new tail for the queue, and since the tail in a singly linked list doesn't have access to the preceding element, you'd have to search the entire queue for the new tail.
Example
function removeLast() {
    // Edge case when there is only 1 element in the queue.
    if (head == tail) {                   // O(1)
        value = head.value                // O(1)
        head = null                       // O(1)
        tail = null                       // O(1)
        return value                      // O(1)
    }
    // Searching for the new tail.
    newTail = head                        // O(1)
    while (newTail.next != tail) {        // O(n)
        newTail = newTail.next            // O(1)
    }
    value = tail.value                    // O(1)
    newTail.next = null                   // O(1)
    tail = newTail                        // O(1)
    return tail                           // O(1)    
}
From which can be seen that the time complexity is indeed O(n).

3. (5 pts) Over a series of n enqueues followed by n dequeues, how many pop() operations does your implementation perform?

dequeue for k items would be 2*k
Thus for n enqueue and n dequeue operation.
Enqueue operation: does not require any pop operation.
Dequeue operation: at any time with k entries, we require 2*k pop for one dequeue.
So for n operation: 2*n + 2*(n-1) + 2*(n-2) + 2 *(n-3) + . . . . . + 2*(1)
= 2 *(n + n-1 + n-2 + n-3 + . . . . 1)
= 2* (n * (n-1)) /2
= n*(n-1)

Bonus Question

import sys

class MaxHeap:

	def __init__(self, maxsize):
		
		self.maxsize = maxsize
		self.size = 0
		self.Heap = [0] * (self.maxsize + 1)
		self.Heap[0] = sys.maxsize
		self.FRONT = 1

	# Function to return the position of
	# parent for the node currently
	# at pos
	def parent(self, pos):
		
		return pos // 2

	# Function to return the position of
	# the left child for the node currently
	# at pos
	def leftChild(self, pos):
		
		return 2 * pos

	# Function to return the position of
	# the right child for the node currently
	# at pos
	def rightChild(self, pos):
		
		return (2 * pos) + 1

	# Function that returns true if the passed
	# node is a leaf node
	def isLeaf(self, pos):
		
		if pos >= (self.size//2) and pos <= self.size:
			return True
		return False

	# Function to swap two nodes of the heap
	def swap(self, fpos, spos):
		
		self.Heap[fpos], self.Heap[spos] = (self.Heap[spos],
											self.Heap[fpos])

	# Function to heapify the node at pos
	def maxHeapify(self, pos):

		# If the node is a non-leaf node and smaller
		# than any of its child
		if not self.isLeaf(pos):
			if (self.Heap[pos] < self.Heap[self.leftChild(pos)] or
				self.Heap[pos] < self.Heap[self.rightChild(pos)]):

				# Swap with the left child and heapify
				# the left child
				if (self.Heap[self.leftChild(pos)] >
					self.Heap[self.rightChild(pos)]):
					self.swap(pos, self.leftChild(pos))
					self.maxHeapify(self.leftChild(pos))

				# Swap with the right child and heapify
				# the right child
				else:
					self.swap(pos, self.rightChild(pos))
					self.maxHeapify(self.rightChild(pos))

	# Function to insert a node into the heap
	def insert(self, element):
		
		if self.size >= self.maxsize:
			return
		self.size += 1
		self.Heap[self.size] = element

		current = self.size

		while (self.Heap[current] >
			self.Heap[self.parent(current)]):
			self.swap(current, self.parent(current))
			current = self.parent(current)

	# Function to print the contents of the heap
	def Print(self):
		
		for i in range(1, (self.size // 2) + 1):
			print(" PARENT : " + str(self.Heap[i]) +
				" LEFT CHILD : " + str(self.Heap[2 * i]) +
				" RIGHT CHILD : " + str(self.Heap[2 * i + 1]))

	# Function to remove and return the maximum
	# element from the heap
	def extractMax(self):

		popped = self.Heap[self.FRONT]
		self.Heap[self.FRONT] = self.Heap[self.size]
		self.size -= 1
		self.maxHeapify(self.FRONT)
		
		return popped

# Driver Code
if __name__ == "__main__":
	
	print('The maxHeap is ')
	
	maxHeap = MaxHeap(15)
	maxHeap.insert(5)
	maxHeap.insert(3)
	maxHeap.insert(17)
	maxHeap.insert(10)
	maxHeap.insert(84)
	maxHeap.insert(19)
	maxHeap.insert(6)
	maxHeap.insert(22)
	maxHeap.insert(9)

	maxHeap.Print()
	
	print("The Max val is " + str(maxHeap.extractMax()))