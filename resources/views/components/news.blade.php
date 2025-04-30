<div class="lg:col-span-2 space-y-6">
        <!-- Katta yangilik -->
        <div class="flex flex-col md:flex-row bg-white border rounded-xl shadow overflow-hidden">
            <img id="article-image" alt="Shomurodov" class="w-full md:w-1/2 object-cover">
            <div class="p-5">
                <p id="article-category" class="text-sm text-blue-700 font-semibold mb-2"></p>
                <h3 id="article-title" class="text-xl font-bold mb-2 mt-1 line-clamp-2"></h3>
                <p id="article-content" class="text-sm text-gray-700 mt-1 line-clamp-2"></p>
                <div class="mt-3 text-gray-500 text-xs flex items-center space-x-3">
                    <span id="article-date"></span>
                    <span id="article-views"></span>
                </div>
            </div>
        </div>

        <!-- So‘nggi yangiliklar -->
        <div>
            <h3 class="text-lg font-bold mb-4 uppercase">So‘nggi yangiliklar</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach ([
                    ['img' => 'images/nasaf.jpg', 'title' => 'Tezkor! "Nasaf" futbolchisi yozda legionerga aylanadi'],
                    ['img' => 'images/husanov.jpg', 'title' => '"Liverpul" yulduzi Husanovga qanday munosabat bildirdi?'],
                    ['img' => 'images/eron.jpg', 'title' => 'O‘zbekistonlik hujumchi chempion jamoaga ketkaziladi'],
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
                <br>
        <h1 class="text-2xl font-bold mb-4">Hamma yangiliklar</h1>
        
        <div class="bg-white rounded-lg shadow-md p-4 mb-4 flex">
            <img src="images/flick.jpg" alt="Yangilik 1" class="w-1/3 h-48 object-cover rounded-l-lg">
            <div class="flex-1 p-4">
                <p class="text-gray-700 mt-2">29 aprel, Futbol</p>
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold mt-1 line-clamp-2">"Barselona" bilan shartnomani uzaytirish haqidagi savollarga javob bermadi</h2>
                </div>
                <p class="text-gray-700 mt-2">Germaniyalik mutaxassis shartnoma haqida nimalar bermadi.</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4 mb-4 flex">
            <img src="images/flick.jpg" alt="Yangilik 1" class="w-1/3 h-48 object-cover rounded-l-lg">
            <div class="flex-1 p-4">
                <p class="text-gray-700 mt-2">29 aprel, Futbol</p>
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold">"Barselona" bilan shartnomani uzaytirish haqidagi savollarga javob bermadi</h2>
                </div>
                <p class="text-gray-700 mt-2">Germaniyalik mutaxassis shartnoma haqida nimalar bermadi.</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4 mb-4 flex">
            <img src="images/flick.jpg" alt="Yangilik 1" class="w-1/3 h-48 object-cover rounded-l-lg">
            <div class="flex-1 p-4">
                <p class="text-gray-700 mt-2">29 aprel, Futbol</p>
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold">"Barselona" bilan shartnomani uzaytirish haqidagi savollarga javob bermadi</h2>
                </div>
                <p class="text-gray-700 mt-2">Germaniyalik mutaxassis shartnoma haqida nimalar bermadi.</p>
            </div>
        </div>
    </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // API'dan eng so'nggi maqolani olish
        fetch('/latest-article')
            .then(response => response.json())
            .then(data => {
                console.log(data);
                // Olingan ma'lumotni HTMLga joylash
                document.getElementById('article-image').src = data.image_url ? data.image_url : "{{ asset('images/default-image.jpeg') }}";
                document.getElementById('article-title').textContent = data.title;
                document.getElementById('article-category').textContent = data.category ? data.category.name : 'Futbol'; // Agar category mavjud bo'lsa
                document.getElementById('article-content').textContent = data.content ? data.content : 'Maqola matni yo\'q.';
                document.getElementById('article-date').textContent = new Date(data.published_at).toLocaleDateString('uz-UZ', { day: 'numeric', month: 'long' });
                document.getElementById('article-views').textContent = data.views;
            })
            .catch(error => console.error('Maqola olinganda xato yuz berdi:', error));
    });
</script>