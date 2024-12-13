<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class InquiryController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_first', 'tel_second', 'tel_third', 'address', 'building', 'inquiry_type', 'detail']);

        return view('confirm', compact('contact'));
    }

    // DBへの登録メソッド
    public function store(Request $request)
    {
        //confirm.blade.phpから[back]を受理したら、index.blade.phpへ戻る
        if($request->has('back')) {
            return redirect()->route('confirm.index');
            //return Redirect::route('confirm.index')->withInput($request->all());
        }

        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_first', 'tel_second', 'tel_third', 'address', 'building', 'inquiry_type', 'detail']);
        Contact::cteate($contact);
        return view('thanks');
    }

}