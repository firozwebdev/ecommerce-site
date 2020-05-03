<!doctype html public "-//w3c//dtd html 4.01//en" "http://www.w3.org/tr/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=8">
    <title>Invoice</title>
    <meta name="generator" content="Invoice">
    <style type="text/css">
        body, html {
            margin: 0px;
            padding: 0px;
            background-color: #fcfcfc;
        }

        #page_1 {
            position: relative;
            overflow: hidden;
            margin: 0px;
            padding: 0px;
            border: none;
            width: 816px;
        }

		table.t1 {
		    background: #ECEFF4;
		    white-space: nowrap;
		}

		td.logo img {
		    height: 40px;
		    width: auto;
		    margin: 8px 0;
		}

		table td {
		    vertical-align: middle;
		}

		td.invoice-text {
		    color: #333542;
		    font: bold 40px 'helvetica';
		}

		.text-right {
		    text-align: right;
		}

		table {
		    width: 100%;
		    color: #878f9c;
		    padding: 22px 25px;
		    font: 14px 'helvetica';
		    line-height: 22px;
		}

		.text-center {
		    text-align: center;
		}

		td.company-name {
		    font: bold 19px 'helvetica';
		    color: #333542;
		    line-height: 34px;
		}

		td.bill-to {
		    font-weight: bold;
		    text-transform: capitalize;
		}

		td.biller-name {
		    font: bold 16px 'helvetica';
		    color: #333542;
		    text-transform: capitalize;
		    line-height: 32px;
		}

		td.order-id nobr, td.order-date nobr {
		    color: #333542;
		    font-weight: bold;
		}

		table.t3 tr.head td {
		    background: #ECEFF4;
		}

		table.t3 tr td {
		    padding: 5px 10px;
		    border-left: 1px solid #e2e2e2;
		    border-bottom: 1px solid #e2e2e2;
			text-transform: capitalize;
		}

		table.t3 tr.head td {
		    border-top: 1px solid #e2e2e2;
		}
		table.t3 tr td:last-child {
		    border-right: 1px solid #e2e2e2;
		}
		table.t3 tr:not(.head) td.product-name, table.t3 tr:not(.head) td.product-total-price,
		table.t4 .text-right {
		    font-weight: bold;
			color: #333542;
		}
        table.t4 {
            width: 400px;
            /* margin-left: 116px; */
            /* float: right; */
        }
        .summery-table-wrapper {
            margin-left: 416px;
        }

		tr.grand-total-row {
		    font-size: 15px;
		    line-height: 32px;
		    font-weight: bold;
		    color: #333542;
		}

		tr.grand-total-row td {
		    border-top: 1px solid #e2e2e2;
		}
		tr.summery-last-row td {
		    padding-bottom: 10px;
		}
        .taka {
            height: 12px;
        }

    </style>
</head>

