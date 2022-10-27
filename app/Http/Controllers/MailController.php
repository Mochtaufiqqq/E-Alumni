<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\FavIcon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function email()
    {
        $fvicon = FavIcon::first();
        $logo = Logo::first();
        $data = ['subject'];
        return view('content.user.kontak', compact('fvicon', 'logo'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            // 'no_tlp' => 'required',
            // 'content' => 'required'
        ]);

        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            // 'no_tlp' => $request->no_tlp,
            // 'content' => $request->content
        ];

        Mail::send('email.email', $data, function ($message) use ($data) {
            $message->to('mhmdtaufiq3@gmail.com');
            $message->sender($data['email']);
            $message->subject($data['subject']);
        });
        
        
        return redirect('/kontak')->with('success', 'berhasil mengirim pesan');
    }
}
