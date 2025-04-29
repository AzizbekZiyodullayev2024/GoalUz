<div class="lg:col-span-1 bg-white border rounded-xl shadow p-4">
        <h2 class="text-lg font-bold mb-4 uppercase">O'yinlar</h2>
        <ul class="space-y-3">
            @foreach ([
                ['team1' => 'So\'g\'diyona', 'team2' => 'Sementchi Kuvasoy', 'time' => '19:00'],
                ['team1' => 'Xorazm Academy', 'team2' => 'Aral', 'time' => '17:30'],
                ['team1' => 'Surxon', 'team2' => 'Dinamo', 'time' => '19:15'],
                ['team1' => 'Lochin', 'team2' => 'Andijan', 'time' => '0 - 0', 'live' => true],
                ['team1' => 'Arsenal', 'team2' => 'PSJ', 'time' => '00:00'],
                ['team1' => 'Al Hilol', 'team2' => 'Al Ahli', 'time' => '21:30'],
            ] as $match)
                <li class="flex items-center justify-between">
                    <div class="text-sm">
                        <p class="font-semibold">{{ $match['team1'] }}</p>
                        <p class="text-gray-600">{{ $match['team2'] }}</p>
                    </div>
                    <span class="text-sm font-medium text-gray-800">
                        {{ $match['live'] ?? false ? 'LIVE' : $match['time'] }}
                    </span>
                </li>
            @endforeach
        </ul>
        <a href="#" class="block text-blue-600 mt-4 text-sm font-medium hover:underline">Barcha o‘yinlar →</a>
        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
        <h2 class="text-xl font-bold mb-4">Musobaqalar</h2>
    <ul class="space-y-2">
        <li class="flex items-center">
            <img src="champion-league.png" alt="UEFA" class="w-6 h-6 mr-2">
            <a href="/" class="text-gray-800 hover:underline">UEFA chempionlar ligasi</a>
        </li>
        <li class="flex items-center">
            <img src="AFC.png" alt="OFK" class="w-6 h-6 mr-2">
            <a href="/" class="text-gray-800 hover:underline">OFK Chempionlar ligasi</a>
        </li>
        <li class="flex items-center">
            <img src="superliga.png" alt="O'zbekiston" class="w-6 h-6 mr-2">
            <a href="/" class="text-gray-800 hover:underline">O'zbekiston</a>
        </li>
        <li class="flex items-center">
            <img src="premierleague.png" alt="Angliya" class="w-6 h-6 mr-2">
            <a href="/" class="text-gray-800 hover:underline">Angliya</a>
        </li>
    </ul>
    <a href="#" class="text-blue-600 hover:underline block mt-4">To'liq jadval →</a>
        </div>
    </div>
