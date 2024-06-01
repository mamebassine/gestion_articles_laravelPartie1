<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des articles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 50px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            
            
        }
        th {
            background-color: #f2f2f2;
        }
        td img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }
        .btn {
            border: 1px solid #3498db;
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-info {
            background-color: #4398bd;
        }
        .btn-warning {
            background-color: #4398bd;
        }
        .btn-danger {
            background-color: #e74c3c;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn:hover {
            opacity: 0.8;
        }
        .mb-3 {
            margin-bottom: 15px;
        }
        .form-control, .form-control-file, .form-group select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-control-file {
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Articles</h1>
        <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Ajouter un article</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>À la Une</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->nom }}</td>
                    <td>{{ Str::limit($article->description, 100) }}</td>
                    <td>{{ $article->date_creation }}</td>
                    <td>{{ $article->type }}</td>
                    <td>
                        <img src="{{ $article->image }}" alt="Image de l'article">
                    </td>
                    <td>
                        <a href="{{ route('articles.read', $article->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('articles.delete', $article->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
