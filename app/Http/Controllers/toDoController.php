<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class toDoController extends Controller
{
    public function index()
    {
        $data=DB::table('todos')->get();
            //dd($data);
        return view('pages.index',compact('data',$data));
    }

    public function getCreatePage()
    {
        return view('pages.create');
    }
    public function storeCreateData(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $remark = $request->get('remark');

        DB::table('todos')->insert([
           'title'=>$title,
           'content'=>$content,
           'remark'=>$remark
        ]);

        return view('pages.create');
    }

    public function deleteData(Request $request)
    {
        $id=$request->get("id");
        DB::table('todos')
            ->where('id',$id)
            ->delete();
        return redirect()->route("index");
    }

    public function getEditPage(Request $request)
    {
        $id = $request->get('id');
        $data = DB::table('todos')
            ->where('id', $id)
            ->first();
        return view('pages.update',compact('data',$data));
    }
    public function storeEditData(Request $request)
    {
        $id = $request->get('id');
        $title = $request->get('title');
        $content = $request->get('content');
        $remark = $request->get('remark');

        DB::table('todos')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'content' => $content,
                'remark' => $remark,
            ]);
        return redirect()->route('index');
    }
}
