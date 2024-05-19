$(document).ready(function() {
    // Initialize DataTables
    var buyTable = $('#buyTable').DataTable();
    var getTable = $('#getTable').DataTable();

    $('#searchButton').on('click', function() {
        var promotionId = $('#promotionId').val();

        // Simulating an AJAX request
        $.ajax({
            url: 'your-api-endpoint', // Replace with your API endpoint
            method: 'GET',
            data: { promotionId: promotionId },
            success: function(response) {
                // Assuming the response has the following structure:
                // { buy: [{ product: '...', quantity: '...', price: '...' }], get: [{ product: '...', quantity: '...', price: '...' }] }

                // Clear previous data
                buyTable.clear();
                getTable.clear();

                // Populate Buy table
                response.buy.forEach(function(item) {
                    buyTable.row.add([item.product, item.quantity, item.price]);
                });

                // Populate Get table
                response.get.forEach(function(item) {
                    getTable.row.add([item.product, item.quantity, item.price]);
                });

                // Redraw tables
                buyTable.draw();
                getTable.draw();
            },
            error: function(error) {
                console.error('Error fetching promotion data:', error);
            }
        });
    });
});
