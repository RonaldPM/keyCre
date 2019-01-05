<?php
  //Recieve the key. Change to a POST request for security.
  $key = $_GET['k'];
  //Check if key is empty or not
  if(!empty($key)){
    include_once("conf/db_conn.php");
    //Get the last block to find key hash from DB
    $key_blocks = explode("-", $key);
    $total_blocks = sizeof($key_blocks);
    $last_block = $key_blocks[$total_blocks-1];
    //Fetch hash value of key in DB with the extracted last block
    $fetch_key = $conn->prepare('SELECT key_hash from keybase WHERE key_slice=?');
    $fetch_key->bind_param('s', $last_block);
    $fetch_key->execute();
    $result = $fetch_key->get_result();
    //If a row with value of last block of the key exists
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $key_hash = $row["key_hash"];
            //Check if hash matches
            if(password_verify($key, $key_hash)){
              echo "1";
            }
            else{
              echo "0";
            }
        }
    }
    else{
      echo "0";
    }
  }
  //If recieved key is empty
  else{
    echo "0";
  }
?>
