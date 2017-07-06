<?php

// Total Execution Time of 'performance_test_threaded.php' = 14.210937023163 Secs
// Total Execution Time of 'performance_test_sequential.php' = 7.1525769233704 Secs

class MyThread extends Thread {
	
	public $N;
	public function __construct($number)
	{
		$this->N = $number;
	}
	
	public function run()
	{
		while($this->N > 0)
		{
			$this->N -= 1;
		}
	}
	
}

$start_time = microtime(true);
$object1 = new MyThread(10000000);
$object2 = new MyThread(10000000);
$object1->start();
$object2->start();
$object1->join();
$object2->join();
$end_time = microtime(true);

$total_time = ($end_time - $start_time);
echo '<b>Total Execution Time:</b> '.$total_time.' Secs';

?>