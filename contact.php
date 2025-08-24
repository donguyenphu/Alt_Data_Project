<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once './components/head.php'; ?>
  <title>Contact us</title>
</head>

<body>
  <div id="preloader"></div>
  <?php require_once './components/header.php'; ?>

  <!-- PAGE 5: Contact -->
  <section class="page active" style="background:#dce7ff">
    <div style="width: 100%; margin-bottom: 20px;">
      <h2 class="titleContactForm">Any questions? Feel free to ask us!</h2>
      <!-- Form start -->
      <form id="contact-form">
        <div style="width: 100%; margin-bottom: 15px;">
          <label for="name" class="labelContactForm"><strong>Your name:</strong></label>
          <input type="text" placeholder="Your Name..." id="name" required>
        </div>
        <div style="width: 100%; margin-bottom: 15px;">
          <label for="email" class="labelContactForm"><strong>Your email:</strong></label>
          <input type="email" placeholder="Your Email..." id="email" required>
        </div>
        <div style="width: 100%; margin-bottom: 15px;">
          <label for="subject" class="labelContactForm"><strong>Your title:</strong></label>
          <input type="text" placeholder="Your Title..." id="subject" required>
        </div>
        <div style="width: 100%; margin-bottom: 15px;">
          <label for="message" class="labelContactForm"><strong>Your message:</strong></label>
          <textarea placeholder="Your Message..." rows="5" id="message" style="resize: none;"></textarea>
        </div>
        <button class="buttonContactForm">Submit</button>
      </form>
      <!-- Form end -->
    </div>
    <h2 class="contributorContact">OUR CONTRIBUTORS</h2>
    <div class="grid" style="grid-template-columns: repeat(2, 1fr); margin: auto;">
      <!-- Contributors start -->
      <div style="width: 50%; margin: auto;">
        <div style="margin: auto;">
          <div class="circle"></div>
          <p>Họ và Tên:<br>Email:</p>
        </div style="margin: auto;">
        <div>
          <div class="circle"></div>
          <p>Họ và Tên:<br>Email:</p>
        </div>
      </div>
      <div style="width: 50%; margin: auto;">
        <div style="margin: auto;">
          <div class="circle"></div>
          <p>Họ và Tên:<br>Email:</p>
        </div>
        <div style="margin: auto;">
          <div class="circle"></div>
          <p>Họ và Tên:<br>Email:</p>
        </div>
      </div>
      <!-- Contributors end -->
    </div>
  </section>
  <?php require_once './components/footer.php'; ?>
  <?php require_once './components/script.php'; ?>
</body>

</html>