document.getElementById('editForm').addEventListener('submit', function (event) {
  const firstName = document.querySelector('[name="firstName"]').value;
  const lastName = document.querySelector('[name="lastName"]').value;
  const email = document.querySelector('[name="email"]').value;

  if (firstName.length < 4 || lastName.length < 4) {
    alert("First and last name must be at least 4 characters.");
    event.preventDefault();
  }
});

// function togglePasswordVisibility() {
//   const passwordDisplay = document.getElementById('passwordDisplay');
//   const eyeIcon = document.getElementById('eyeIcon');
//   if (passwordDisplay.textContent === '••••••••') {
//     passwordDisplay.textContent = '<?php echo $password; ?>';
//     eyeIcon.textContent = '👁️';
//   } else {
//     passwordDisplay.textContent = '••••••••';
//     // eyeIcon.textContent = '&#128065;';
//   }
// }

function togglePassword() {
  const passwordField = document.getElementById("password");
  passwordField.type = passwordField.type === "password" ? "text" : "password";
}

function openModal() {
  document.getElementById('editModal').style.display = 'block';
}

function closeModal() {
  document.getElementById('editModal').style.display = 'none';
}

window.onclick = function (event) {
  const modal = document.getElementById('editModal');
  if (event.target === modal) {
    modal.style.display = 'none';
  }
};
