<?php
  include 'config/config.php';
  session_start();
  if(isset($_POST['query'])){

    $search = $_POST['query'];
    $query = "SELECT Name FROM search1 WHERE Name LIKE ?";
    $stmt = $conn->prepare($query);

    $searchPattern = "%$search%";
    $stmt->bind_param("s", $searchPattern);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $searchResults = [];

      while($row = $result->fetch_assoc()) {
        $searchResults[] = $row;
      }

      echo json_encode($searchResults);

    } else {
      // echo '';
    }
  }
?>