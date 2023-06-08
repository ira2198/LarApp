@extends('index')

@section('content')

<h2 class="text-center mb-4">Categories</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a class="navbar-brand text-info-emphasis fw-medium" href ="<?= route('news.category', 1) ?>">The main thing today</a></li>
        <li class="list-group-item"><a class="navbar-brand text-info-emphasis fw-medium" href ="<?= route('news.category', 2) ?>">Politics</a></li>
        <li class="list-group-item"><a class="navbar-brand text-info-emphasis fw-medium" href ="<?= route('news.category', 3) ?>">Science</a></li>
        <li class="list-group-item"><a class="navbar-brand text-info-emphasis fw-medium" href ="<?= route('news.category', 4) ?>">Art</a></li>
        <li class="list-group-item"><a class="navbar-brand text-info-emphasis fw-medium" href ="<?= route('news.category', 5) ?>">Nature and climate</a></li>
    </ul>


    <button class="btn mt-4 btn-dark" ><a class ="nav-link" href="<?= route('index');?>">Main</a></button>

@endsection