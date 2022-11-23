<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        font-size: 10px;
    }

    table {
        border-collapse: collapse;
    }

    .invoices {
        width: 90vw;
        /* height: 700px; */
        padding: 0;
        border: 1px solid black;
        border-collapse: collapse;
    }
    .invoices .invoice-table td{
        vertical-align: top; 
    }

    .invoices .left-invoice {
        width: 45vw;
        /* height: 100%; */
        margin: 0;
        border-right: 1px solid black;
        /* border-collapse: collapse; */
        position: relative;
    }

    .invoices .left-invoice>table {
        width: 100%;
        border-bottom: 1px solid black;
        /* border-collapse: collapse; */
    }

    .invoices .left-invoice .heading-box {
        padding: 0 5px;
    }

    .invoices .left-invoice .heading-box #order-platform {
        width: 40%;

    }

    .invoices .left-invoice .heading-box #mop {
        width: 25%;
        text-align: center;
        vertical-align: middle;
    }

    .invoices .left-invoice .address-box {}

    .invoices .left-invoice .address-box #ship-to,
    #shipped-by {
        width: 50%;
        padding: 5px;
    }

    .invoices .left-invoice .barcode {}

    .invoices .left-invoice .barcode #order-id,
    #shipment-ref {
        width: 50%;
    }

    .invoices .left-invoice .barcode-opt {}

    .invoices .left-invoice .barcode-opt #payment-bar,
    #pay-amount {
        width: 50%;
    }

    .invoices .left-invoice .order-details,
    .invoices .right-invoice .order-details {
        text-align: center;
    }

    .invoices .left-invoice .order-details .item {
        width: 28%;
    }

    .invoices .left-invoice .order-details td {
        width: 8%;
    }

    .invoices .left-invoice .order-details th,
    .invoices .right-invoice .order-details th {
        background-color: rgb(199, 167, 153);
    }

    .invoices .left-invoice .order-details th,
    .invoices .left-invoice .order-details td,
    .invoices .right-invoice .order-details th,
    .invoices .right-invoice .order-details td {
        border: 1px solid black;
    }

    .invoices .left-invoice .other-details,
    .invoices .right-invoice .other-details {
        text-align: right;
    }

    .invoices .left-invoice .other-details .other-headings {
        width: 60%;
        text-align: right;
        padding-right: 5px;
    }

    .invoices .left-invoice .other-details td {
        text-align: right;
        width: 8%;
    }

    .invoices .left-invoice .other-details td,
    .invoices .left-invoice .other-details th,
    .invoices .right-invoice .other-details td,
    .invoices .right-invoice .other-details th {
        border: 1px solid black;
    }

    .invoices .left-invoice .term-cond {
        margin: 100px 0 0 0;
    }

    .invoices .left-invoice .term-cond td {
        width: 100%;
        border-top: 1px solid black;
        text-align: left;
        margin: 0;
        padding: 0;
    }

    .invoices .left-invoice .term-cond h5 {
        margin: 2px;
    }

    .invoices .left-invoice .term-cond ol,
    .invoices .left-invoice .term-cond li {
        padding: 0 15px;
        margin: 0;
    }

    .invoices .right-invoice {
        width: 45vw;
        /* height: 700px; */
        margin: -2px;
        position: relative;
    }

    .invoices .right-invoice>table {
        width: 100%;
    }

    .invoices .right-invoice .address-box th {
        background-color: rgb(199, 167, 153);
    }

    .invoices .right-invoice .address-box th,
    .invoices .right-invoice .address-box td {
        /* text-align: left; */
        border: 1px solid black;
    }

    .invoices .right-invoice .barcode {
        width: 100%;
    }

    .invoices .right-invoice .barcode td {
        width: 50%;
    }

    .invoices .right-invoice .order-details .item {
        width: 36%;
    }

    .invoices .right-invoice .order-details td {
        width: 8%;
    }

    .invoices .right-invoice .order-details,
    .invoices .right-invoice .other-details {
        width: 100%;
        margin: 0;
    }

    .invoices .right-invoice .other-details .other-headings {
        width: 60%;
        text-align: right;
        padding-right: 5px;
    }

    .invoices .right-invoice .other-details td {
        text-align: right;
        width: 8%;
    }

    .invoices .right-invoice .footer {
        width: 100%;
    }

    .invoices .right-invoice .footer #signature {
        width: 40%;
        align-items: center;
        vertical-align: middle;
    }

    .invoices .right-invoice .footer #signature img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .invoices .right-invoice .footer td {
        border: 1px solid black;
    }

    .invoices .right-invoice .footer .declaration ol,
    .invoices .right-invoice .footer .declaration li {
        margin: 0;
        padding: 0 15px;
    }

    .invoices .right-invoice .footer .declaration h5 {
        margin: 0;
    }
