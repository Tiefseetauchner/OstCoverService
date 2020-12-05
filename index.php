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
    <link rel="stylesheet" href="https://ridgecss.com/ridge.css">
</head>
<body>
<h1>API Test Site</h1>
<h2>Song Tests</h2>
<?php
$testDataGenerator = new SongTestDataGenerator();
for ($i = 0; $i < 10; $i++) {
  echo json_encode($testDataGenerator->testData, JSON_PRETTY_PRINT);
  echo "<br>";
  $testDataGenerator->generateTestData();
}
?>
<h2>OST Tests</h2>
<?php
$testDataGenerator = new OriginalSoundTrackTestDataGenerator();
for ($i = 0; $i < 10; $i++) {
  echo json_encode($testDataGenerator->testData, JSON_PRETTY_PRINT);
  echo "<br>";
  $testDataGenerator->generateTestData();
}
?>
<h2>Mandatory (but useless) seeder class test</h2>
<p>I'm protesting this. It is stupid to make people program extremely ugly code. You want them to learn, how to code,
    not how to make a class that returns static data. The way you phrased your exercise, most people will just write a
    class that returns static data. I think, that is stupid when considering that we should learn, how to write
    expandable and stackable code.</p>
<p>But here you have your seeder class output:</p>
<?php
echo json_encode(new SeederClass(), JSON_PRETTY_PRINT);
?>
</body>
</html>

