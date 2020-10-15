<?php
 $mysqli = mysqli_init();

 $mysqli->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
 $mysqli->ssl_set(null, null, '/path/to/verosent/chain.pem', null, null);

 if ($mysqli->real_connect('DATABASE_SERVER', 'DATABASE_USER', 'DATABASE_PASSWORD', 'DATABASE_NAME')) {
   echo "Connection via SSL established...\n";
   echo "Showing database tables...\n";

   $result = $mysqli->query("show tables;");
   foreach ($result->fetch_all() as $table) {
     echo "- ".$table[0]."\n";
   }
 }
 else {
   echo "Connection failed\n";
 }

 $mysqli->close();
?>
