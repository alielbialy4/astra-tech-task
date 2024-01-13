<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public  function exportView()
    {
        return view('exports.index');
    }
    public function export(Request $request)
    {
        $selectedCoulmns = $request->input('columns', []);
        if (empty($selectedCoulmns) || $selectedCoulmns == null) {
            //  If no columns are selected, export all columns
            $selectedCoulmns = ['full_name', 'email', 'phone_number'];
        }
        return Excel::download(new UsersExport($selectedCoulmns), 'users.xlsx');
    }

    public function importView()
    {
        return view('imports.index');
    }

    public function import(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:xlsx,xls|max:2048',
        ]);

        try {
            Excel::import(new UserImport, $request->file('file'));

            return redirect()->route('import.view')->with('success', 'Data imported successfully!');
        } catch (\Exception $e) {
            return redirect()->route('import.view')->with('error', 'Error importing data. Please check your file and try again.');
        }
    }
}
