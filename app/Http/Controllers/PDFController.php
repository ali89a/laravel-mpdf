<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    public function pdf()
    {

        $data = [];
        $pdf = PDF::loadView(
            'pdf.pdf',
            $data,
            [],
            [
                'format' => 'A4-P',
                'orientation' => 'P',
            ]
        );
        $name = 'pdf';
        return $pdf->stream($name . '.pdf');
    }
}
