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