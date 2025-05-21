<?php

$servername = 'cssql.seattleu.edu';
$user = 'll_jhernandez10';
$pass = '04Jp6E7/D8qfiUzD';

// create the connection
$conn = mysqli_connect($servername, $user, $pass);

if (!$conn) {
  die('<h2 style="color: green;">connection failed: ' . mysqli_connect_error() . '</h2>');
}

echo '<h2 style="color: green;">connected successfully';
mysqli_close($conn);

// $text = $_POST['query'];
// echo "<p>The text you just typed in is </p>";
// echo "<h2>" . $text . "</h2>";

// $colNames = array('Student Name', 'Year', "Major");
// $students = array(
//             array('Andy', 'Junior', 'CS'), 
//             array('Bella', 'Senior', 'Math'), 
//             array('Tim', 'Junior', 'English'), 
//             array('Kathy', 'Junior', 'Education')
//           );

// echo '<table border='1'><tr>';
// for ($row = 0; $row < 3; $row++) {
//   echo '<th>' . $colNames[$row] . '</th>';
// }

// for ($row = 0; $row < 3; $row++) {
//   echo '<tr>';
//   for ($col = 0; $col < 3; $col++) {
//     echo '<td>' . $students[$row][$col] . '</td>';
//   }
//   echo '</tr>';
// }
// echo '</table>';

?>