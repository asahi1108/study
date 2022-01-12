@extends('layouts.app')
@section('content')

<h1>一覧表示</h1>

<table>
<tr>
<th>ID</th>
<th>名前</th>
<th>電話番号</th>
<th>メールアドレス</th>
</tr>
@foreach($stories as $story)
<tr>
<td><a href="{{route('story.show',['id'=>$story->id])}}">{{$story->name}}</a></td>   
<td>{{$story->univ}}</td>
<td>{{$story->facu}}</td>
<td>{{$story->year}}</td>
<td>{{$story->graduate}}</td>
</tr>
@endforeach
</table>

@endsection