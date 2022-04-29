<?php
 session_start();

	include('dbConnect.php');
	$sql = "SELECT candidates,count(candidates) from users group by candidates";

	$result=mysqli_query($connect,$sql);
	$rs=mysqli_fetch_assoc($result);

	echo "
		<table border='2'>
			<tr>
				<th>Sno.</th>

				<th>Vote</th>
				
			</tr>
	";
	$i = 1;
	foreach($rs as $row){
		$uid = $row['candidates'];
		echo "
		<tr>
			<td>".$i."</td>
			
			
			<td>".$row['candidates']."</td>
		
			
        </tr>
		";
		$i++;
	}
	echo "</table>";
    ?>
</div>
</div>
</div>
</section>