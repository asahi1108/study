@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt4">編集投稿</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                {{-- <form method="post" action="{{route('story.update',['id' =>$story->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('put') --}}
            <form method="POST" action="{{route('story.update',['id' =>$story->id])}}">
                @csrf
                <div class="form-group">
                    <label for="name">ニックネーム</label>
                    <input type="text" name="name" value="{{old('name',$story->name)}}" class="form-control" id="title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="univ">大学名</label>
                    <input type="text" name="univ" value="{{old('univ',$story->univ)}}" class="form-control" id="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="facu">学部</label>
                    <input type="text" name="facu" value="{{old('facu',$story->facu)}}" class="form-control" id="title" placeholder="Enter Title">
                </div>


                <div class="form-group">
                    <label for="year">入学年度</label>
                        <select name="year" class="form-control" id="title" placeholder="Enter Title">{{old('year')}}
                            <option value="0" selected @if(old('year')=='0') selected  @endif>2021</option>
                            <option value="1" @if(old('year')=='1') selected  @endif>2020</option>
                            <option value="2" @if(old('year')=='2') selected  @endif>2019</option>
                            <option value="3" @if(old('year')=='3') selected  @endif>2018以前</option>
                        </select>

                        
                </div>

                <div class="form-group">
                    <label for="graduate">現役か既卒か</label>
                        <select value="{{old('graduate')}}" name="graduate" class="form-control" id="title" placeholder="Enter Title">
                            <option value="0" selected @if(old('graduate')=='0') selected  @endif>現役</option>
                            <option value="1" @if(old('graduate',$story->graduate)=='1') selected  @endif>1浪</option>
                            <option value="2" @if(old('graduate',$story->graduate)=='2') selected  @endif>2浪</option>
                            <option value="3" @if(old('graduate',$story->graduate)=='3') selected  @endif>3浪以上・再受験</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="pref">県内か県外か</label>
                        <select value="{{old('pref')}}" name="pref" class="form-control" id="title" placeholder="Enter Title">
                            <option value="0" selected @if(old('pref',$story->pref)=='0') selected  @endif>県内</option>
                            <option value="1" @if(old('pref',$story->pref)=='1') selected  @endif>県外</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="school_name">高校名</label>
                    <input type="text" name="school_name" value="{{old('school_name',$story->school_name)}}" class="form-control" id="title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="way">合格のコツ</label>
                    <textarea name="way" class="form-control" id="body" cols="30" rows="10">{{old('way',$story->way)}}</textarea>
                </div>

                <div class="form-group">
                    <label for="univlife">この大学、入ってみて実際どう？</label>
                    <textarea name="univlife" class="form-control" id="body" cols="30" rows="10">{{old('univlife',$story->univlife)}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">送信する </button>
            </form>
        </div>
    </div>
</div>
@endsection