<?php

// Credentials
$dbhost = 'localhost';
$dbuser = 'webmaster';
$dbpass = 'n1col3';
$dbname = 'global_bank';


/* 1. Create a database connection */
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection succeeded
if (mysqli_connect_errno()) {
  $msg = "Database connection failed. ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}



/* 2. Perform a database query */
$query = "SELECT * FROM subjects";
$result_set = mysqli_query($connection, $query);

// Test if query succeeded
if (!$result_set) {
  exit("<h4>Database query failed</h4>");
}


/* 3. Use returned data (if any) */
while ($subject = mysqli_fetch_assoc($result_set)) {
  echo $subject["menu_name"] . "<br>";
}


/* 4. Release returned data */
mysqli_free_result($result_set);

/* 5. Close database connection */
mysqli_close($connection);










