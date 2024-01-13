<?php

namespace App\Http\Controllers;

use App\Models\LygSewingOutput;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class LygSewingOutputController extends Controller
{
   public function index()
   {
    $data =  LygSewingOutput::select('TrnDate as date', 'StyleCode as style')
                            ->selectRaw('SUM(QtyOutput) as totalOutput')
                            ->selectRaw('COUNT(DISTINCT SizeName) as totalSize')
                            ->groupBy('date', 'style')
                            ->orderBy('date')
                            ->get();
    return view('welcome', compact('data'));
   }

   public function getDataByDateAndStyle(Request $request)
   {
      $distinctSizes = LygSewingOutput::distinct()->pluck('SizeName');
      $selectStatements = [
         'OperatorName',
         'DestinationCode',
      ];

      foreach ($distinctSizes as $size) {
         $selectStatements[] = LygSewingOutput::raw("SUM(CASE WHEN SizeName = '$size' THEN QtyOutput ELSE 0 END) as jumlah_size_$size");
      }

      $selectStatements[] = LygSewingOutput::raw('SUM(QtyOutput) as total_qty');

      $data = LygSewingOutput::select($selectStatements)
         ->where('TrnDate', $request->date)
         ->where('StyleCode', $request->style)
         ->groupBy('OperatorName', 'DestinationCode')
         ->get();
    return response(json_decode($data),200);
   }
}
