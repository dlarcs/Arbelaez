const filterElements = document.querySelector('.categories_iglesia_gallery');
const galleryItems = document.querySelectorAll('.iglesia_card');

filterElements.addEventListener("click", (event) => {
    if (event.target.classList.contains("filter_items")) {
        // Remover la clase 'active'
        const activeItem = filterElements.querySelector('.active');
        if (activeItem) {
            activeItem.classList.remove('active');
        }
        event.target.classList.add('active');

        // Filtro
        const filterValue = event.target.getAttribute('data-filter');
        galleryItems.forEach((item) => {
            if (item.classList.contains(filterValue) || filterValue === "all") {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    }
});
