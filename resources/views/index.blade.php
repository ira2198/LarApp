<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>News</title>
</head>
<body>

    <header class="shadow-sm p-3 mb-2 bg-body-tertiary rounded">
        <div class="header container-xl p-4 text-end ">
            <button class="btn btn-light" ><a class="navbar-brand" href="<?= route('categories');?>">News by category</a></button>
            <button class="btn btn-light" ><a class="navbar-brand" href="<?= route('authorization');?>">Authorization</a></button>
            <button class="btn btn-light" ><a class="navbar-brand" href="<?= route('admin.article.create');?>">Administration</a></button>    
        </div>
    </header>

        <div class="container-xl d-flex flex-column justify-content-between vh-100">
            <main class = "p-5">
                @yield('content')
            </main>
            <footer>
                <div class="footer text-center text-info-emphasis shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    Lorem, ipsum.
                </div>
            </footer>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>