@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <div class="text-muted small mr-3"> 
        <h4>{{$story->univ}} {{$story->facu}}</h4> {{$story->name}} さん
            <span class="ml-auto">
                <a href="{{route('story.edit',['id'=>$story->id])}}">{{ __('編集') }}</a>
            </span>
        </div>
    </div>
    <div class="card-body">
        <p class="card-text">
            {{$story->year}} {{$story->graduate}}
        </p>
        <p class="card-text">
            {{$story->way}}
        </p>
        <p class="card-text">
            {{$story->univlife}}
        </p>
    </div>
    <div class="card-footer">
    <span class="mr-2 float-right">
        投稿日時 {{$story->created_at}}
        </span>
    </div>
    <form method="POST" action="{{route('story.destroy',['id'=>$story->id])}}">
        @csrf
        <button type="submit" class="btn btn-danger" onClick="return confirm('本当に削除しますか？');">削除</button>
      </form>
    <a href="{{route('home')}}">一覧に戻る</a>
</div>

@endsection