<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactez-nous - Mon Blog</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        body {
            font-family: Arial, sans-serif;
        }
    
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    
        nav ul {
            list-style-type: none;
        }
    
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }
    
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
    
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
    
        .contact-form {
            margin-top: 20px;
        }
    
        .contact-form input,
        .contact-form textarea,
        .contact-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    
        .contact-form textarea {
            height: 150px;
        }
    
        .contact-form button {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contactez-nous</h1>
    </header>

    <div class="container">
        <h2>Formulaire de contact</h2>
        <form class="contact-form" action="/envoyer-message" method="post">
            <input type="text" name="nom" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Mon Blog. Tous droits réservés.</p>
    </footer>
</body>
</html>
