<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM refrigerateur WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query en erreur.");
  }

  $_SESSION['message'] = 'Refrigerateur supprimée avec succès';
  $_SESSION['message_type'] = 'danger';
  header('Location: index_refrigerateur.php');
}

?>
