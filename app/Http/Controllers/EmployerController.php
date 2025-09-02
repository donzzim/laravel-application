<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::with('jobs')->cursorPaginate(6);

        return view('employers.index', [
            'employers' => $employers
        ]);
    }
    public function show($id)
    {
        $employer = Employer::find($id);

        return view('employers.show', [
            'employer' => $employer,
        ]);
    }
}
