<?php
// PHP FUNCTION YOU WANT TO CALL
function save ($name, $email) {
  // Do your processing
  // Save to database of something
  return true;
}

$list = array (
    array("Peter", "Griffin" ,"Oslo", "Norway"),
    array("Glenn", "Quagmire", "Oslo", "Norway")
  );
  
  $file = fopen("test1.csv","w");
  
  foreach ($list as $line) {
    fputcsv($file, $line);
  }
  
  fclose($file);
// PUT THE POST VARIABLES IN
$pass = save($_POST['name'], $_POST['email']);

// RESULT
echo json_encode([
  "status" => $pass ? 1 : 0,
  "message" => $pass ? "OK" : "An error has occured"
]);
?>