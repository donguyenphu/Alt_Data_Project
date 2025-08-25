<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once './components/head.php'; ?>
  <title>Contact us</title>
</head>

<body>
  <div id="preloader"></div>
  <?php require_once './components/header.php'; ?>
  <section style="background:#dce7ff">
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
    </div>
    <!-- Form end -->
  </section>
  <?php require_once './components/footer.php'; ?>
  <?php require_once './components/script.php'; ?>
</body>

</html>