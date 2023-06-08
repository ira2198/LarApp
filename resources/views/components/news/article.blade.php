@extends('index')

@section('content')

<div class="descript  text-end mb-5 text-info-emphasis"> 
    <div>category: {{$article['category']}}</div>
    <div>id: {{$article['id']}}</div>
    <div >author: {{$article['author']}}</div>
    <div>date of publication: {{$article['created_at']}}</div>
</div>

<h3 class="descript  text-center mb-4">{{$article['title']}}</h3>

<div class="cotent">{{$article['text']}}</div>

<button class="btn mt-4 btn-dark"><a class ="nav-link" href="<?= route('index');?>">Main</a></button>
     
@endsection