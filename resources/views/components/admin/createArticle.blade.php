@extends('index')

@section('content')

    <h2 class="descript  text-center mb-5">Create article</h2>
    <div class="d-flex flex-column align-items-center">
        <form class="d-flex flex-column w-50" action="/" method ="post">
            <input type="text" name="title" placeholder="Title"  class="form-control mb-3">
            <textarea placeholder="The content of the article"  class="form-control mb-3"></textarea>
            <input type="text" name="description" placeholder="Description"  class="form-control mb-3">    
        
            <button class="btn btn-info">To publish</button>
        </form>
            
        <button class="btn mt-4 btn-dark w-50"><a class ="nav-link" href="<?= route('index');?>">Exit</a></button>
    </div>

@endsection