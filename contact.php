<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once './components/head.php'; ?>
  <title>Contact us</title>
</head>

<body>
  <div id="preloader"></div>
  <?php require_once './components/header.php';?>

  <!-- PAGE 5: Contact -->
  <section class="page active" style="background:#dce7ff">
    <div style="width: 100%; margin-bottom: 20px;">
      <h2 style="text-align: center;">Any questions? Feel free to ask us!</h2>
      <form id = "contact-form">
        <div style="width: 100%; margin-bottom: 15px;">
          <label for="name" style="margin-left: 0;"><strong>Name:</strong></label>
          <input type="text" placeholder="Your Name..." id="name" required>
        </div>
        <div style="width: 100%; margin-bottom: 15px;">
          <label for="email" style="margin-left: 0;"><strong>Email:</strong></label>
          <input type="email" placeholder="Your Email..." id="email" required>
        </div>
        <div style="width: 100%; margin-bottom: 15px;">
          <label for="subject" style="margin-left: 0;"><strong>Title:</strong></label>
          <input type="text" placeholder="Your Title..." id="subject" required>
        </div>
        <div style="width: 100%; margin-bottom: 15px;">
          <label for="message" style="margin-left: 0;"><strong>Message:</strong></label>
          <textarea placeholder="Your Message..." rows="5" id="message" style="resize: none;"></textarea>
        </div>
        <button style="background:blue; color:white;">SUBMIT</button>
      </form>
    </div>

    <h2>OUR CONTRIBUTORS</h2>
    <div class="grid" style="grid-template-columns: repeat(2, 1fr); margin: auto;">
      <div>
        <div class="circle"></div>
        <p>Họ và Tên<br>Email</p>
      </div>
      <div>
        <div class="circle"></div>
        <p>Họ và Tên<br>Email</p>
      </div>
      <div>
        <div class="circle"></div>
        <p>Họ và Tên<br>Email</p>
      </div>
      <div>
        <div class="circle"></div>
        <p>Họ và Tên<br>Email</p>
      </div>
    </div>
  </section>
  <?php require_once './components/script.php'; ?>
</body>

</html>