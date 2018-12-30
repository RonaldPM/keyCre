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
    for($nbc=0; $nbc<$no_of_blocks; $nbc++){
      echo genRand($key_block_count);
      if($nbc<$no_of_blocks-1){
        echo "-";
      }
    }
  }

  //Get key specifications from the input form
  $nb = $_GET['nb'];
  $kbs = $_GET['kbs'];
  $nk = $_GET['nk'];
  //Generate nk number of keys
  for($nkc=0; $nkc<$nk; $nkc++){
    genKey($nb,$kbs);
    echo "<br />";
  }
?>
