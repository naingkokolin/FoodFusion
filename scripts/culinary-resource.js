// Handle link clicks for download resources
document.querySelectorAll('.resources-category a').forEach(function (link) {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    alert('Thank you for downloading! The resource will start downloading shortly.');
    window.location.href = link.href; // Proceed to the resource download
  });
});
