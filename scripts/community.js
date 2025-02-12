$(document).ready(function () {
  $('#post-form').submit(function (event) {
    event.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'submit_post.php',
      data: $(this).serialize(),
      success: function (response) {
        console.log(response);
        $('#post-form')[0].reset();
        loadPosts();
        alert("Post shared successfully!");
      },
      error: function (error) {
        console.error("Error submitting post:", error);
        alert("Error sharing post. Please try again.");
      }
    });
  });

  $('#contributions').on('click', '.comments button', function (event) {
    event.preventDefault();
    const recipe_id = $(this).data('recipe_id');
    postComment(this, recipe_id);
  });

  function loadPosts() {
    $.ajax({
      url: 'fetch_posts.php',
      dataType: 'html',
      success: function (data) {
        $('#contributions').html(data);
      },
      error: function (error) {
        console.error('Error loading posts:', error);
      }
    });
  }

  function postComment(button, recipe_id) {
    const commentText = button.previousElementSibling.value.trim();

    if (commentText.trim() === "") {
      alert("Please enter a comment before posting.");
      return;
    }

    console.log(commentText);

    $.ajax({
      type: 'POST',
      url: 'submit_comment.php',
      data: {
        recipe_id: recipe_id,
        content: commentText
      },
      success: function (response) {
        loadPosts();
      },
      error: function (error) {
        console.error("Error submitting comment:", error);
        alert("Error posting comment. Please try again.");
      }
    });
  }

  loadPosts();

  $('#contributions').on('click', '.js-like-btn', function () {
    const recipeCard = $(this).closest('.recipe-card');
    const recipeId = recipeCard.find('.recipe-id').val();
    const dislikeButton = recipeCard.find('.js-dislike-btn');
    handleLike(recipeId, dislikeButton);
    $(this).css('color', '#ff6347');
    dislikeButton.css('color', '');
  });

  $('#contributions').on('click', '.js-dislike-btn', function () {
    const recipeCard = $(this).closest('.recipe-card');
    const recipeId = recipeCard.find('.recipe-id').val();
    const likeButton = recipeCard.find('.js-like-btn');
    handleDislike(recipeId);
    $(this).css('color', '#ff6347');
    likeButton.css('color', '');
  });


  function handleLike(recipeId, dislikeButton) {
    console.log('Liked recipe with ID:', recipeId);
    $.ajax({
      type: 'POST',
      url: 'submit_like.php',
      data: { recipe_id: recipeId },
      success: function (response) {
        console.log(response);
        dislikeButton.prop('disabled', true);
      },
      error: function (error) {
        console.error("Error submitting like:", error);
      }
    });
  }

  function handleDislike(recipeId, likeButton) {
    console.log('Disliked recipe with ID:', recipeId);
    $.ajax({
      type: 'POST',
      url: 'submit_dislike.php',
      data: { recipe_id: recipeId },
      success: function (response) {
        console.log(response);
        likeButton.prop('disabled', true);
      },
      error: function (error) {
        console.error("Error submitting dislike:", error);
      }
    });
  }
});