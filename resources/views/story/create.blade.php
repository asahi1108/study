<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forum.css' )}}" rel="stylesheet">
</head>


<body>
    <div class="row">
        <div class="col-md-10 mt-6">
            <div class="card-body">
                <h1 class="mt4">新規投稿</h1>
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
                <form method="POST" action="{{route('story.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">ニックネーム</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="title" placeholder="Enter Title">
                    </div>
    
                    <div class="form-group">
                        <label for="univ">大学名</label>
                        <input type="text" name="univ" value="{{old('univ')}}" class="form-control" id="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="facu">学部</label>
                        <input type="text" name="facu" value="{{old('facu')}}" class="form-control" id="title" placeholder="Enter Title">
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
                                <option value="1" @if(old('graduate')=='1') selected  @endif>1浪</option>
                                <option value="2" @if(old('graduate')=='2') selected  @endif>2浪</option>
                                <option value="3" @if(old('graduate')=='3') selected  @endif>3浪以上・再受験</option>
                            </select>
                    </div>
    
                    <div class="form-group">
                        <label for="pref">県内か県外か</label>
                            <select value="{{old('pref')}}" name="pref" class="form-control" id="title" placeholder="Enter Title">
                                <option value="0" selected @if(old('pref')=='0') selected  @endif>県内</option>
                                <option value="1" @if(old('pref')=='1') selected  @endif>県外</option>
                            </select>
                    </div>
    
                    <div class="form-group">
                        <label for="school_name">高校名</label>
                        <input type="text" name="school_name" value="{{old('school_name')}}" class="form-control" id="title" placeholder="Enter Title">
                    </div>
    
                    <div class="form-group">
                        <label for="way">合格のコツ</label>
                        <textarea name="way" class="form-control" id="body" cols="30" rows="10">{{old('way')}}</textarea>
                    </div>
    
                    <div class="form-group">
                        <label for="univlife">この大学、入ってみて実際どう？</label>
                        <textarea name="univlife" class="form-control" id="body" cols="30" rows="10">{{old('univlife')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">送信する </button>
                </form>
            </div>
        </div>
    </div>
</body>
