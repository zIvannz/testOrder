<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Share;

class SendController extends Controller
{
    public function sendTelegram(Request $request)
    {
        $validated = $request->validate([
            'post_id' => 'required|numeric|exists:posts,id',
            'number' => 'required|numeric|digits:10',
        ]);
        $this->share($request->post_id, 'telegram');
        sleep(rand(5, 20));

        return 1;
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'post_id' => 'required|numeric|exists:posts,id',
            'email' => 'required|email|max:255',
        ]);
        $this->share($request->post_id, 'email');
        sleep(rand(5, 20));

        return 1;
    }

    public function sendViber(Request $request)
    {
        $validated = $request->validate([
            'post_id' => 'required|numeric|exists:posts,id',
            'number' => 'required|numeric|digits:10',
        ]);
        $this->share($request->post_id, 'viber');
        sleep(rand(5, 20));

        return 1;
    }
    public function share($post_id, $messenger)
    {
        $share = new Share();
        $share->post_id = $post_id;
        $share->messenger = $messenger;
        $share->save();
        sleep(rand(5, 20));
    }
}
