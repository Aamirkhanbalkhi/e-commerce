<script>
    // Get all the pagination links
    const paginationLinks = document.querySelectorAll('.pagination .page-item a');

    // Function to handle click on pagination links
    function handlePageClick(event) {
        event.preventDefault();
        // Remove 'active' class from all pagination links
        paginationLinks.forEach(link => link.parentElement.classList.remove('active'));

        // Add 'active' class to the clicked link
        event.target.parentElement.classList.add('active');

        // Here you can add functionality to load content for the selected page
        // For example, fetch data for the selected page via AJAX and update the content
        // Or simply console log the selected page number
        const pageNumber = event.target.innerText;
        console.log(`Selected Page: ${pageNumber}`);
    }

    // Add click event listeners to pagination links
    paginationLinks.forEach(link => {
        link.addEventListener('click', handlePageClick);
    });

    // SEACRCH FUNCTION
    // Get the input field element
    const searchInput = document.getElementById('inputPassword2');

    // Function to handle search input changes
    function handleSearch() {
        const searchQuery = searchInput.value.toLowerCase(); // Get the search query and convert to lowercase

        // Logic to filter or perform search based on the query
        // For example, if you have a list of items to filter:
        const itemsToSearch = document.querySelectorAll('.items-to-search'); // Replace with appropriate selector for items

        itemsToSearch.forEach(item => {
            const text = item.textContent.toLowerCase(); // Get item's text content and convert to lowercase
            if (text.includes(searchQuery)) {
                item.style.display = 'block'; // Show the item if it includes the search query
            } else {
                item.style.display = 'none'; // Hide the item if it doesn't include the search query
            }
        });
    }

    // Add input event listener to the search input
    searchInput.addEventListener('input', handleSearch);

    // CATEGORY FUNCTION

    // Get all pagination links including 'Previous' and 'Next' buttons
    const paginationLinks1 = document.querySelectorAll('.pagination.pagination a.page-link');
    const prevButton = document.querySelector('.pagination.pagination .prev');
    const nextButton = document.querySelector('.pagination.pagination .next');

    // Function to handle page link clicks
    function handlePageLinkClick(event) {
        event.preventDefault();
        const pageNumber = event.target.innerText;
        console.log(`Navigating to page ${pageNumber}`);
        // Implement logic to load content for the selected page
    }

    // Function to handle 'Previous' button click
    function handlePrevButtonClick(event) {
        event.preventDefault();
        // Implement logic to go to the previous page
        console.log('Going to previous page');
    }

    // Function to handle 'Next' button click
    function handleNextButtonClick(event) {
        event.preventDefault();
        // Implement logic to go to the next page
        console.log('Going to next page');
    }

    // Add click event listeners to pagination links
    paginationLinks.forEach(link => {
        link.addEventListener('click', handlePageLinkClick);
    });

    // Add click event listeners to 'Previous' and 'Next' buttons
    prevButton.addEventListener('click', handlePrevButtonClick);
    nextButton.addEventListener('click', handleNextButtonClick);
</script>