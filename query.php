<?php

$servername = 'cssql.seattleu.edu';
$user = 'll_jhernandez10';
$pass = '04Jp6E7/D8qfiUzD';
$dbname = 'll_jhernandez10';

// create the connection
$conn = mysqli_connect($servername, $user, $pass, $dbname);

if (!$conn) {
  die('<h2 style="color: green;">connection failed: ' . mysqli_connect_error() . '</h2>');
} 

echo '<h2 style="color: green;">connected successfully</h2>';

// get the query - explode to determine if it is insert, update, etc.
$query = explode(" ", $_POST["query"]);
$sql = $_POST["query"];

// pass the query to sql 
$result = mysqli_query($conn, $sql);

if ($query[0] == 'select') {
  // if the query is to select data, use this
  if (mysqli_num_rows($result) > 0) {
    echo '<table border=\'1\'>';
    while($row = mysqli_fetch_row($result)) {
      echo '<tr>';
      for ($i = 0; $i < mysqli_num_fields($result); $i++) {
        echo '<td>' . $row[$i] . '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
  } else {
    echo '0 results';
  }
} else if ($query[0] == 'insert') {
  echo 'insert';
} else if ($query[0] == 'update') {
  echo 'update';
} else if ($query[0] == 'delete') {
  echo 'delete';
} else {
  echo "Error processing request";
}

echo '<button onclick=\'history.back();\'>go back</button>';

// disconnect
mysqli_free_result($result);
mysqli_close($conn);
?>