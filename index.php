<?php 

	for($i=0;$i<10;$i++)
	{
		echo $i;
	}
	
	
	echo"<br>";
	$i=0; 
	$numberofloops=10;
	while($i<$numberofloops)
	{
		echo $i;
		$i++; //if you forget it , you will be in infinite loop
	}
	
	
	$arr = [5,6,1,6,4,1,2,9];
	echo "<br>ith for <br>";
	for($i=0; $i<count($arr); $i++)
	{
		echo $arr[$i]."<br>";
	}
	
	echo "<br>ith while <br>";
	$i=0;
	while($i<count($arr))
	{
		echo $arr[$i];
		$i++;
	}


	echo "<br>ith foreach <br>";
	foreach($arr as $item)
	{
		echo $item."<br>";
	}
	
	echo "<br>ith foreach  dictionary <br>";
	$dictionary = ["name"=>"ahmed","address"=>"street","age"=>50];
	foreach($dictionary as $key => $value)
	{
		echo "$key : $value <br>";
	}

	
	echo "<br>";	
	$users = 
	[
			["name"=>"ahmed","address"=>"street","age"=>50],
			["name"=>"mohamed","address"=>"square","age"=>30],
			["name"=>"mahmoud","address"=>"Eltahrer Square","age"=>20]
						
	];
	foreach($users as $user)
	{
			echo "{$user["name"]}, {$user["address"]}, {$user["age"]}<br>" ;
	}
	echo "<br>";
	
	//continue
	$students = 
	[
		["name"=>"ahmed","arabic"=>50,"English"=>45,"Math"=>48],
		["name"=>"mohamed","arabic"=>24,"English"=>20,"Math"=>48,],
		["name"=>"mahmoud","arabic"=>48,"English"=>44,"Math"=>47,]
		
	];
	foreach($students as $student)
	{
		if($student["arabic"]<25 || $student["English"]<25 || $student["Math"]<25)
		{
			continue;
		}
		$total = $student["arabic"] + $student["English"] + $student["Math"];
		echo "{$student["name"]} has total: {$total} <br>" ;
	}
	
	//break
	foreach($students as $student)
	{
		if($student["arabic"]<25 || $student["English"]<25 || $student["Math"]<25)
		{
			continue;
		}
		if($student["name"] == "ahmed")
		{
			$total = $student["arabic"] + $student["English"] + $student["Math"];
			echo "{$student["name"]} has total: {$total} <br>" ;
			break;
		}
		
	}
	
	
	//array pointers
	echo "<br>";
	$arr = [5,6,1,6,4,1,2,9];
	echo(current($arr))."<br>";
	echo next($arr)."<br>";
	echo next($arr)."<br>";
	echo current($arr)."<br>";
	echo prev($arr)."<br>";
	echo current($arr)."<br>";
	echo end($arr)."<br>";
	echo current($arr)."<br>";
	echo reset($arr)."<br>";
	echo current($arr)."<br>";
	
	echo "<br>";
	//FUNCTION display(){echo"a";}
	function display($to_print)
	{echo $to_print;}
	
	display("ahmed");
	
	echo "<br>";
	function add($num1, $num2)
	{
		$sum = $num1+$num2;
		return $sum;
	}
	$sum = add("1",10);
	echo $sum;
	echo "<br>";





?>