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
