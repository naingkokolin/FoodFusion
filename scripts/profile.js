// const passwordDisplay = document.getElementById('passwordDisplay');
// const eyeIcon = document.getElementById('eyeIcon');
// const editBtn = document.getElementById('editBtn');
// const editModal = document.getElementById('editModal');
// const modalCloseBtn = document.getElementById('modalCloseBtn');
// const firstNameDisplay = document.getElementById('firstNameDisplay');
// const lastNameDisplay = document.getElementById('lastNameDisplay');
// const emailDisplay = document.getElementById('emailDisplay');

// let passwordVisible = false;

// eyeIcon.addEventListener('click', () => {
//   passwordVisible = !passwordVisible;
//   if (passwordVisible) {
//     passwordDisplay.textContent = "<?php echo $password; ?>"; // Show actual password (consider security implications)
//     eyeIcon.textContent = '&#128064;'; // Closed eye icon
//   } else {
//     passwordDisplay.textContent = "••••••••"; // Masked password
//     eyeIcon.textContent = '&#128065;'; // Open eye icon
//   }
// });

// editBtn.addEventListener('click', () => {
//   editModal.style.display = "block";
// });

// modalCloseBtn.addEventListener('click', () => {
//   editModal.style.display = "none";
// });

// window.addEventListener('click', (event) => {
//   if (event.target == editModal) {
//     editModal.style.display = "none";
//   }
// });

const editForm = document.getElementById('editForm');
editForm.addEventListener('submit', updateCheck);

function updateCheck() {
  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById('lastName').value;
  const email = document.getElementById('email').value;

  let isValid = true;

  if (firstName.length < 4) {
    document.getElementById('firstNameError').textContent = "First name must be at least 4 letters.";
    isValid = false;
  } else {
    document.getElementById('firstNameError').textContent = "";
  }

  if (lastName.length < 4) {
    document.getElementById('lastNameError').textContent = "Last name must be at least 4 letters.";
    isValid = false;
  } else {
    document.getElementById('lastNameError').textContent = "";
  }

  if (!isValidEmail(email)) {
    document.getElementById('emailError').textContent = "Invalid email format.";
    isValid = false;
  } else {
    document.getElementById('emailError').textContent = "";
  }

  if (isValid == false) {
    preventDefault();
  }  
}

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

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

// Open modal
function openModal() {
  const modal = document.getElementById('editModal');
  modal.style.display = 'block';
}

// Close modal
function closeModal() {
  const modal = document.getElementById('editModal');
  modal.style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function (event) {
  const modal = document.getElementById('editModal');
  if (event.target === modal) {
    modal.style.display = 'none';
  }
};

// TODO: fix update form disappear error
// TODO: fix onclick to addeventlistener in home.js