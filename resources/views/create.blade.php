
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Template</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <nav>
            <div class="container">
                <h1>My Simple Template</h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="main-content">
        <article>
            <h2>Welcome to My Website</h2>
            <p>This is a simple template for your website.</p>
        </article>
    </section>

    <footer>
        <p>&copy; 2024 My Simple Template. All rights reserved.</p>
    </footer>

</body>
</html>
<form action="/create" method="post">
    @csrf
    <label for="title">title</label>
    <input type="text" name="title">
    <label for="body">Body</label>
    <textarea name="body" cols="30" rows="10"></textarea>
    <button>send</button>
    </form>

    