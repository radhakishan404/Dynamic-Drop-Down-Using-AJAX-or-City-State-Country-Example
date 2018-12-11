<?php
include('include/db_connect.php');

    $query = $mysqli->query("SELECT * FROM category1");

    $rowCount = $query->num_rows;

    if($rowCount > 0)
		
		{ 
	echo '<option value="">Select</option>';
        
        while($row = $query->fetch_assoc())
		{
            echo '<option value="'.$row['cat_id'].'">'.$row['Category1'].'</option>';
        }
    }
	else
	{
        echo '<option value="">Not Available</option>';
	}



?>
