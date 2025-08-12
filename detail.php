<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once './components/head.php';?>
  <title>Our project's components</title>
</head>
<body>
  <div id="preloader"></div>
  <?php require_once './components/header.php';?>

  <!-- PAGE 2: Technologies -->
  <section class="page active">
    <h2>QUOTE HERE</h2>
    <p>OUR TECHNOLOGIES / FRAMEWORK (PROJECT STACK)</p>
    <!-- Stack start -->
    <div>
      FRONTEND:
      <div style="display: flex; gap: 10px;">
        <div style="width:20px;height:20px;background:red"></div>
        <div style="width:20px;height:20px;background:blue"></div>
        <div style="width:20px;height:20px;background:black"></div>
        <div style="width:20px;height:20px;background:cyan"></div>
      </div>
      BACKEND:
      <div style="display: flex; gap: 10px;">
        <div style="width:20px;height:20px;background:gray"></div>
        <div style="width:20px;height:20px;background:gray"></div>
        <div style="width:20px;height:20px;background:gray"></div>
        <div style="width:20px;height:20px;background:gray"></div>
      </div>
      API:
      <div style="display: flex; gap: 10px;">
        <div style="width:20px;height:20px;background:gray"></div>
        <div style="width:20px;height:20px;background:gray"></div>
        <div style="width:20px;height:20px;background:gray"></div>
        <div style="width:20px;height:20px;background:gray"></div>
      </div>
    </div>
    <!-- Stack end -->
    <h3>FINANCIAL / PRICING PLANS</h3>
    <div style="background:#ccc; height:100px;"></div>
    <h3>Example video using product</h3>
    <div style="background:#eee; height:150px; text-align:center; line-height:150px;">▶</div>
  </section>
  <?php require_once './components/script.php'; ?>
</body>
</html>
