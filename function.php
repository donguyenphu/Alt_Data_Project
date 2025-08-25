<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once './components/head.php';?>
  <title>Using our product</title>
</head>
<body>
  <div id="preloader"></div>
  <?php require_once './components/header.php';?>
  <section>
    <h2>DIRECT USING PRODUCT RIGHT ON WEBSITE</h2>
    <select><option>Website</option></select>
    <select><option>Categories to show</option></select>
    <select><option>Number of rows</option></select>
    <select><option>Year start</option></select>
    <select><option>Year end</option></select>
    <button style="background:blue; color:white;">Find</button>
    <h3>THE RESULT</h3>
    <div style="background:#ccc; height:150px;"></div>
  </section>
  <?php require_once './components/footer.php'; ?>
  <?php require_once './components/script.php'; ?>
</body>
</html>
