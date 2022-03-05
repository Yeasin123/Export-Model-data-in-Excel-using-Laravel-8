<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Models\Employee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
  
    public function exportExcel() {
     return \Excel::download(new EmployeeExport,'employee.xlsx');
    }
   
   
}
