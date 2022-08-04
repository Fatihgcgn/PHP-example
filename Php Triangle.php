<?php

function TriangleDraw($number)
{
	for($i=1;$i<$number;$i++)
	{
		$flag=0;
		while($flag < $i)
		{
			echo "0";
			$flag++;
		}
		echo "<br>";

	}

}

TriangleDraw(15);



?>