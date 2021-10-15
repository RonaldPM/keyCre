<?php
  function genRand($len){
    /*
      Function signature: genRand()
      No. of parameters : 1
      Description       : This function generates a block of
                          random string for the key
      $len              : The length of a block.
                          i.e Total number of characters in the
                          block.
    */
    $random_string="";
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $charArray = str_split($chars);
    for($i=0; $i<$len; $i++){
      $randItem = array_rand($charArray);
      $random_string .= "".$charArray[$randItem];
    }
    return($random_string);
  }

  function genKey($no_of_blocks, $key_block_count){
    /*
      Function signature: genKey()
      No. of parameters : 2
      Description       : This function generates a complete key based on
                          the specifications provided.
      $no_of_blocks     : The total number of blocks in The
                          key. i.e Total number of random
                          blocks seperated by '-'
      $key_block_count  : The length of each block.
                          i.e The number of letters in each
                          random string block seperated by '-'
    */
    $full_key = "";
    for($nbc=0; $nbc<$no_of_blocks; $nbc++){
      $full_key .= genRand($key_block_count);
      if($nbc<$no_of_blocks-1){
        $full_key.="-";
      }
    }
    return $full_key;
  }

  //DB connection code
  include_once("conf/db_conn.php");
  
  //Get key specifications from the input form
  $blockCount = $_GET['blockCount'];
  $blockSize = $_GET['blockSize'];
  $keyCount = $_GET['keyCount'];

  //Calculate length of the key
  $key_length = ($blockCount*$blockSize)+($blockCount-1);
  //Generate nk number of keys
  for($nkc=0; $nkc<$keyCount; $nkc++){
    //Print the key
    $generated_key = genKey($blockCount,$blockSize);
    $key_slice = substr($generated_key, $key_length-$blockSize, $key_length);
    echo $generated_key;
    echo "<br />";
    //Generating the hash of the key
    $options = [
        'cost' => 11
    ];
    $hashed_key = password_hash($generated_key, PASSWORD_BCRYPT, $options);
    //Save the hash of the key to the DB
    $sql =$conn->prepare('INSERT INTO keybase (key_hash, key_slice) values(?,?)');
    $sql->bind_param('ss', $hashed_key, $key_slice);
    $sql->execute();
  }
?>
