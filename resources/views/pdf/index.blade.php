<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *{
        font-size: 13px;
    }
    .invoices{
        width: 90vw;
        padding: 0;
        display: flex;
        flex-direction: row;
        border: 2px solid black;
        border-collapse: collapse;
    }
    .invoices .right-invoice{
        width: 45vw;
        margin: 0;
        border-right: 2px solid black;
    }
    .invoices .right-invoice .heading-box{
        display: flex;
        flex-direction: row;
        border-bottom: 2px solid black;
    }
    .invoices .right-invoice .heading-box .order-platform{
        width: 50%;
        padding-top: 0;
    }
    .invoices .right-invoice .heading-box .order-platform h5,img{
        margin: 5px 10px;
        
    }
    .invoices .right-invoice .heading-box .mop{
        width: 20%;
    }
    .invoices .right-invoice .heading-box .other-detail{
       
        width: 30%;
    }
    .invoices .right-invoice .address-box{
        display: flex;
        flex-direction: row;
        border-bottom: 2px solid black;
    }
    .invoices .right-invoice .address-box .receiver{
        width: 50%;
    }
    .invoices .right-invoice .address-box .sender{
        width: 50%;
    }
    .invoices .right-invoice .barcode{
        display: flex;
        flex-direction: row;
        border-bottom: 2px solid black;
    }
    .invoices .right-invoice .barcode .order-bar{
        width: 50%;
    }
    .invoices .right-invoice .barcode .shipment-bar{
        width: 50%;
    }
    .invoices .right-invoice .barcode-opt{
        display: flex;
        flex-direction: row;
        border-bottom: 2px solid black;
    }
    .invoices .right-invoice .barcode-opt .payment-bar{
        width: 50%;
        border-right: 2px solid black;
    }
    .invoices .right-invoice .barcode-opt .pay-amount{
        width: 50%;
    }
</style>
<body>
    <div class="invoices">
        <div class="right-invoice">
            <div class="heading-box">
                <div class="order-platform">
                    <h5>Order On:</h5>
                    <img src="" alt="logo">
                </div>
                <div class="mop">
                    <p>COD</p>
                </div>
                <div class="other-detail">
                    <p>Courier:DEALEXPRESS</p>
                    <p>Weight:250.00gm</p>
                </div>
            </div>
            <div class="address-box">
                <div class="receiver">
                    <h5>Ship To: </h5>
                    <p><b>Name: </b>Yousuf Mohammed</p>
                    <p><b>Address: </b></p>
                    <p><b>Mobile: </b></p>
                </div>
                <div class="sender">
                    <h5>Shipped By(If undelivered, return to): </h5>
                    <p><b>Company Name: </b></p>
                    <p><b>Address: </b></p>
                    <p><b>Phone: </b></p>
                </div>
            </div>
            <div class="barcode">
                <div class="order-bar">
                    <p>Order ID: #DA0010002983</p>
                </div>
                <div class="shipment-bar">
                    <p>Shipment REF: 8f8ca342</p>
                    
                </div>
            </div>
            <div class="barcode-opt">
                <div class="payment-bar">
                    <h5>DEALEXPRESS-COD</h5>
                    <p>AWB #:DEXP0010002983IN</p>
                </div>
                <div class="pay-amount">
                    <h5>Collect The Cash - 488/-</h5>
                </div>
            </div>
            <div class="order-data">
                <table>
                    <thead>

                    </thead>
                    <tbody></tbody>
                    <tr>
                        <th>Item</th>
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
                            SanDisk Cruzer Blade USB 2.0 Pen
                            Drive by HK Retail Pvt Ltd-8gb
                        </td>
                        <td>
                            85235100
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            295.76
                        </td>
                        <td>
                            0.00
                        </td>
                        <td>
                            295.76
                        </td>
                        <td>
                            26.62
                        </td>
                        <td>
                            26.62
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            349
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Britannia Good Day Chocochips,
                            120g
                        </td>
                        <td>
                            19053100
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            28.57
                        </td>
                        <td>
                            0.00
                        </td>
                        <td>
                            28.57
                        </td>
                        <td>
                            0.715
                        </td>
                        <td>
                            0.715
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            30
                        </td>
                    </tr>
                    <tr>
                        <th colspan="5">Shipping</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Gift Wrap Charges</th>
                        <td></td>
                    </tr>

                </table>
            </div>
            <div class="term-cond">
                <h5>TERMS AND CONDITIONS:</h5>
                <ol>
                    <li>Subject to the Courier Conditions of Shipment, which limits the liability of DealAmaze Courier for loss, delay or damage to consignments.</li>
                    <li>Visit www.dealamaze.com/track-order to view the transit history of Shipment.</li>
                </ol>
            </div>
        </div>
        <div class="left-invoice">
            <div >
                <div >
                    <h5>Ship To: </h5>
                    <p><b>Name: </b>Yousuf Mohammed</p>
                    <p><b>Address: </b></p>
                    <p><b>Mobile: </b></p>
                </div>
                <div>
                    <h5>Shipped By(If undelivered, return to): </h5>
                    <p><b>Company Name: </b></p>
                    <p><b>Address: </b></p>
                    <p><b>Phone: </b></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>