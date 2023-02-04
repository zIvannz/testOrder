<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function sendTelegram(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|numeric|digits:10',
        ]);
        
        sleep(rand(5, 20));

        return 1;
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);
        
        sleep(rand(5, 20));

        return 1;
    }

    public function sendViber(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|numeric|digits:10',
        ]);
        
        sleep(rand(5, 20));

        return 1;
    }
}
