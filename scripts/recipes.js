document.addEventListener('DOMContentLoaded', () => {
  const filters = document.querySelectorAll('#recipes .filters select');
  const recipeCards = document.querySelectorAll('.recipe-card');

  filters.forEach(filter => {
    filter.addEventListener('change', filterRecipes);
  });

  function filterRecipes() {
    const cuisine = document.getElementById('cuisine').value;
    const diet = document.getElementById('diet').value;
    const difficulty = document.getElementById('difficulty').value;

    recipeCards.forEach(card => {
      const matchesCuisine = cuisine === 'all' || card.dataset.cuisine === cuisine;
      const matchesDiet = diet === 'all' || card.dataset.diet === diet;
      const matchesDifficulty = difficulty === 'all' || card.dataset.difficulty === difficulty;

      if (matchesCuisine && matchesDiet && matchesDifficulty) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  }

  filterRecipes();
});