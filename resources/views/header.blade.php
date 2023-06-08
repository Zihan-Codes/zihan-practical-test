<!DOCTYPE html>
<html>
<head>
    <title>Header</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <style>
        .active-tab {
            background-color: #f8f9fa; /* Change this to your desired active tab color */
        }
        #back-to-orders {
           border: 2px solid red;
            border-radius: 13px;
        }
        .nav-item {
            background-color: darkgray;
            /*margin: 5px;*/
            margin-left: 5px;
        }
        .nav-link {
            /*background-color: darkgray;*/
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="">
        <div class="row">
            <div class="col">
                <ul class="navbar-nav">
                    <li id="back-to-orders" class="nav-item">
                        <a class="nav-link text-nowrap" href="{{ URL::to('/#') }}">
                            <i class="fas fa-arrow-circle-left"></i> BACK TO ORDERS
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col" style="margin-right: 150px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" id="order-details-tab" href="{{ URL::to('/order_details') }}">ORDER DETAILS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" id="order-management-tab" href="{{ URL::to('/order_management') }}">ORDER MANAGEMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" id="shipping-tab" href="{{ URL::to('/shipping') }}">SHIPPING</a>
                    </li>
                </ul>
            </div>
            <div style="margin-left: 100px" class="col text-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-sm btn-secondary text-nowrap">
                            <i class="fas fa-comment-dollar"></i> QUOTATION
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-secondary text-nowrap">
                            <i class="fas fa-comment-dollar"></i> INVOICE
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-secondary text-nowrap">
                            <i class="fas fa-copy"></i> URL
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-secondary text-nowrap">
                            <i class="fas fa-file-pdf"></i> PDF
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-secondary text-nowrap">
                            <i class="fas fa-file-csv"></i> CSV
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-secondary text-nowrap">
                            <i class="fab fa-first-order-alt"></i> RE-ORDERS
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-secondary text-nowrap">
                            <i class="fas fa-cogs"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
    $(document).ready(function() {
        var path = window.location.pathname;

        if (path === '/order_details') {
            $('#order-details-tab').addClass('active-tab');
        } else if (path === '/order_management') {
            $('#order-management-tab').addClass('active-tab');
        } else if (path === '/shipping') {
            $('#shipping-tab').addClass('active-tab');
        }
    });
</script>

</body>
</html>
