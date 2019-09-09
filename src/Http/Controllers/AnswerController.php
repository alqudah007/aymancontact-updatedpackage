<?php

namespace Edumepro\Aymancontact\Http\Controllers;

use Edumepro\Aymancontact\Models\Contact;
use Edumepro\Aymancontact\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AnswerController extends Controller
{
    // store
    // edit
    // delete


    public function store(Request $request, Contact $contact)
    {
        # 1- validate
        # 2- use relation to store answers via contact

        $request->validate([
            'body' => 'required',
            'uploaded_file' => 'sometimes|mimes:jpeg,png,pdf,gif|max:2048'
        ]);


        if ($request->has('uploaded_file')) {
            $file = $request->file('uploaded_file');
            $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/uploaded_files'), $new_file_name);
        } else {
            $new_file_name = null;
        }


        $contact->answers()->create([
            'body' => $request->body,
            'uploaded_file_path' => $new_file_name
        ]);

        return back()->with('success', 'reply added and email sent !');
    }

}
