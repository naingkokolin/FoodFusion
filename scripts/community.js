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
        alert("Recipe shared successfully!");
      },
      error: function (error) {
        console.error("Error submitting post:", error);
        alert("Error sharing post. Please try again.");
      }
    });
  });

  function loadPosts() {
    $.ajax({
      url: 'fetch_posts.php', // PHP file to fetch and format posts (see below)
      dataType: 'html', // Expect HTML back from the server
      success: function (data) {
        $('#contributions').html(data); // Update the contributions div with the received HTML
      },
      error: function (error) {
        console.error('Error loading posts:', error);
      }
    });
  }

  loadPosts(); // Initial load of posts
});