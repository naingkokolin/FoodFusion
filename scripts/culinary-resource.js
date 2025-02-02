document.querySelectorAll('.download-btn').forEach(button => {
  button.addEventListener('click', function (event) {
    event.preventDefault();
    const fileUrl = this.href;
    const fileName = fileUrl.split('/').pop();
    const link = document.createElement('a');
    link.href = fileUrl;
    link.download = fileName;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);

    // Show a toast notification
    const toast = document.createElement('div');
    toast.textContent = `Downloading ${fileName}...`;
    toast.style.position = 'fixed';
    toast.style.bottom = '20px';
    toast.style.left = '50%';
    toast.style.transform = 'translateX(-50%)';
    toast.style.backgroundColor = '#333';
    toast.style.color = '#fff';
    toast.style.padding = '10px 20px';
    toast.style.borderRadius = '5px';
    toast.style.zIndex = '1000';
    document.body.appendChild(toast);

    // Remove the toast after 3 seconds
    setTimeout(() => {
      document.body.removeChild(toast);
    }, 3000);
  });
});