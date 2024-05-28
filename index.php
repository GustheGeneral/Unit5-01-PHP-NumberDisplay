<!DOCTYPE html>
<html>
<head>
  <!--Meta data section-->
  <meta charset="utf-8">
  <meta name="description" content="Grand Escape Game">
  <meta name="author" content="Gustav I.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number Display</title>
  <!--Stylesheet-->
  <link rel="stylesheet" href="./css/style.css">
  <!--favicon-->
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
  <link rel="manifest" href="./favicon/site.webmanifest">
</head>
<body>
  <!--Header-->
  <h1>Number Display</h1>
  <form action="result.php" method="post" target="resultFrame">
    <div>
  <!--Input no.1-->
      <label for="minNumber">Min Number:</label>
      <input type="number" id="minNumber" name="minNumber" step="1" required>
    </div>
    <div>
  <!--Input no.2-->
      <label for="maxNumber">Max Number:</label>
      <input type="number" id="maxNumber" name="maxNumber" step="1" required>
    </div>
    <button type="submit">Submit</button>
  </form>
  <!--Iframe-->
  <iframe name="resultFrame" style="width: 100%; height: 300px; border: none; margin-top: 20px;"></iframe>

</body>
</html>
