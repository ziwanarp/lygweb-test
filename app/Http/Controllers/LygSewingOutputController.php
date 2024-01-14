<?php

namespace App\Http\Controllers;

use App\Models\LygSewingOutput;
use Illuminate\Http\Request;

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
         'TrnDate',
         'StyleCode', 
      ];

      foreach ($distinctSizes as $size) {
         $selectStatements[] = LygSewingOutput::raw("SUM(CASE WHEN SizeName = '$size' THEN QtyOutput ELSE 0 END) as jumlah_size_$size");
      }

      $selectStatements[] = LygSewingOutput::raw('SUM(QtyOutput) as total_qty');

      $data = LygSewingOutput::select($selectStatements)
         ->where('TrnDate', $request->date)
         ->where('StyleCode', $request->style)
         ->groupBy('OperatorName', 'DestinationCode','TrnDate', 'StyleCode')
         ->get();
    return response(json_decode($data),200);
   }

   public function updateDataTable(Request $request)
   {
      $data = LygSewingOutput::where('OperatorName', $request->operatorName)
                              ->where('DestinationCode', $request->destinationCode)
                              ->where('SizeName', $request->size)
                              ->where('TrnDate', $request->date)
                              ->where('StyleCode', $request->styleCode)
                              ->get();
      if(count($data) > 0){
         $data = $data[0];

         $data->QtyOutput = $request->value;
         $data->save();
      } else {
         $new_data = new LygSewingOutput([
            'OperatorName' => $request->operatorName,
            'StyleCode' => $request->styleCode,
            'SizeName' => $request->size,
            'TrnDate' => $request->date,
            'DestinationCode' => $request->destinationCode,
            'QtyOutput' => $request->value,
        ]);
        $new_data->save();

      }
      
   }
}