</style>

<body>
    <div class="invoices">
        <table class="invoice-table">
            <tr>
                <td>
                    <div class="left-invoice">
                        <table class="heading-box">
                            <tr class="heading-box">
                                <td id="order-platform">
                                    <h5 style="margin: 0">Order On:</h5>
                                    <img src="{{ public_path($order_data->logoimg) }}" alt="logo" height="50px">
                                </td>
                                <td id="mop">{{$order_data->mop}}</td>
                                <td id="other-detail">
                                    <p>Courier: {{$order_data->courier}}</p>
                                    <p>Weight : {{$order_data->weight}}</p>
                                </td>
                            </tr>
                        </table>
                        <table class="address-box">
                            <tr class="address-box">
                                <td id="ship-to">
                                    <p>Ship To:</p>
                                    <p>Name: {{$user_data->name}}</p>
                                    <p>Address: {{$user_data->address}}</p>
                                    <p>Mobile: {{$user_data->phone}}</p>
                                </td>
                                <td id="shipped-by">
                                    <p>Shipped By(If undelivered, return to):</p>
                                    <p>Company Name: {{$seller_data->name}}</p>
                                    <p>Address: {{$seller_data->address}}</p>
                                    <p>Phone: {{$seller_data->phone}}</p>
                                </td>
                            </tr>
                        </table>
                        <table class="barcode">
                            <tr class="barcode">
                                <td id="order-id">
                                    <h5 style="margin: 0px;">Order Id: #{{$barcode->order_id}}</h5>
                                    <div class="code">{!! DNS1D::getBarcodeHTML($barcode->order_id, 'C128', 1, 40) !!}</div>
                                </td>
                                <td id="shipment-ref">
                                    <h5 style="margin: 0;">Shipment REF: {{$barcode->shipment_ref}}</h5>
                                    <div class="code">{!! DNS1D::getBarcodeHTML($barcode->shipment_ref, 'C128', 1, 40) !!}</div>
                                </td>
                            </tr>
                        </table>
                        <table class="barcode-opt" style="text-align: center;">
                            <tr>
                                <td id="payment-bar" style="border-right: 1px solid black;">
                                    <h5>DEALEXPRESS-COD</h5>
                                    <div class="code" style="margin-left: 50px;">{!! DNS1D::getBarcodeHTML($barcode->tracking_no, 'C128', 1, 40) !!}</div>
                                    <p>AWB #:{{$barcode->tracking_no}}</p>
                                </td>
                                <td id="pay-amount">
                                    <h5 style="font-size: 15px;">Collect the cash - 488/-</h5>
                                </td>
                            </tr>
                        </table>
                        <table class="order-details">
                            <tr>
                                <th class="item">Item</th>
                                <th>HSN.</th>
                                <th>Qty.</th>
                                <th>Rate</th>
                                <th>Discount</th>
                                <th>Taxable</th>
                                <th>CGST</th>
                                <th>SGST</th>
                                <th>IGST</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>
                                    {{$order_details->name}}   
                                </td>
                                <td>
                                    {{$order_details->hsn}}
                                </td>
                                <td>
                                    {{$order_details->qty}}
                                </td>
                                <td>
                                    {{$order_details->rate}}
                                </td>
                                <td>
                                    {{$order_details->discount}}
                                </td>
                                <td>
                                    {{$order_details->taxable}}
                                </td>
                                <td>
                                    {{$order_details->cgst}}
                                </td>
                                <td>
                                    {{$order_details->sgst}}
                                </td>
                                <td>
                                    {{$order_details->igst}}
                                </td>
                                <td>
                                    {{$order_details->total}}
                                </td>
                            </tr>
                            
                        </table>
                        <table class="other-details">
                            <tr>
                                <th class="other-headings">Shipping</th>
                                <td>59.32</td>
                                <td>5.34</td>
                                <td>5.34</td>
                                <td>0</td>
                                <td>70.00</td>
                            </tr>
                            <tr>
                                <th class="other-headings">Gift Wrap Charges</th>
                                <td>59.32</td>
                                <td>5.34</td>
                                <td>5.34</td>
                                <td>0</td>
                                <td>70.00</td>
                            </tr>
                            <tr>
                                <th class="other-headings">COD Charges</th>
                                <td>59.32</td>
                                <td>5.34</td>
                                <td>5.34</td>
                                <td>0</td>
                                <td>70.00</td>
                            </tr>
                            <tr>
                                <th class="other-headings">Discount Applied</th>
                                <td colspan="5">59.32</td>

                            </tr>
                            <tr>
                                <th class="other-headings">Total</th>
                                <td colspan="5">59.32</td>

                            </tr>
                        </table>
                        <table class="term-cond" style="">
                            <tr>
                                <td>
                                    <ol>
                                        <h5>TERMS AND CONDITIONS:</h5>
                                        <li>Subject to the Courier Conditions of Shipment, which limits the liability of
                                            DealAmaze Courier for loss, delay or damage to consignments.</li>
                                        <li>Visit www.dealamaze.com/track-order to view the transit history of Shipment.
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div class="right-invoice">
                        <table class="address-box">
                            <tr>
                                <th>SELLER:</th>
                                <th>BUYER:</th>
                            </tr>
                            <tr class="address-box">
                                <td id="shipped-by">
                                    <p>Company Name: {{$seller_data->name}}</p>
                                    <p>Address: {{$seller_data->address}}</p>
                                    <p>Phone: {{$seller_data->phone}}</p>
                                </td>
                                <td id="ship-to">
                                    <p>Name:{{$user_data->name}}</p>
                                    <p>Address: {{$user_data->address}}</p>
                                    <p>Phone: {{$user_data->phone}}</p>
                                </td>
                            </tr>
                        </table>
                        <table class="barcode">
                            <tr class="barcode">
                                <td>
                                    <h5>Courier: {{$barcode->courier}}</h5>
                                    <h5>Order Id: #{{$barcode->order_id}}</h5>
                                </td>
                                <td>
                                    <h5>Tracking No: {{$barcode->tracking_no}}</h5>
                                    <h5>Shipment REF: {{$barcode->shipment_ref}}</h5>
                                </td>
                            </tr>
                        </table>
                        <table class="order-details">
                            <tr>
                                <th class="item">Item</th>
                                <th>Qty.</th>
                                <th>Rate</th>
                                <th>Discount</th>
                                <th>Taxable</th>
                                <th>CGST</th>
                                <th>SGST</th>
                                <th>IGST</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>
                                    {{$order_details->name}}   
                                </td>
                                
                                <td>
                                    {{$order_details->qty}}
                                </td>
                                <td>
                                    {{$order_details->rate}}
                                </td>
                                <td>
                                    {{$order_details->discount}}
                                </td>
                                <td>
                                    {{$order_details->taxable}}
                                </td>
                                <td>
                                    {{$order_details->cgst}}
                                </td>
                                <td>
                                    {{$order_details->sgst}}
                                </td>
                                <td>
                                    {{$order_details->igst}}
                                </td>
                                <td>
                                    {{$order_details->total}}
                                </td>
                            </tr>
                            
                        </table>
                        <table class="other-details">
                            <tr>
                                <th class="other-headings">Shipping</th>
                                <td>59.32</td>
                                <td>5.34</td>
                                <td>5.34</td>
                                <td>0</td>
                                <td>70.00</td>
                            </tr>
                            <tr>
                                <th class="other-headings">Gift Wrap Charges</th>
                                <td>59.32</td>
                                <td>5.34</td>
                                <td>5.34</td>
                                <td>0</td>
                                <td>70.00</td>
                            </tr>
                            <tr>
                                <th class="other-headings">COD Charges</th>
                                <td>59.32</td>
                                <td>5.34</td>
                                <td>5.34</td>
                                <td>0</td>
                                <td>70.00</td>
                            </tr>
                            <tr>
                                <th class="other-headings">Discount Applied</th>
                                <td colspan="5">59.32</td>

                            </tr>
                            <tr>
                                <th class="other-headings">Total</th>
                                <td colspan="5">59.32</td>

                            </tr>
                        </table>
                        <table class="footer">
                            <tr>
                                <td id="signature">
                                    <img src="" alt="signature">
                                </td>
                                <td>
                                    <div class="declaration">
                                        <h5>DECLARATION:</h5>
                                        <ol>
                                            <li>All goods mentioned in the invoice are inclusive all taxes and is borne
                                                by
                                                HK Retail Pvt Ltd.</li>
                                            <li>Information Provided in the invoice is true and correct to the HK Retail
                                                Pvt
                                                Ltd Knowledge</li>
                                            <li>All disputes between customer and HK Retail Pvt Ltd are subject to
                                                Telangana Jurisdictions</li>
                                            <li>Goods once sold will only be taken back or exchanged as per the HK
                                                Retail
                                                Pvt Ltd Seller exchange/return policy</li>
                                        </ol>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
