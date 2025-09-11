<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Browsershot\Browsershot;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Setup;
use Bouncer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class SetupController extends Controller
{
    public function index(Request $request)
    {
        $setup = Setup::find(1); // get record with id=1
        return view('setup.index')->with('setups', $setup);
    }

    public function create()
    {
        return view('setup.index');
    }

    public function store(Request $request)
    { 
        $setup = Setup::create($request->all());
        return redirect()->route('setup.index')->withSuccess('Data saved');
    }

    public function edit(Setup $setup)
    {
        return view('setup.index')->with('setup',$setup);
    }

    public function update(Request $request, Setup $setup)
    {
        $setup->update($request->only(['seo_header']));
        $setup->update($request->only(['script']));

        return redirect()->back()->withSuccess('Data updated');
    }

    public function destroy(Setup $setup)
    {
        $setup->delete();

        return redirect()->route('setup.index')->withSuccess('Data deleted');
    }
}
