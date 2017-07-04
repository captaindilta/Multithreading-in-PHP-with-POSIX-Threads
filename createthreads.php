<?php

class MyThread extends Thread {
    public function run()
	{
        printf("Thread #%lu is running. <br>", $this->getThreadId()); 
		// getThreadId() returns the ID of the referenced thread
    }
}

$thread1 = new MyThread(); 
$thread1->start();

$thread2 = new MyThread();
$thread2->start();

?>
