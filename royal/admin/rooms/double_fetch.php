<?php
$connect = mysqli_connect("localhost", "root", "", "hotel_royal");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM single_ac
	WHERE holder_name LIKE '%".$search."%'
	OR holder_id LIKE '%".$search."%' 
	OR holder_mobile LIKE '%".$search."%' 
	OR room_no LIKE '%".$search."%' 
	OR holder_address LIKE '%".$search."%'
	OR child LIKE '%".$search."%'
	OR adult LIKE '%".$search."%'
	OR in_date LIKE '%".$search."%'
	OR out_date LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM double_ac ORDER BY s_no";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
					     	<th>Room No</th>
                            <th>Full Name</th>
                            <th>Aadhar No</th>
                            <th>Number</th>
                            <th> Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["room_no"].'</td>
                <td>'.$row["holder_name"].'</td>
                <td>'.$row["holder_id"].'</td>
				<td>'.$row["holder_mobile"].'</td>
				<td>'.$row["holder_address"].'</td>
				<td>'.$row["child"].'</td>
				<td>'.$row["adult"].'</td>
				<td>'.$row["in_date"].'</td>
				<td>'.$row["out_date"].'</td>
		
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>