<?php include("db.php"); ?>
<link rel="stylesheet" href="css/style.css">

<div class="table-box">
<h2>Complaint List</h2>

<table>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Title</th>
<th>Location</th>
<th>Date</th>
<th>Status</th>
</tr>

<?php
$res=mysqli_query($conn,"SELECT * FROM complaints");

while($r=mysqli_fetch_assoc($res)){
echo "<tr>
<td>".$r['name']."</td>
<td>".$r['mobile']."</td>
<td>".$r['title']."</td>
<td>".$r['location']."</td>
<td>".$r['date']."</td>
<td>".$r['status']."</td>
</tr>";
}
?>
</table>
</div>