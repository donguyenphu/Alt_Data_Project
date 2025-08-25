(function () {
    emailjs.init("tbKcbuF7jmwEaWOYi"); // Replace with your EmailJS public key
})();

/// Variables start
let isSending = false;
let contactForm = document.getElementById('contact-form');
let nameValue = document.getElementById("name");
let emailValue = document.getElementById("email");
let subjectValue = document.getElementById("subject");
let messageValue = document.getElementById("message");
/// Variables end

function isValidEmail(email) {
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}


contactForm.addEventListener('submit', function (event) {
    event.preventDefault();
    if (isSending) return;

    /// check email format
    if (!isValidEmail(emailValue.value)) {
        alert("❌ Invalid email format!");
        return;
    }

    isSending = true;
    isFetch = true;
    // 2. Call Abstract API (replace API_KEY with yours)
    fetch(`https://emailvalidation.abstractapi.com/v1/?api_key=8ac0c738953b426a99ee814f97c88e85&email=${emailValue.value}`)
        .then(res => res.json())
        .then(data => {
            // Check deliverability
            if (data.deliverability !== "DELIVERABLE") {
                isFetch = false;
                alert("⚠️ This email may not exist or is undeliverable.");
                isSending = false;
                return;
            }
            // If valid → Send with EmailJS
            let info = {
                name: nameValue.value,
                email: emailValue.value,
                subject: subjectValue.value,
                message: messageValue.value,
            };
            // If cant find email → no send
            if (isFetch) return emailjs.send("service_z58yzuf", "template_uyzlsx5", info);
        })
        .then(() => {
            if (isFetch) {
                alert("✅ Your message has been sent!");
                isSending = false;
                isFetch = true;
                contactForm.reset();
            }
        })
        .catch(error => {
            alert("❌ Failed: " + error);
            isSending = false;
        });
    console.log(isFetch);
});
