// Fetch and display posts from the server
function loadPosts() {
  fetch('fetch_posts.php')
    .then(response => response.json())
    .then(data => {
      const contributions = document.getElementById('contributions');
      contributions.innerHTML = ''; // Clear existing posts
      data.forEach(post => {
        const recipeCard = document.createElement('div');
        recipeCard.classList.add('recipe-card');
        recipeCard.innerHTML = `
          <h3>${post.title}</h3>
          <p><strong>Description:</strong> ${post.description}</p>
          <p><strong>Ingredients:</strong> ${post.ingredients}</p>
          <p><strong>Steps:</strong> ${post.steps}</p>
          <div class="reactions">
            <button><i class="fas fa-thumbs-up"></i></button>
            <button><i class="fas fa-thumbs-down"></i></button>
            <button><i class="fas fa-comment"></i></button>
          </div>
          <div class="comments">
            <textarea placeholder="Add a comment"></textarea>
            <button>Comment</button>
          </div>
        `;
        contributions.appendChild(recipeCard);
      });
    })
    .catch(error => console.error('Error loading posts:', error));
}

// Load posts when the page loads
document.addEventListener('DOMContentLoaded', loadPosts);