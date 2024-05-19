<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion Search</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Search Promotion</h1>
        <div class="form-group row justify-content-center">
            <label for="promotionId" class="col-sm-2 col-form-label text-right">Promotion ID:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="promotionId">
            </div>
            <div class="col-sm-2">
                <button id="searchButton" class="btn btn-primary">Search</button>
            </div>
        </div>
        <h2 class="mt-4">Buy</h2>
        <table id="buyTable" class="display table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be populated by JavaScript -->
            </tbody>
        </table>
        <h2 class="mt-4">Get</h2>
        <table id="getTable" class="display table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be populated by JavaScript -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
</body>
</html>
