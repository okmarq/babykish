<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Babykish</title>
</head>

<body>
    <div class="container my-5">
        <div class="header-search hs-simple">
            <form action="search-result" class="input-wrapper">
                <input type="text" class="form-control ui-autocomplete-input" id="order_number" name="order_number" autocomplete="off" placeholder="Search Order Number Here...">
                <button class="btn btn-primary btn-search my-3" type="submit">Search</button>
            </form>
        </div>

        <div class="my-5">
            <table class='table table-bordered table-hover table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>Customer Name</th>
                        <th scope='col'>Order Amount</th>
                        <th scope='col'>Order No.</th>
                        <th scope='col'>Total Products</th>
                        <th scope='col'>Order Status</th>
                        <th scope='col'>Customer Location</th>
                    </tr>
                </thead>
                <tbody id="display"></tbody>
            </table>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="search-order-number.js"></script>
</body>

</html>