<body>
    <div id="page_1">
        <table cellpadding=0 cellspacing=0 class="t1">
            <tbody>
                <tr>
                    <td class="logo">
                        <img src="{{asset('admin/assets/images/logo_125x.png')}}">
                    </td>
                    <td class="invoice-text text-right">INVOICE</td>
                </tr>
                <tr>
                    <td class="company-name">yinimini</td>
                    <td class="blank"></td>
                </tr>
                <tr>
                    <td class="company-address">Dhaka, Bangladesh</td>
                    <td class="blank"></td>
                </tr>
                <tr>
                    <td class="company-email">Email: contact@yinimini.com</td>
                    <td class="order-id text-right">
                        <span class="id">Order Id:</span>
                        <nobr>{{ $pen_orders->order_id }}</nobr>
                    </td>
                </tr>
                <tr>
                    <td class="company-phone">phone: 234235234523</td>
    				<td class="order-date text-right">
                        <span class="date">Order Date:</span>
                        <nobr>
                            <?php
                                $dt = new DateTime($pen_orders->created_at);
                                $tz = new DateTimeZone('Asia/Dhaka');
                                $dt->setTimezone($tz);
                                echo $dt->format('F j, Y, g:i a');
                            ?>
                        </nobr>
                    </td>
                </tr>
            </tbody>
        </table>

		<table cellpadding=0 cellspacing=0 class="t2">
            <tbody>
                <tr>
                    <td class="bill-to">Bill to:</td>
                </tr>
                <tr>
                    <td class="biller-name">{{ $pen_orders->customer->name }}</td>
                </tr>
                <tr>
                    <td class="biller-address">{{ $pen_orders->customer->delivery_address }}</td>
                </tr>
                <tr>
                    <td class="biller-email">Email: {{ $pen_orders->customer->email }}</td>
                </tr>
                <tr>
                    <td class="biller-phone">phone: {{ $pen_orders->customer->phone_number }}</td>
                </tr>
            </tbody>
        </table>
        @php
            $pid = json_decode($pen_orders->product_id);
            $product_names = json_decode($pen_orders->product_name);
            $product_qtys = json_decode($pen_orders->product_qty);
            $product_colors = json_decode($pen_orders->product_color);
            $product_sizes = json_decode($pen_orders->product_size);
            $product_price = json_decode($pen_orders->product_price);
            $sub_total = 0;
        @endphp
        <table cellpadding=0 cellspacing=0 class="t3">
            <tbody>
                <tr class="head">
                    <td class="product-number text-center">#</td>
                    <td class="product-name">Product Name</td>
                    <td class="product-quantity text-center">Qty</td>
                    <td class="product-unit-price text-center">Unit Price</td>
                    <td class="product-total-price text-center">total</td>
                </tr>
                @foreach($pid as $key=>$value)
                <tr class="body">
                    <td class="product-number text-center">{{ $key+1 }}</td>
                    <td class="product-name">
                        {{ $product_names[$key] }}
                        @if($product_sizes[$key] || $product_colors[$key]) ( @endif
                        @if($product_colors[$key]) {{ $product_colors[$key] }} @endif
                        @if($product_sizes[$key] && $product_colors[$key]) - @endif
                        @if($product_sizes[$key]) {{ $product_sizes[$key] }} @endif
                        @if($product_sizes[$key] || $product_colors[$key]) ) @endif
                    </td>
                    <td class="product-quantity text-center">{{ $product_qtys[$key] }}</td>
                    <td class="product-unit-price text-center"><img class="taka" src="{{asset('admin/assets/images/taka-icon-light.png')}}"> {{number_format($product_price[$key],2)}}</td>
                    <td class="product-total-price text-center"><img class="taka" src="{{asset('admin/assets/images/taka-icon-light.png')}}"> {{number_format(($product_price[$key] * $product_qtys[$key]),2) }}</td>
                </tr>
                @php
                    $sub_total += ($product_price[$key] * $product_qtys[$key]);
                @endphp
                @endforeach
            </tbody>
        </table>
        <div class="summery-table-wrapper">
        <table cellpadding=0 cellspacing=0 class="t4">
            <tbody>
                <tr>
                    <td class="subtotal">Sub Total</td>
                    <td class="subtotal-amount text-right"><img class="taka" src="{{asset('admin/assets/images/taka-icon-dark.png')}}"> {{number_format($sub_total,2)}}</td>
                </tr>
                <tr>
    				<td class="tax">Tax</td>
                    <td class="tax-amount text-right"><img class="taka" src="{{asset('admin/assets/images/taka-icon-dark.png')}}"> 0.00</td>
                </tr>
                <tr class="summery-last-row">
    				<td class="shipping">Shipping Cost</td>
                    <td class="shipping-amount text-right"><img class="taka" src="{{asset('admin/assets/images/taka-icon-dark.png')}}"> 50.00</td>
                </tr>
                <tr class="grand-total-row">
    				<td class="shipping">Grand Total</td>
                    <td class="shipping-amount text-right"><img class="taka" src="{{asset('admin/assets/images/taka-icon-dark.png')}}"> {{number_format($pen_orders->total_price,2)}}</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</body>

</html>
