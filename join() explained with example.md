
Creating a thread, which generates an array of random numbers, sorts it and finally prints the array.
In the parent thread, we create a new thread which does the above said function, I have taken the selection sort so that it takes more time.(lol kidding, bc it was simple, so selection)


```
<?php
class Simple
{
	
	public function selectionsort($myarray)
	{
		$n = count($myarray);
		for($i = 0; $i < ($n - 1); $i++)
		{
			$min = $i;
			for($j = ($i + 1); $j < $n; $j++)
			{
				if($myarray[$j] < $myarray[$min])
				{
					$min = $j;
				}
			}
			$temp = $myarray[$min];
			$myarray[$min] = $myarray[$i];
			$myarray[$i] = $temp;
		}
		return $myarray;
	}


	public function CreateArray($start, $end)
	{
		for($i = 0; $i < 3000; $i++)
			{
				$temp = rand($start, $end);
				$array1[$i] = $temp;
			}
		return $array1;
	}


	public function PrintArray($arrayname)
	{
		for($i = 0; $i < 3000; $i++)
		{
			echo $arrayname[$i]." ";
		}
	
	}	
	
}




class ThreadClass extends Thread
{
	public $start;
	public $last;
	
	
	public function __construct($par1, $par2) {
        $this->start = $par1;
		$this->last = $par2;
    } 
	
	public function run()
	{
		$t1 = new Simple();
		$array1 = $t1->CreateArray($this->start, $this->last);
		echo "<br>Unsorted Array<br>";
		$t1->PrintArray($array1);
		$array1sorted = $t1->selectionsort($array1);
		echo "<br>Sorted Array<br>";
		$t1->PrintArray($array1sorted);	
	}
	
}




$time_start = microtime(true);   // time when the script starts executing
echo $time_start. "  ";


$t1 = new ThreadClass(20, 29);

$t1->start();

// This is the parent thread, it executes parallely with the child thread
// Here the parent thread will finish executing before the child thread finishes
// and execution time shown in output will be the execution time of the parent thread
// But it takes longer to finish execution of the thread t1
// Therefore we use join() method, so that the parent thread waits for child thread to complete its execution
// When we call join() method, the parent thread will wait for the child thread to come out of its run method
// Now the total execution time will be correct.


/// Total Execution Time: 0.0039939880371094 Secs without join() method
//// Total Execution Time: 2.1129231452942 Secs with join() method

$time_end = microtime(true);
echo $time_end."  ";
$execution_time = ($time_end - $time_start)/60;
$execution_time_secs = ($time_end - $time_start);
//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' Mins';
echo '<b>Total Execution Time:</b> '.$execution_time_secs.' Secs'; 
?>

```
