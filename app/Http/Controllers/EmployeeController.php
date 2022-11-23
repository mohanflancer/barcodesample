<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $order_data = (object)array(
            'logoimg' => 'logo.png',
            'mop' => 'COD',
            'courier' => 'DEALEXPRESS',
            'weight' => '250.000 gm'
        );
        $user_data = (object)array(
            'name' => 'YouSuf Mohammed',
            'address' => 'P No. 2 Sy No 86, NM Guda, Kishan Bagh,
            Hyderabad- 500064,',
            'phone' => '8639823884'
        );
        $seller_data = (object)array(
            'name' => 'HK Retail Pvt Ltd,',
            'address' => 'Warehouse-II, P No. 2, Sy No. 86, NM Guda
            Kishan Bagh, PO Bahadurpura,
            Hyderabad- 500064,
            Telangana, India',
            'phone' => '8639823884'
        );
        $barcode = (object)array(
            'courier' => 'DEALEXPRESS',
            'order_id' => 'DA0010002983',
            'shipment_ref' => '8f8ca342',
            'tracking_no' => 'DEXP0010002983IN'
        );
        $order_details = (object)array(
            'name' => 'SanDisk Cruzer Blade USB 2.0 Pen
            Drive by HK Retail Pvt Ltd-8gb',
            'hsn' => '85235100',
            'qty' => '1',
            'rate' => '295.76',
            'discount' => '0.00',
            'taxable' =>  '295.76',
            'cgst' => '26.62',
            'sgst' => '26.62',
            'igst' => '0',
            'total' => '349'
        );
        return view('pdf.table', compact('order_data', 'user_data', 'seller_data', 'barcode','order_details'));
    }

    public function showEmployees(){
        $employee = Employee::all();
        return view('pdf.invoice', compact('employee'));
      }

    public function export_pdf(){
        $employee = Employee::all();;
        view()->share('pdf.invoice',$employee);
        $pdf = Pdf::loadView('pdf.invoice', compact('employee'));
        return $pdf->download('invoice.pdf');
    }

    public function pdf_download(){
        ini_set('max_execution_time', 300);
        $order_data = (object)array(
            'logoimg' => 'logo.png',
            'mop' => 'COD',
            'courier' => 'DEALEXPRESS',
            'weight' => '250.000 gm'
        );
        $user_data = (object)array(
            'name' => 'YouSuf Mohammed',
            'address' => 'P No. 2 Sy No 86, NM Guda, Kishan Bagh,
            Hyderabad- 500064,',
            'phone' => '8639823884'
        );
        $seller_data = (object)array(
            'name' => 'HK Retail Pvt Ltd,',
            'address' => 'Warehouse-II, P No. 2, Sy No. 86, NM Guda
            Kishan Bagh, PO Bahadurpura,
            Hyderabad- 500064,
            Telangana, India',
            'phone' => '8639823884'
        );
        $barcode = (object)array(
            'courier' => 'DEALEXPRESS',
            'order_id' => 'DA0010002983',
            'shipment_ref' => '8f8ca342',
            'tracking_no' => 'DEXP0010002983IN'
        );
        $order_details = (object)array(
            'name' => 'SanDisk Cruzer Blade USB 2.0 Pen
            Drive by HK Retail Pvt Ltd-8gb',
            'hsn' => '85235100',
            'qty' => '1',
            'rate' => '295.76',
            'discount' => '0.00',
            'taxable' =>  '295.76',
            'cgst' => '26.62',
            'sgst' => '26.62',
            'igst' => '0',
            'total' => '349'
        );
        $pdf = Pdf::loadView('pdf.table', compact('order_data', 'user_data', 'seller_data', 'barcode', 'order_details'))
                ->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
