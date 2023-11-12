const clickableProducts = document.querySelectorAll('.clickable-product');

clickableProducts.forEach((clickableProduct) => {
    const modalProduct = clickableProduct.querySelector('.modal-product');
    const closeButton = modalProduct.querySelector('.top-modal span');
    const contentModal = modalProduct.querySelector('.content-modal');

    clickableProduct.addEventListener('click', (event) => {
        modalProduct.classList.add('modal-open');
        event.stopPropagation();
    });

    closeButton.addEventListener('click', (event) => {
        event.stopPropagation();
        modalProduct.classList.remove('modal-open');
    });

    modalProduct.addEventListener('click', (event) => {
        event.stopPropagation();
    });

    modalProduct.addEventListener('click', (event) => {
        modalProduct.classList.remove('modal-open');
    });
});
