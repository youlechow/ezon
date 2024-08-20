<?php
namespace App\Http\Controllers;

use App\Models\Namelist;
use Illuminate\Http\Request;

class NamelistController extends Controller
{
    public function index()
    {
        $namelists = Namelist::all();
        return view('namelist_ezonberhad', compact('namelists'));
    }
}
