<?php

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'world';
$country = $_GET['country'];
$allcountry = $_GET['allcountry'];

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
if ($allcountry == true && (isset($allcountry) || !empty($allcountry))) {
    $stmt = $conn->query("SELECT * FROM countries");
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    echo '<ul>';
     foreach ($results as $row) {
        echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';
  }
if (isset($country) || !empty($country)) {
    $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    echo '<ul>';
    foreach ($results as $row) {
        echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';
}