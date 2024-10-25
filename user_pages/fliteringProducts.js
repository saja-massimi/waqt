document.addEventListener('DOMContentLoaded', function () {

    const gridViewBtn = document.querySelector('.fa-th-large');
    const listViewBtn = document.querySelector('.fa-bars');
    const productContainer = document.querySelectorAll('.product-item');

    gridViewBtn.addEventListener('click', function () {
        productContainer.forEach(product => {
            product.classList.remove('list-view');
        });
    });

    listViewBtn.addEventListener('click', function () {
        productContainer.forEach(product => {
            product.classList.add('list-view');
        });
    });

});
//*******************************************************************************/
//function to filter products by newest, oldest
document.addEventListener('DOMContentLoaded', function () {
    const sortButton = document.getElementById('sortButton');
    const sortLinks = document.querySelectorAll('.dropdown-item[data-sort]');

    sortLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const sortType = this.getAttribute('data-sort');
            sortButton.textContent = this.textContent;

            applySort(sortType);
        });
    });

    function applySort(sortType) {
        const queryString = new URLSearchParams({ sort: sortType }).toString();

        fetch('./controllers/filterResultsController.php?' + queryString)
            .then(response => response.text())
            .then(data => {
                document.getElementById('productList').innerHTML = data;
            })
            .catch(error => console.error('Error fetching sorted results:', error));
    }
});

//********************************************************************************/
document.addEventListener('DOMContentLoaded', function () {

    const priceSlider = document.getElementById('priceRange');
    priceSlider.addEventListener('input', function () {
        document.getElementById('priceRangeValue').innerText = priceSlider.value + ' JD';
        applyFilters();
    });

    const selectedSorrt = document.getElementById('sort');
    selectedSorrt.addEventListener('change', function () {

    });

    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            applyFilters();
        });
    });

    function applyFilters() {
        const productList = document.getElementById('productList');

        productList.innerHTML = '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>';

        const price = priceSlider.value;

        const selectedCategories = Array.from(document.querySelectorAll('input[name="category[]"]:checked')).map(cb => cb.value);
        const selectedBrands = Array.from(document.querySelectorAll('input[name="brand[]"]:checked')).map(cb => cb.value);
        const selectedMaterials = Array.from(document.querySelectorAll('input[name="material[]"]:checked')).map(cb => cb.value);

        const queryString = new URLSearchParams({
            priceRange: price,
            categories: selectedCategories.join(','),
            brands: selectedBrands.join(','),
            materials: selectedMaterials.join(',')
        }).toString();

        fetch('./controllers/filterResultsController.php?' + queryString)
            .then(response => response.text())
            .then(data => {
                document.getElementById('productList').innerHTML = data;
            })
            .catch(error => console.error('Error fetching filtered results:', error));
    }
});

//category and all products
