@extends('index')

@section('content')

   <h3  class="text-center mb-4">  {{ $news }} </h3>
    <div class="cotent">

        @foreach ($newsList as $item)
            <div class="mb-4">
                <a class="navbar-brand" href="{{ route('article', ['category' => $news, 'id' => $item['id']])}}"> 
                    
                    <div class="text-info-emphasis fw-semibold fs-5">{{ $item['title'] }}</div>       
                    <div > {{ $item['description'] }} </div>        
                    <div class=" fst-italic"> {{ $item['author'] }} </div>
                
                </a>
            </div>
        @endforeach
        
       
       
    </div>

    <button class="btn mt-4 btn-dark"><a class ="nav-link" href="<?= route('index');?>">Main</a></button>
     
@endsection