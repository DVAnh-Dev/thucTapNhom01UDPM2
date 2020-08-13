<?php
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $data = 'futurebass';
  $conn = mysqli_connect($server, $user, $password, $data) or die ('Not connect !');
  mysqli_query($conn, 'set names "utf8"');
?>