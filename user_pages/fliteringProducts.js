document.addEventListener('DOMContentLoaded', function () {

    const priceSlider = document.getElementById('priceRange');
    priceSlider.addEventListener('input', function () {
        document.getElementById('priceRangeValue').innerText = priceSlider.value + ' JD';
        applyFilters();
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