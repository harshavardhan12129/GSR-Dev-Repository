<?php
ini_set('display_errors', 1);
ini_set('memory_limit','1000M'); 
include "mysql_con.php";

echo "<HTML><BODY>";

    $sql = "SELECT * FROM tbl_review";
    $result=mysqli_query($con,$sql);
	echo "<table border='1'>";
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>";
	echo $row["id"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["article_type"][0]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["title"]."<br />";
	echo "</td>";
	echo "<td>";
	$sql = "SELECT id FROM tbl_users WHERE username='".$row['authuser']."'";
    	$resultr=mysqli_query($con,$sql);
	$rowr= mysqli_fetch_row($resultr);
	echo $rowr[0];
	echo "</td>";
	echo "<td>";
	echo $row["createdate"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["pending"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["beta_approved"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["alpha_approved"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["tags"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["views"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["bites"]."<br />";
	echo "</td>";
	echo "</tr>";
    }
	

    $sql = "SELECT * FROM tbl_opinion";
    $result=mysqli_query($con,$sql);
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>";
	echo $row["id"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["article_type"][0]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["title"]."<br />";
	echo "</td>";
	echo "<td>";
	$sql = "SELECT id FROM tbl_users WHERE username='".$row['authuser']."'";
    	$resultr=mysqli_query($con,$sql);
	$rowr= mysqli_fetch_row($resultr);
	echo $rowr[0];
	echo "</td>";
	echo "<td>";
	echo $row["createdate"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["pending"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["beta_approved"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["alpha_approved"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["tags"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["views"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["bites"]."<br />";
	echo "</td>";
	echo "</tr>";
	
    }
    $sql = "SELECT * FROM tbl_news";
    $result=mysqli_query($con,$sql);
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>";
	echo $row["id"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["article_type"][0]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["title"]."<br />";
	echo "</td>";
	echo "<td>";
	$sql = "SELECT id FROM tbl_users WHERE username='".$row['authuser']."'";
    	$resultr=mysqli_query($con,$sql);
	$rowr= mysqli_fetch_row($resultr);
	echo $rowr[0];
	echo "</td>";
	echo "<td>";
	echo $row["createdate"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["pending"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["beta_approved"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["alpha_approved"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["tags"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["views"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["bites"]."<br />";
	echo "</td>";
	echo "</tr>";
    }
    $sql = "SELECT * FROM tbl_guide";
    $result=mysqli_query($con,$sql);
    while($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>";
	echo $row["id"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["article_type"][0]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["title"]."<br />";
	echo "</td>";
	echo "<td>";
	$sql = "SELECT id FROM tbl_users WHERE username='".$row['authuser']."'";
    	$resultr=mysqli_query($con,$sql);
	$rowr= mysqli_fetch_row($resultr);
	echo $rowr[0];
	echo "</td>";
	echo "<td>";
	echo $row["createdate"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["pending"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["beta_approved"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["alpha_approved"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["tags"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["views"]."<br />";
	echo "</td>";
	echo "<td>";
	echo $row["bites"]."<br />";
	echo "</td>";
	echo "</tr>";
    }
	echo "</table>";
echo "Complete no memory errors.<br>";
echo "</BODY></HTML>";