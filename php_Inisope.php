<!doctype html>

<html lang="en">
<head>
    <title>Employee Information</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "mashley";
$password = "mashley";
$dbname = "Inisope";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully <br>";

$sql = "SELECT `FIRST_NAME`,`LAST_NAME`,`PHONE_NUMBER`,`DEPARTMENT_ID`,
				`LOCATION_ID`,`JOB_ID`,`MANAGER_ID` FROM `HR_Employees`;";
$sql2 = "SELECT `DEPARTMENT_ID`,`DEPARTMENT_NAME` FROM `HR_Departments`;";
$sql3 = "SELECT `LOCATION_ID`,`STREET_ADDRESS`,`CITY`,`STATE_PROVINCE`,
				`COUNTRY_ID` FROM `HR_Locations`;";
$sql4 = "SELECT `JOB_ID`,`JOB_TITLE` FROM `HR_Jobs`;";
$sql5 = "SELECT `MANAGER_ID`,`MANAGER_NAME` FROM `HR_Manager`;";

$result = $conn->query($sql);

$field = $_POST["Search"];
$name = $_POST["username"];
$LastName;
$FirstName;
$Space = " ";
	
	echo "Database Search Results <br> <br> <br> <br> <br>";

	echo "<table border=1>
	<tr> 
	<th>Name</th>
	<th>Phone Number</th>
	<th>Department</th>
	<th>Address</th>
	<th>Title</th>
	<th>Manager</th>
	</tr>";
	
 if ($result->num_rows > 0) {
    //output data of each row
 		while ($row = $result->fetch_assoc()) {
    	if ($field == "Department") {	
					
				$result2 = $conn->query($sql2);
				
				while ($row2 = $result2->fetch_assoc()) {
					if ($row["DEPARTMENT_ID"] == $row2["DEPARTMENT_ID"]) {
							$Department = $row2["DEPARTMENT_NAME"]; }
				}
 
				if ($Department == $name) {  
        	
					$result2 = $conn->query($sql2);
					$result3 = $conn->query($sql3);
					$result4 = $conn->query($sql4);
					$result5 = $conn->query($sql5);
						
					while ($row2 = $result2->fetch_assoc()) {
						if ($row["DEPARTMENT_ID"] == $row2["DEPARTMENT_ID"]) {
								$Department = $row2["DEPARTMENT_NAME"]; }
					}
					while ($row3 = $result3->fetch_assoc()) {
						if ($row["LOCATION_ID"] == $row3["LOCATION_ID"]) {
								$StreetAddress = $row3["STREET_ADDRESS"]; 
								$City = $row3["CITY"];
								$StateProvince = $row3["STATE_PROVINCE"];
								$CountryID = $row3["COUNTRY_ID"]; }
					}
					while ($row4 = $result4->fetch_assoc()) {
						if ($row["JOB_ID"] == $row4["JOB_ID"]) {
								$Title = $row4["JOB_TITLE"];  }
					}
					while ($row5 = $result5->fetch_assoc()) {
						if ($row["MANAGER_ID"] == $row5["MANAGER_ID"]) {
								$ManagerName = $row5["MANAGER_NAME"];  }
					}
					
					echo "<tr>";
					echo "<td>" . $row["FIRST_NAME"] . $Space . $row["LAST_NAME"] . "</td>";
					echo "<td>" . $row["PHONE_NUMBER"] . "</td>";
					echo "<td>" . $Department . "</td>";
					echo "<td>" . $StreetAddress . $Space . $City . $Space . $StateProvince . $Space . $CountryID . "</td>";
					echo "<td>" . $Title . "</td>";
					echo "<td>" . $ManagerName . "</td>";
					echo "</tr>";
				}
    	}
			if ($field == "Location") {
				
				$result3 = $conn->query($sql3);
				
				while ($row3 = $result3->fetch_assoc()) {
					if ($row["LOCATION_ID"] == $row3["LOCATION_ID"]) {
							$Location = $row3["STATE_PROVINCE"]; }
				}
				
				if ($Location == $name) {
			
					$result2 = $conn->query($sql2);
					$result3 = $conn->query($sql3);
					$result4 = $conn->query($sql4);
					$result5 = $conn->query($sql5);
					
					while ($row2 = $result2->fetch_assoc()) {
						if ($row["DEPARTMENT_ID"] == $row2["DEPARTMENT_ID"]) {
								$Department = $row2["DEPARTMENT_NAME"]; }
					}
					while ($row3 = $result3->fetch_assoc()) {
						if ($row["LOCATION_ID"] == $row3["LOCATION_ID"]) {
								$StreetAddress = $row3["STREET_ADDRESS"]; 
								$City = $row3["CITY"];
								$StateProvince = $row3["STATE_PROVINCE"];
								$CountryID = $row3["COUNTRY_ID"]; }
					}
					while ($row4 = $result4->fetch_assoc()) {
						if ($row["JOB_ID"] == $row4["JOB_ID"]) {
								$Title = $row4["JOB_TITLE"];  }
					}
					while ($row5 = $result5->fetch_assoc()) {
						if ($row["MANAGER_ID"] == $row5["MANAGER_ID"]) {
								$ManagerName = $row5["MANAGER_NAME"];  }
					}
					
					echo "<tr>";
					echo "<td>" . $row["FIRST_NAME"] . $Space . $row["LAST_NAME"] . "</td>";
					echo "<td>" . $row["PHONE_NUMBER"] . "</td>";
					echo "<td>" . $Department . "</td>";
					echo "<td>" . $StreetAddress . $Space . $City . $Space . $StateProvince . $Space . $CountryID . "</td>";
					echo "<td>" . $Title . "</td>";
					echo "<td>" . $ManagerName . "</td>";
					echo "</tr>";
				}
			}
			if ($field == "First Name") {
				if ($row["FIRST_NAME"] == $name) {
					
					$result2 = $conn->query($sql2);
					$result3 = $conn->query($sql3);
					$result4 = $conn->query($sql4);
					$result5 = $conn->query($sql5);
					
					while ($row2 = $result2->fetch_assoc()) {
						if ($row["DEPARTMENT_ID"] == $row2["DEPARTMENT_ID"]) {
								$Department = $row2["DEPARTMENT_NAME"]; }
					}
					while ($row3 = $result3->fetch_assoc()) {
						if ($row["LOCATION_ID"] == $row3["LOCATION_ID"]) {
								$StreetAddress = $row3["STREET_ADDRESS"]; 
								$City = $row3["CITY"];
								$StateProvince = $row3["STATE_PROVINCE"];
								$CountryID = $row3["COUNTRY_ID"]; }
					}
					while ($row4 = $result4->fetch_assoc()) {
						if ($row["JOB_ID"] == $row4["JOB_ID"]) {
								$Title = $row4["JOB_TITLE"];  }
					}
					while ($row5 = $result5->fetch_assoc()) {
						if ($row["MANAGER_ID"] == $row5["MANAGER_ID"]) {
								$ManagerName = $row5["MANAGER_NAME"];  }
					}
					
					echo "<tr>";
					echo "<td>" . $row["FIRST_NAME"] . $Space . $row["LAST_NAME"] . "</td>";
					echo "<td>" . $row["PHONE_NUMBER"] . "</td>";
					echo "<td>" . $Department . "</td>";
					echo "<td>" . $StreetAddress . $Space . $City . $Space . $StateProvince . $Space . $CountryID . "</td>";
					echo "<td>" . $Title . "</td>";
					echo "<td>" . $ManagerName . "</td>";
					echo "</tr>";
				}
			}
			if ($field == "Last Name") {
				if ($row["LAST_NAME"] == $name) {
					
					$result2 = $conn->query($sql2);
					$result3 = $conn->query($sql3);
					$result4 = $conn->query($sql4);
					$result5 = $conn->query($sql5);
					
					while ($row2 = $result2->fetch_assoc()) {
						if ($row["DEPARTMENT_ID"] == $row2["DEPARTMENT_ID"]) {
								$Department = $row2["DEPARTMENT_NAME"]; }
					}
					while ($row3 = $result3->fetch_assoc()) {
						if ($row["LOCATION_ID"] == $row3["LOCATION_ID"]) {
								$StreetAddress = $row3["STREET_ADDRESS"]; 
								$City = $row3["CITY"];
								$StateProvince = $row3["STATE_PROVINCE"];
								$CountryID = $row3["COUNTRY_ID"]; }
					}
					while ($row4 = $result4->fetch_assoc()) {
						if ($row["JOB_ID"] == $row4["JOB_ID"]) {
								$Title = $row4["JOB_TITLE"];  }
					}
					while ($row5 = $result5->fetch_assoc()) {
						if ($row["MANAGER_ID"] == $row5["MANAGER_ID"]) {
								$ManagerName = $row5["MANAGER_NAME"];  }
					}
					
					echo "<tr>";
					echo "<td>" . $row["FIRST_NAME"] . $Space . $row["LAST_NAME"] . "</td>";
					echo "<td>" . $row["PHONE_NUMBER"] . "</td>";
					echo "<td>" . $Department . "</td>";
					echo "<td>" . $StreetAddress . $Space . $City . $Space . $StateProvince . $Space . $CountryID . "</td>";
					echo "<td>" . $Title . "</td>";
					echo "<td>" . $ManagerName . "</td>";
					echo "</tr>";
				}
			}
 		}
	 echo "</table>";
 }
  
/*Closing symbols for php code!*/?> 


</body>
</html>

