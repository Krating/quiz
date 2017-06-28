<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Input;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all()->toArray();
        return response(json_encode($quizzes, JSON_UNESCAPED_SLASHES))->header('Content-Type', "application/json");
    }

    public function create()
    {
        //
    }

    public function store(Request $request, ImageManager $photo)
    {
        $input = $request->all();
        $img = $request->file('imgcover');
        $photoname = time().'-'.$img->getClientOriginalName();
        $path = public_path('images');
        $photo->make($img)->save($path.'/'.$photoname);
        $input['imgcover'] = url("/images/{$photoname}");
        $quiz = new Quiz($input);
        $quiz->save();
        return response()->json(['status'=>true, 'message'=>'Success'], 200);
    }

    public function show($id)
    {
        $quiz = Quiz::find($id);
        return response()->json($quiz,200);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $quiz = Quiz::find($id);
        $quiz->delete();
        return response()->json('Quiz deleted',200);
    }
}
