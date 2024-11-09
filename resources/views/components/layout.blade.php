<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/css/app.css", "resources/js/app.js"])
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap" rel="stylesheet">
    <title>Travail Now</title>
</head>

<body class="bg-white font-hanken-grotesk mb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-10 border-b border-black/80">
            <div class="bg-black/70 py-1 px-2 rounded-lg">
                <a href="/">
                    <img src="{{ Vite::asset("resources/images/logo.svg") }}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Emplois</a>
                <a href="#">Carrières</a>
                <a href="#">Salaries</a>
                <a href="#">entreprises</a>
            </div>

            @auth
            <div class="space-x-6 font-bold flex items-center">
                <a href="/jobs/create">Publier un emploi</a>

                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')

                    <button class="bg-primary px-3 py-2 rounded-lg hover:bg-primary/70 transition-300 text-white">Log Out</button>
                </form>
            </div>
            @endauth

            @guest
            <div class="space-x-4 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login" class="px-3 py-2 bg-primary rounded-lg text-white hover:bg-primary/70 transition-300">Log In</a>
            </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>