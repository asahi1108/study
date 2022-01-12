@extends('layouts.app')
@section('content')
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif
@foreach ($stories as $story)
<div class="container-fluid mt-20" style="margin-left:-10px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                        <div class="media-body ml-3"> 
                        <a href="{{route('story.show',['id'=>$story->id])}}">{{ $story->name }}</a>
                            <div class="text-muted small"> {{$story->univ}} {{$story->facu}}</div>
                        </div>
                        <div class="text-muted small ml-3">
                        <div>投稿日:<strong>{{$story->created_at}}</strong></div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p> <p>{{$story->way}} </p> </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
