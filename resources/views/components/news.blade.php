<div class="lg:col-span-2 space-y-6">
        <!-- Katta yangilik -->
        <div class="flex flex-col md:flex-row bg-white border rounded-xl shadow overflow-hidden">
            <img src="{{ asset('images/shomurodov.jpg') }}" alt="Shomurodov" class="w-full md:w-1/2 object-cover">
            <div class="p-5">
                <p class="text-sm text-blue-700 font-semibold mb-2">Futbol</p>
                <h3 class="text-xl font-bold mb-2">Shomurodovga mashhur yulduz ustozi bo‘lishi kutilmoqda!</h3>
                <p class="text-sm text-gray-700">Shomurodovning kelajagi yangi murabbiyga bog‘liq bo‘ladi...</p>
                <div class="mt-3 text-gray-500 text-xs flex items-center space-x-3">
                    <span>29 aprel, 15:00</span>
                    <span>0</span>
                </div>
            </div>
        </div>

        <!-- So‘nggi yangiliklar -->
        <div>
            <h3 class="text-lg font-bold mb-4 uppercase">So‘nggi yangiliklar</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach ([
                    ['img' => 'images/nasaf.jpg', 'title' => 'Tezkor! "Nasaf" futbolchisi yozda legionerga aylanadi'],
                    ['img' => 'images/liverpool.jpg', 'title' => '"Liverpul" yulduzi Husanovga qanday munosabat bildirdi?'],
                    ['img' => 'images/ozbekiston.jpg', 'title' => 'O‘zbekistonlik hujumchi chempion jamoaga ketkaziladi'],
                ] as $news)
                    <div class="bg-white border rounded-xl shadow overflow-hidden">
                        <img src="{{ asset($news['img']) }}" alt="" class="w-full h-36 object-cover">
                        <div class="p-3">
                            <h4 class="text-sm font-semibold">{{ $news['title'] }}</h4>
                            <div class="mt-2 text-gray-500 text-xs flex items-center space-x-2">
                                <span>29 aprel</span>
                                <span>06:41</span>
                                <span>1</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Hamma yangiliklar</h1>
        
        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
            <img src="image1.jpg" alt="Yangilik 1" class="w-full h-48 object-cover rounded-t-lg">
            <div class="flex justify-between items-center mt-2">
                <h2 class="text-lg font-semibold">"Barselona" bilan shartnomani uzaytirish haqidagi savollarga javob bermadi</h2>
                <span class="text-gray-500">29 aprel, Futbol</span>
            </div>
            <p class="text-gray-700">Germaniyalik mutaxassis shartnoma haqida nimalar bermadi.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
            <img src="image2.jpg" alt="Yangilik 2" class="w-full h-48 object-cover rounded-t-lg">
            <div class="flex justify-between items-center mt-2">
                <h2 class="text-lg font-semibold">"Atalanta" futbolchisi Evropaning 5 ta top klubi haqida bayonot berdi</h2>
                <span class="text-gray-500">29 aprel, Futbol</span>
            </div>
            <p class="text-gray-700">Futbolchi ularning qanday qilib qiziqish oshmoqdami.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4 mb-4">
            <img src="image3.jpg" alt="Yangilik 3" class="w-full h-48 object-cover rounded-t-lg">
            <div class="flex justify-between items-center mt-2">
                <h2 class="text-lg font-semibold">Flik: "Bizda finalga chiqish imkoniyati bor"</h2>
                <span class="text-gray-500">29 aprel, Futbol</span>
            </div>
            <p class="text-gray-700">Bosh murabbiyning bu yilgi bahs oldidan o'z fikrlari bilan o'rtoqlashdi.</p>
        </div>
    </div>
        </div>
    </div>