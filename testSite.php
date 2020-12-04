<?php
namespace LiveSchach;

spl_autoload_register(function ($class) {
  include $class . '.class.php';
});
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>sadf</title>
</head>
<body>
<h1>asdf</h1>
<?php
$testDataGenerator = new SongTestDataGenerator();
var_dump($testDataGenerator->testData);
echo "<br>";

$testDataGenerator->generateTestData();
var_dump($testDataGenerator->testData);
echo "<br>";

?>
</body>
</html>

