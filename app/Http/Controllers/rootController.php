<?php

namespace App\Http\Controllers;

use App\Khatere;
use Illuminate\Http\Request;

class rootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $kh = $this->validate($request,[
            'title' => ['required','string','max:255'],
            'body' => ['required','string']

        ],[
            "title.required" => "لطفا عنوان را وارد کنید.",
            "title.string" => "عنوان باید به صورت رشته ای وارد شود.",
            "title.max" => "عنوان نهایتا 255 کارکتر می تواند باشد.",
            "body.required" => "وارد کردن متن الزامی است.",
            "body.string" => "متن باید به صورت رشته ای وارد شود.",
        ]);
        $kh["user_id"] = auth()->id();
        $a = new Khatere;
        $a->title = $kh["title"];
        $a->body = $kh["body"];
        $a->user_id = $kh["user_id"];
        $a->save();
        if($a instanceof Khatere)
            return redirect()->route("home");
        else
             dd("Error on saving!");


    }

    public function show($id)
    {
        $data = Khatere::query()->findOrFail($id);
        return view('show',compact('data'));

    }

    public function edit($id)
    {
        $data = Khatere::query()->findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title' => ['required','string','max:255'],
            'body' => ['required','string']

        ],[
            "title.required" => "لطفا عنوان را وارد کنید.",
            "title.string" => "عنوان باید به صورت رشته ای وارد شود.",
            "title.max" => "عنوان نهایتا 255 کارکتر می تواند باشد.",
            "body.required" => "وارد کردن متن الزامی است.",
            "body.string" => "متن باید به صورت رشته ای وارد شود.",
        ]);
        $data = Khatere::query()->find($id);
        if($data instanceof Khatere) {
            $data->title = request()->input('title');
            $data->body = request()->input('body');
             $data->update();
             return redirect()->route('home');
        }
        else
            dd($data);
    }

    public function destroy($id)
    {

        Khatere::destroy($id);
        return redirect()->route('home');

    }
}
