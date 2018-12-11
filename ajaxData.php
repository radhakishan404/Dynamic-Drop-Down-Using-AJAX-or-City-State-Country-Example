<?php
include('include/db_connect.php');

if(isset($_POST["cat_id"]) && !empty($_POST["cat_id"])){
    $query = $mysqli->query("SELECT * FROM category2 WHERE cat_id = ".$_POST['cat_id']."");

    $rowCount = $query->num_rows;

    if($rowCount > 0){
        echo '<option value="">Select</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['cat2_id'].'">'.$row['Category2'].'</option>';
        }
    }else{
        echo '<option value="">not available</option>';
    }
}

if(isset($_POST["cat2_id"]) && !empty($_POST["cat2_id"])){
	echo "asdasd";
    $query = $mysqli->query("SELECT * FROM category3 WHERE cat2_id = ".$_POST['cat2_id']."");
    $rowCount = $query->num_rows;

    if($rowCount > 0){
        echo '<option value="">Select</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['cat3_id'].'">'.$row['Category3'].'</option>';
        }
    }else{
        echo '<option value="">not available</option>';
    }
}




?>
