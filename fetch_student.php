
<?php

//fetch.php

include './src/php/dbh.php';

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM student_register
 WHERE location IN (".$search_text.") 
 ORDER BY location DESC
 ";
}
else
{
 $query = "SELECT * FROM student_register ORDER BY location DESC";
}

$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <div class="dropdown"style="margin-left:10px">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Students Applied
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">students Applied</a></li>
    <li><a href="#">Automatched Students</a></li>
  </ul>
</div> 
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;


?>