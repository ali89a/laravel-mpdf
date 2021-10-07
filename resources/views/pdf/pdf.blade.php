<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $order->invoice_no ?? 'Invoice' }} </title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table,
        td,
        th {
            border: 1px solid #08010C;
        }
        .bb-none {
            border-bottom: 2px solid transparent;
        }
        .br-none {
            border-right: 2px solid #fff;
        }
        .bt-none {
            border-top: 2px solid #fff;
        }
        .bl-none {
            border-left: 2px solid #fff;
        }
        .tc {
            text-align: center;
        }
        .tr {
            text-align: right;
        }
        body {
            font-family: bangla;
            font-size: 13px;
            background-color: red;
        }
        .fs {
            font-size: 12px;
        }
        @page {
            header: page-header;
            footer: page-footer;
        }
        .gtc {
            text-align: center;
            border-radius: 15px;
        }
        .sgtc {
            background-color: green;
            color: white;
            font-size: 20px;
        }
        .page-break {
            page-break-after: always;
        }
    </style>

</head>

<body>

<htmlpageheader name="page-header">
    <table style="border: 2px solid #fff;">
        <tr>
            <td class="tc bb-none">
                <p style="font-size: 15px;">Parcelsheba</p>
            </td>
        </tr>
        <tr>
            <td class="tc" style="font-size: 10px;">
                <p class="card-text mb-25">Address : Block C, Section C, House 181/182</p>
                <p class="card-text mb-25">Mirpur Dhaka, Bangladesh</p>
                <p class="card-text mb-0">+8801777873960</p>
            </td>
        </tr>
    </table>

</htmlpageheader>
<br>
<br>

<br>
<h4 style="padding:0;margin-bottom:2px;">Parcel Information</h4>

<table style="border: 2px solid #000;">
    <tr>
        <th>Sl No</th>
        <th>Customer Details</th>
        <th>Merchant Details</th>
        <th>Tracking ID</th>
        <th>Invoice Number</th>
        <th>Collection Amount</th>
        <th>Date & Time</th>
        <th>Note</th>
    </tr>

  
</table>

</body>

</html>



