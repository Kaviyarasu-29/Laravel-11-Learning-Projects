<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;


class SalaryController extends Controller
{
    public function createSalary()
    {
        return view('salary');
    }

    public function storeSalary(Request $request)
    {
        $request->validate([
            'salary' => 'required|string|max:255',
            'user_id' => 'required|integer'
        ]);


        $data = $request->only(['salary', 'user_id']);

        Salary::create($data);
        return redirect('/list');
        // return redirect('/home');
    }
}
