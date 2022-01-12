<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Story;
// use App\Models\User;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories=Story::orderBy('created_at','desc')->get();
        $user=auth()->user();

        return view('story/index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('story.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->validate([
            'name'=>'required|max:255',
            'univ'=>'required|max:255',
            'facu'=>'required|max:255',
            'school_name'=>'required|max:255',
            'way'=>'required',
            'univlife'=>'required'
        ]);

        $story=new Story();
        $story->name=$request->name;
        $story->univ=$request->univ;
        $story->facu=$request->facu;
        $story->year=$request->year;
        $story->graduate=$request->graduate;
        $story->pref=$request->pref;
        $story->school_name=$request->school_name;
        $story->way=$request->way;
        $story->univlife=$request->univlife;
        $story->save();
        return back()->with('message', '投稿を作成しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
  {
        $story=Story::find($id);

        return view('story/show', compact('story'));
           
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $story=Story::find($id);

        return view('story.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs=$request->validate([
            'name'=>'required|max:255',
            'univ'=>'required|max:255',
            'facu'=>'required|max:255',
            'school_name'=>'required|max:255',
            'way'=>'required',
            'univlife'=>'required'
        ]);


        // $story->name=$inputs['name'];
        // $story->univ=$inputs['univ'];
        // $story->facu=$inputs['facu'];
        // $story->year=$inputs['year'];
        // $story->graduate=$inputs['graduate'];
        // $story->pref=$inputs['pref'];
        // $story->school_name=$inputs['school_name'];
        // $story->way=$inputs['way'];
        // $story->univlife=$inputs['univlife'];
        // $story->user_id=auth()->user()->id;

        $story=Story::find($id);

        $story->name=$request->name;
        $story->univ=$request->univ;
        $story->facu=$request->facu;
        $story->year=$request->year;
        $story->graduate=$request->graduate;
        $story->pref=$request->pref;
        $story->school_name=$request->school_name;
        $story->way=$request->way;
        $story->univlife=$request->univlife;
        $story->user_id=auth()->user()->id;

        $story->save();

        return redirect()->route('home')->with('message', '投稿を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story=Story::find($id);

        $story->delete();

        return redirect()->route('home')->with('message', '投稿を削除しました');
    }
}

