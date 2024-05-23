<?php
include "dp_connection.php";

$sql = "SELECT `name`, `price` FROM `products`";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
echo '<div class="card text-center">';
echo '<h3>' .$row["name"] . '</h3>';
echo '<p>' .$row["price"] . '</p>';
echo '</div>';
}
$conn->close();