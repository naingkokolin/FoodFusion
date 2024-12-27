// Handle form submission for Contact Us
document.getElementById('contact-form').addEventListener('submit', function (e) {
  e.preventDefault();

  // Get the form data
  const name = document.getElementById('full-name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('message').value;

  // Simple confirmation message (can be customized or extended for server-side handling)
  alert(`Thank you for reaching out, ${name}! We have received your message and will get back to you soon.`);

  // Reset the form after submission
  document.getElementById('contact-form').reset();
});
