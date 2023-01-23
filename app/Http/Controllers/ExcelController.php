<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\ExportUser;
use App\Imports\ImportUser;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    public function emportXportView(){
          
        return view('import');
    }
    public function export(){

       return Excel::download(new ExportUser,'users.xlsx');
    }
     public function import(){

 return Excel::import(new ImportUser, request()->file('file'));
        return back();
    }
}
