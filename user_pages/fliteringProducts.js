document.addEventListener('DOMContentLoaded', function () {

    // Elements for "All" checkboxes and respective category checkboxes
    const allCategoryCheckbox = document.getElementById('all');
    const categoryCheckboxes = document.querySelectorAll('input[name="category[]"]:not(#all)');

    const allBrandCheckbox = document.getElementById('allBrands');
    const brandCheckboxes = document.querySelectorAll('input[name="brand[]"]:not(#allBrands)');

    const allMaterialCheckbox = document.getElementById('allMaterials');
    const materialCheckboxes = document.querySelectorAll('input[name="material[]"]:not(#allMaterials)');

    const priceSlider = document.getElementById('priceRange');
    const gridViewBtn = document.querySelector('.fa-th-large');
    const listViewBtn = document.querySelector('.fa-bars');
    const productContainer = document.querySelectorAll('.product-item');
    const sortButton = document.getElementById('sortButton');
    const sortLinks = document.querySelectorAll('.dropdown-item[data-sort]');

    // Function to apply filters
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

    // Generic function to handle "All" checkbox logic
    function handleAllCheckbox(allCheckbox, checkboxes) {
        allCheckbox.addEventListener('change', function () {
            const isChecked = allCheckbox.checked;
            checkboxes.forEach(checkbox => checkbox.checked = isChecked);
            applyFilters();
        });

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                allCheckbox.checked = [...checkboxes].every(cb => cb.checked);
                applyFilters();
            });
        });
    }

    // Apply "All" checkbox logic for each filter group
    handleAllCheckbox(allCategoryCheckbox, categoryCheckboxes);
    handleAllCheckbox(allBrandCheckbox, brandCheckboxes);
    handleAllCheckbox(allMaterialCheckbox, materialCheckboxes);

    // Price slider event
    priceSlider.addEventListener('input', function () {
        document.getElementById('priceRangeValue').innerText = priceSlider.value + ' JD';
        applyFilters();
    });

    // Grid/List view switch
    gridViewBtn.addEventListener('click', function () {
        productContainer.forEach(product => product.classList.remove('list-view'));
    });

    listViewBtn.addEventListener('click', function () {
        productContainer.forEach(product => product.classList.add('list-view'));
    });

    // Sorting functionality
    sortLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const sortType = this.getAttribute('data-sort');
            sortButton.textContent = this.textContent;

            const queryString = new URLSearchParams({ sort: sortType }).toString();

            fetch('./controllers/filterResultsController.php?' + queryString)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('productList').innerHTML = data;
                })
                .catch(error => console.error('Error fetching sorted results:', error));
        });
    });

//HANDLE PAGINATION

    const paginationContainer = document.getElementById('pagination');

function loadProducts(page = 1) {
        const queryString = new URLSearchParams({ page }).toString();

        fetch(`./controllers/filterResultsController.php?${queryString}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('productList').innerHTML = data;
                updatePagination(page); // Update the pagination buttons
            })
            .catch(error => console.error('Error fetching products:', error));
    }

    


    function updatePagination(currentPage) {
        const totalPages = 5; // This should be dynamically set based on product count
        paginationContainer.innerHTML = '';

        const prevDisabled = currentPage === 1 ? 'disabled' : '';
        const nextDisabled = currentPage === totalPages ? 'disabled' : '';

        // Previous Button
        paginationContainer.innerHTML += `<li class="page-item ${prevDisabled}">
            <a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a>
        </li>`;

        // Page Numbers
        for (let i = 1; i <= totalPages; i++) {
            const activeClass = i === currentPage ? 'active' : '';
            paginationContainer.innerHTML += `<li class="page-item ${activeClass}">
                <a class="page-link" href="#" data-page="${i}">${i}</a>
            </li>`;
        }

        // Next Button
        paginationContainer.innerHTML += `<li class="page-item ${nextDisabled}">
            <a class="page-link" href="#" data-page="${currentPage + 1}">Next</a>
        </li>`;

        // Event listeners for each page link
        document.querySelectorAll('#pagination .page-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const page = parseInt(this.getAttribute('data-page'));
                if (!isNaN(page) && page > 0 && page <= totalPages) {
                    loadProducts(page);
                }
            });
        });
    }

    loadProducts(1);




});
