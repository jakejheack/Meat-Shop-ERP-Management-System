<?php // php select option value from database
$hostname = "localhost";
$username = "u862287489_lehmann";
$password = "Securelink143";
$databaseName = "u862287489_lehmanndb";
// connect to mysql database
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
// mysql select query
$query1 = "SELECT * FROM designation WHERE ex_status='Enabled';";
$query2 = "SELECT * FROM department WHERE ex_status='Enabled';";
$query3 = "SELECT * FROM employee_position WHERE ex_status='Enabled';";
$query4 = "SELECT * FROM employment_status WHERE ex_status='Enabled';";
$query5 = "SELECT * FROM performance_desc WHERE ex_status='Enabled';";
$query6 = "SELECT * FROM employees WHERE stat='Active' ORDER BY firstname ASC;";
$query7 = "SELECT * FROM payment_type WHERE ex_status='Enabled';";
$query8 = "SELECT * FROM customers_profile WHERE cpStatus='Enabled';";
$query9 = "SELECT * FROM product_category WHERE ex_status='Enabled' ORDER BY ex_categoryName ASC;";
$query10 = "SELECT * FROM supplydist_category WHERE ex_status='Enabled' ORDER BY ex_sdCategory ASC;";
$query11 = "SELECT * FROM dish_type WHERE ex_status='Enabled' ORDER BY ex_dishType ASC;";
$query12 = "SELECT * FROM sd_profile WHERE sd_profileStatus='Enabled';";
$query13 = "SELECT * FROM job_vacancies WHERE jobStatus='Enabled';";
$query14 = "SELECT * FROM customers_due WHERE dueStatus='Enabled';";
$query15 = "SELECT * FROM leave_description WHERE ex_status='Enabled' ORDER BY ex_leave ASC;";
$query16 = "SELECT * FROM overtime_description WHERE ex_status='Enabled';";
$query17 = "SELECT * FROM employees WHERE stat='Active';";
$query18 = "SELECT * FROM customers_due JOIN customers_profile ON customers_profile.id = customers_due.dueCustomer WHERE dueStatus='Enabled';";
$query19 = "SELECT * FROM customers_profile WHERE CURRENT_TIMESTAMP < cpdueTo AND cpStatus='Enabled';";
$query20 = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
// for method 1
$result1 = mysqli_query($connect, $query1);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
$result5 = mysqli_query($connect, $query5);
$result6 = mysqli_query($connect, $query6);
$result7 = mysqli_query($connect, $query7);
$result8 = mysqli_query($connect, $query8);
$result9 = mysqli_query($connect, $query9);
$result10 = mysqli_query($connect, $query10);
$result11 = mysqli_query($connect, $query11);
$result12 = mysqli_query($connect, $query12);
$result13 = mysqli_query($connect, $query13);
$result14 = mysqli_query($connect, $query14);
$result15 = mysqli_query($connect, $query15);
$result16 = mysqli_query($connect, $query16);
$result17 = mysqli_query($connect, $query17);
$result18 = mysqli_query($connect, $query18);
$result19 = mysqli_query($connect, $query19);
$result20 = mysqli_query($connect, $query20);
// end option value
//$des = "SELECT * FROM employee JOIN designation ON employee.hr_designation = designation.ex_designationID";
//$des2 = mysqli_query($connect, $des);

?>