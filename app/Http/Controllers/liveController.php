<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nameList;

class liveController extends Controller
{
    public function signup($id){
        return view('signup', ['id' => $id]);
    }

    public function record(Request $request){
        // Validate the request data
        $validated = $request->validate([
            'chineseName' => 'required|string|max:255',
            'englishName' => 'required|string|max:255',
            'contactNo' => 'required|string|max:20',
            'seminar' => 'required|string|max:255'
        ]);
    
        // Create a new record
        NameList::create([
            'chineseName' => $validated['chineseName'],
            'englishName' => $validated['englishName'],
            'contactNo' => $validated['contactNo'],
            'seminarName' => $validated['seminar'],
        ]);
    
        // Redirect to the live page
        return redirect()->route('live');
    }
    
}
