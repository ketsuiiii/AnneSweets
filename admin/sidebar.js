
  const toggleBtn = document.getElementById('toggleBtn');
  const sidebar = document.getElementById('sidebar');
  const content = document.getElementById('content');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('minimized');
    content.classList.toggle('minimized');
  });

  // Add dropdown functionality
  document.querySelectorAll('.dropdown > a').forEach(dropdownToggle => {
    dropdownToggle.addEventListener('click', (e) => {
      e.preventDefault();
      const parent = dropdownToggle.parentElement;
      parent.classList.toggle('active');
    });
  });
