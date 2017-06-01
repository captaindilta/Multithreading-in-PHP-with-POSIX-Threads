# Multithreading-in-PHP-with-POSIX-Threads

## POSIX Threads or pthreads 
____
pthreads is an object oriented API that provides all of the tools needed for multi-threading in PHP (on other platforms also but we are dealing with PHP). 

pthreads API makes it easier for developers to implement threading in PHP by abstracting the underlying implementation details and only exposing the objects or actions that the developer needs. (No shit son, that's what an Application Programming Interface does.)

[Link to pthreads documentation on PHP manual](https://secure.php.net/manual/en/book.pthreads.php)
___

## Processes and Threads
____
A process is an executing instance of a computer program. Multiple process may be associated with the same program i.e. there can be several processes running the same program. Process is only one instance of a program in execution. Each process has its own address space unlike threads which share the address space of the process that created it.
___
A thread is an independent unit(sequence) of execution. Threads exist within a process. Each process has atleast one thread - i.e. the process itself, called the parent thread. Threads within a process share the address space of the process that created them. 
A thread is a component of a process. 
Multiple threads can exist within one process, executing concurrently and sharing resources of the same process, while different processes do not share their resources.
___
## Multithreading
____
The purpose of multithreading is to improve your application through parallelism.
A thread is a single sequence stream within a process. In a process, threads allow multiple execution of streams.

1. We have a job, a task (a program code).
2. Can we divide our job (our code) into multiple independent units of execution?
3. By dividing our job in multiple independent units we can distribute those units among our processors or cores in such a way that it maximizes the throughput of our application.
4. Threads are those independent units of execution that can run concurrently on a multiprocessor.

#### In a single process system also, threads can improve the application. 
____
Suppose while running your program, a part of the process goes from its RUNNING state to BLOCKED (or SUSPENDED) state. There are several reasons for this state transition; for instance the executing program(process) initiates an Input/Output operation, the entire process cannot proceed further until I/O is completed. 

On the other hand if we have multiple units of execution within a program, i.e. if we use multiple threads in our program, if any of the thread goes from its RUNNING state to BLOCKED state, the other threads of the program can execute, and the processor does not have to wait for the BLOCKED thread.
