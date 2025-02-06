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
        loadPosts(); // Refresh posts after successful submission
        alert("Post shared successfully!");
      },
      error: function (error) {
        console.error("Error submitting post:", error);
        alert("Error sharing post. Please try again.");
      }
    });
  });

  function loadPosts() {
    $.ajax({
      url: 'fetch_posts.php',
      dataType: 'html',
      success: function (data) {
        $('#contributions').html(data); 
        $('.comments button').click(function () {
          const postId = $(this).attr('data-post-id');
          postComment(this, postId);
          alert("commentttttt");
        });
      },
      error: function (error) {
        console.error('Error loading posts:', error);
      }
    });
  }

  function postComment(button, post_id) {
    const commentText = button.previousElementSibling.value;

    if (commentText.trim() === "") {
      alert("Please enter a comment before posting.");
      return;
    }

    $.ajax({
      type: 'POST',
      url: 'submit_comment.php',
      data: {
        post_id: post_id,
        content: commentText
      },
      success: function (response) {
        console.log(response);
        const commentElement = document.createElement("div");
        commentElement.classList.add("comment-item");
        commentElement.textContent = commentText;

        const commentList = button.nextElementSibling;
        commentList.appendChild(commentElement);
        button.previousElementSibling.value = "";

        loadPosts();
      }, 
      error: function (error) {
        console.error("Error submitting comment:", error);
        alert("Error posting comment. Please try again.");
      }
    });

    // const commentElement = document.createElement("div");
    // commentElement.classList.add("comment-item");
    // commentElement.textContent = commentText;

    // const commentList = button.nextElementSibling;
    // commentList.appendChild(commentElement);
    
    // button.previousElementSibling.value = "";
  }

  loadPosts(); // Initial load of posts
});