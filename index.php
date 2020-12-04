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
  <title>API Test Site</title>
</head>
<body>
<h1>API Test Site</h1>
<h2>Song Tests</h2>
<?php
$testDataGenerator = new SongTestDataGenerator();
for ($i = 0; $i < 10; $i++) {
  var_dump($testDataGenerator->testData);
  echo "<br>";
  $testDataGenerator->generateTestData();
}
?>
<h2>OST Tests</h2>
<?php
$testDataGenerator = new OriginalSoundTrackTestDataGenerator();
for ($i = 0; $i < 10; $i++) {
  var_dump($testDataGenerator->testData);
  echo "<br>";
  $testDataGenerator->generateTestData();
}
?>
</body>
</html>

