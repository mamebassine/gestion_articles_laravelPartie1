<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voir un détail d'article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Voir un détail de l'article</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $article->nom }}</h5>
                <p class="card-text">Description: {{ $article->description }}</p>
                <p class="card-text">Date de création: {{ $article->date_creation }}</p>
                <p class="card-text">Type: {{ $article->type }}</p>
                <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->nom }}">
                <a href="{{ route('articles.index') }}" class="btn btn-primary">Retour à la liste des articles</a>
            </div>
        </div>
    </div>
</body>
</html>
