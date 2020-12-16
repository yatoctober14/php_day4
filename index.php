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







?>