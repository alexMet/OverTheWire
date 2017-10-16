$cookie = base64_decode("ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw=");
$key2 = '{"showpassword":"no","bgcolor":"#ffffff"}';

for($i=0; $i<strlen($cookie); $i++) {
 $outText .= $cookie[$i] ^ $key2[$i];
}

echo "Key is: ", $outText;

$key = "qw8J";
$text = '{"showpassword":"yes","bgcolor":"#ffffff"}';
$outText = '';

for($i=0;$i<strlen($text);$i++) {
  $outText .= $text[$i] ^ $key[$i % strlen($key)];
}

echo $outText;
echo "Cookie is: ", base64_encode($outText);
