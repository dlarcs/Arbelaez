document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".sr-item");

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-revealed");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.2
    }
  );

  items.forEach(item => observer.observe(item));
});
