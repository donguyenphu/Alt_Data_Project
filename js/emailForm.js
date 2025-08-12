console.log(123);

(function () {
    emailjs.init("tbKcbuF7jmwEaWOYi"); // Replace with your EmailJS public key
})();

let isSending = false;

let contactForm = document.getElementById('contact-form');
let nameValue = document.getElementById("name");
let emailValue = document.getElementById("email");
let subjectValue = document.getElementById("subject");
let messageValue = document.getElementById("message");

contactForm.addEventListener('submit', function (event) {
    event.preventDefault();

    if (isSending) return;

    isSending = true;

    let info = {
        name: nameValue.value,
        email: emailValue.value,
        subject: subjectValue.value,
        message: messageValue.value,
    };
    /// email services id and template id
    emailjs.send('service_z58yzuf', 'template_uyzlsx5', info)
    .then(function () {
        alert('Your message has been sent!');
        isSending = false;
        contactForm.reset();
    }, function (error) {
        isSending = false;
        alert('Failed to send: ' + JSON.stringify(error));
    });
}, { once: true });
