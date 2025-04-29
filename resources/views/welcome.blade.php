<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Football Teams</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-4">
    <h1 class="text-2xl font-bold mb-4 text-center">All Football Teams</h1>

    <div >
        <div>
            @foreach($teams as $team)
                <div >
                    <img src="{{ asset('storage/' . $team->team_logo) }}" class="w-32 h-32 object-cover mx-auto">
                    <h2 class="text-lg font-semibold text-center mt-2">{{ $team->name }}</h2>
                    <p class="text-center text-sm text-gray-500">{{ $team->country }} | Founded: {{ $team->founded_at }}</p>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>