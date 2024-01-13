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
    $data = LygSewingOutput::where('TrnDate', $request->date)->where('StyleCode',$request->style)->get();
    return response(json_decode($data),200);
   }
}
