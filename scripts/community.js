// Handle form submission
document.getElementById('recipe-form').addEventListener('submit', function (e) {
  e.preventDefault();

  // Get the form data
  const title = document.getElementById('recipe-title').value;
  const description = document.getElementById('recipe-description').value;
  const ingredients = document.getElementById('recipe-ingredients').value;
  const steps = document.getElementById('recipe-steps').value;

  // Create a new recipe card
  const recipeCard = document.createElement('div');
  recipeCard.classList.add('recipe-card');

  recipeCard.innerHTML = `
    <h3>${title}</h3>
    <p><strong>Description:</strong> ${description}</p>
    <p><strong>Ingredients:</strong> ${ingredients}</p>
    <p><strong>Steps:</strong> ${steps}</p>
  `;

  // Append the new card to the contributions section
  document.querySelector('.contributions').prepend(recipeCard);

  // Reset the form
  document.getElementById('recipe-form').reset();
});
