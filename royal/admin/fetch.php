<?php
$connect = mysqli_connect("localhost", "root", "", "hotel_royal");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM users
	WHERE full_name LIKE '%".$search."%'
	OR aadhar_number LIKE '%".$search."%' 
	OR mobile_number LIKE '%".$search."%' 
	OR address LIKE '%".$search."%' 
	OR city LIKE '%".$search."%'
	OR pincode LIKE '%".$search."%'
	OR email LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM users ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
                        <th>Sr.No</th>
                        <th>Full Name</th>
                        <th>Aadhar Number</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>Email</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["full_name"].'</td>
				<td>'.$row["aadhar_number"].'</td>
				<td>'.$row["mobile_number"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["city"].'</td>
				<td>'.$row["pincode"].'</td>
				<td>'.$row["email"].'</td>
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