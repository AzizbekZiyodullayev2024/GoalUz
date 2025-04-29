<div class="lg:col-span-1 bg-gray-900 text-white rounded-xl shadow p-4 space-y-4">
        <h2 class="text-lg font-bold uppercase">Minbar</h2>
        @foreach ([
            ['author' => 'Shuhratbek Jo‘rayev', 'title' => 'Sergey Lushchan: "Agar Surxon yutganida ham o‘sha g‘alabadan maza qilmadim"', 'time' => '29 aprel, 05:13'],
            ['author' => 'Karim Xudayqulov', 'title' => 'Zamonamiz qoloqliklari ayrim klublarimizning tashkiliy muammolarida mujassam', 'time' => '28 aprel, 18:46'],
            ['author' => 'Karim Xudayqulov', 'title' => '"Barselona" transformatsiyasi! Xuddi o‘sha futbolchilar bilan boshqa jamoa', 'time' => '28 aprel, 15:40'],
        ] as $blog)
            <div class="border-b border-gray-700 pb-3">
                <p class="text-blue-400 text-sm">Futbol · {{ $blog['author'] }}</p>
                <h4 class="font-semibold text-sm leading-tight mt-1">{{ $blog['title'] }}</h4>
                <div class="text-xs text-gray-400 mt-1 flex items-center space-x-2">
                    <span>{{ $blog['time'] }}</span>
                    <span>0</span>
                </div>
            </div>
        @endforeach
        <a href="#" class="block text-blue-400 text-sm font-medium hover:underline mt-3">Barcha bloglar →</a>
    </div>