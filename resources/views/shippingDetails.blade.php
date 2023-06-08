<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shipping page</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: darkgray;
        }

        .arrow {
            cursor: pointer;
        }

        .child-table-row {
            display: none;
        }

        .child-table-row.show {
            display: table-row;
        }
        .table-fixed {
            table-layout: fixed;
        }

        .child-table-container {
            overflow-x: auto;
        }
        .empty-td {
            width: 50px;
        }




    </style>
</head>
<body class="antialiased">
@include('header')

<div class="container">
    <h1>Shipping page</h1>

    <div class="table-responsive">
        <table class="table table-striped table-fixed">
            <thead class="table-dark">
            <tr>
                <th><input type="checkbox" id="selectAll"></th>
                <th></th>
                <th>Item</th>
                <th>Order Qty</th>
                <th>Shipped Qty</th>
                <th>Back Ordered Qty</th>
                <th>Est Delivery Date</th>
                <th>Traking #</th>
                <th>Traking Link</th>
                <th>Notify Status</th>
                <th>Notify By</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $key => $item)
                <tr>
                    <td>
                        <input type="checkbox" class="checkbox">
                    </td>
                    <td><span class="arrow">&#x25BC;</span></td>
                    <td>{{ $item->item_name }}</td>
                    <td>{{ $item->order_qty }}</td>
                    <td>{{ $item->shipped_qty }}</td>
                    <td>{{ $item->back_order_qty }}</td>
                    <td>{{ $item->delivery_date }}</td>
                    <td>{{ $item->tracking }}</td>
                    <td>{{ $item->tracking_link }}</td>
                    <td>
                        <div class="dropdown">
                            @if($item->notify_status == 1)
                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownLabel" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sent
                                </button>
                            @else
                                <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownLabel" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Not Sent
                                </button>
                            @endif
                            <div class="dropdown-menu" aria-labelledby="dropdownLabel">
                                <a class="dropdown-item" href="#">Sent</a>
                                <a class="dropdown-item" href="#">Not Sent</a>
                            </div>
                        </div>
                    </td>
                    <td>{{ $item->notify_by }}</td>
                </tr>

                <tr class="child-table-row">
                    <td colspan="11">
                        <div class="child-table-container">
                            <table class="table table-striped table-fixed">
                                <thead class="table-dark">
                                <tr>
                                    <th class="empty-td"></th>
                                    <th class="empty-td"></th>
                                    <th>Size</th>
                                    <th>Player Name</th>
                                    <th>Player Number</th>
                                    <th>Qty</th>
                                    <th>Shipped Qty</th>
                                    <th>Back Ordered Qty</th>
                                    <th>Est Delivery Date</th>
                                    <th>Traking #</th>
                                    <th>Traking link</th>
                                    <th>Notify Status</th>
                                    <th>Notify By</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>
                                    <td class="empty-td"><input type="checkbox" class="checkbox2"></td>
                                    <td class="empty-td"></td>
                                    <td>YS</td>
                                    <td>John</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>15/05/2023</td>
                                    <td>USPS158448</td>
                                    <td>https://usps.com</td>
                                    <td>
                                        <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownLabel" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sent
                                        </button>
                                    </td>
                                    <td>Alissha</td>
                                </tr>

                                <tr>
                                    <td class="empty-td"><input type="checkbox" class="checkbox2"></td>
                                    <td class="empty-td"></td>
                                    <td>YS</td>
                                    <td>John</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>15/05/2023</td>
                                    <td>USPS158448</td>
                                    <td>https://usps.com</td>
                                    <td>
                                        <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownLabel" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sent
                                        </button>
                                    </td>
                                    <td>Alissha</td>
                                </tr>

                                <tr>
                                    <td class="empty-td"><input type="checkbox" class="checkbox2"></td>
                                    <td class="empty-td"></td>
                                    <td>YS</td>
                                    <td>John</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>15/05/2023</td>
                                    <td>USPS158448</td>
                                    <td>https://usps.com</td>
                                    <td>
                                        <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownLabel" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sent
                                        </button>
                                    </td>
                                    <td>Alissha</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

@include('footer')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function() {
        $('.arrow').click(function() {
            $(this).toggleClass('up');
            var childTableRow = $(this).closest('tr').next('.child-table-row');
            childTableRow.toggle();

            // Change arrow icon based on child table visibility
            if (childTableRow.is(':visible')) {
                $(this).html('&#x25B2;'); // Up arrow
            } else {
                $(this).html('&#x25BC;'); // Down arrow
            }
        });
    });



    $(document).ready(function() {
        // Handle parent checkbox change event
        $('#selectAll').change(function() {
            var isChecked = $(this).prop('checked');
            $('.checkbox').prop('checked', isChecked);
        });

        // Handle child checkboxes change event
        $('.checkbox').change(function() {
            var totalChildCheckboxes = $('.checkbox').length;
            var checkedChildCheckboxes = $('.checkbox:checked').length;
            var isAllChildCheckboxesChecked = totalChildCheckboxes === checkedChildCheckboxes;
            $('#selectAll').prop('checked', isAllChildCheckboxesChecked);
        });
    });

    $(document).ready(function() {
        // Handle parent checkbox change event
        $('.checkbox').change(function() {
            var isChecked = $(this).prop('checked');
            $('.checkbox2').prop('checked', isChecked);
        });

        // Handle child checkboxes change event
        $('.checkbox2').change(function() {
            var totalChildCheckboxes = $('.checkbox2').length;
            var checkedChildCheckboxes = $('.checkbox2:checked').length;
            var isAllChildCheckboxesChecked = totalChildCheckboxes === checkedChildCheckboxes;
            $('.checkbox').prop('checked', isAllChildCheckboxesChecked);
        });
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
