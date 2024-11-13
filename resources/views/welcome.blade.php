<x-app-layout>
    <div class="w-full bg-white flex flex-row justify-center border-b border-b-gray-300">
        <div class="max-w-6xl flex flex-row justify-center py-2 gap-10">
            <a href="{{ route('welcome') }}" class="">
                <img src="{{ url('/img/logotype.png') }}" alt="Логотип">
            </a>

            <div class="flex flex-col gap-y-3">
                <div class="flex flex-row gap-x-10">
                    <a href="tel:+79993333322" class="text-3xl font-bold">+7 (999) 333-33-22</a>
                    <div class="flex flex-col">
                        <div class="text-sm text-gray-500">10:00-22:00 (по МСК)</div>
                        <div class="text-sm text-gray-500">Ежедневно</div>
                    </div>
                </div>
                <div class="flex flex-row">
                    <input type="search" class="w-full h-full border-gray-300 focus:border-[#FF784F] focus:ring-0 transition-all" placeholder="Поиск">
                    <div class="">
                        <button class="bg-[#FF784F] w-full h-full px-4">
                            <svg class="feather feather-search" fill="none" height="24" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"/><line x1="21" x2="16.65" y1="21" y2="16.65"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-row">
                <div class="w-full flex flex-col">
                    <a href="" class="text-xl text-[#FF784F] hover:text-red-500 transition-all">Адреса магазинов</a>
                    <div class="flex flex-col text-sm text-gray-500">
                        <p>93 магазинов</p>
                        <p>по всей России</p>
                    </div>
                    <a href="" class="">Контакты</a>
                </div>
                <a class="w-full h-full flex flex-col justify-center" href="">
                    <svg class="feather feather-shopping-cart" fill="none" height="64" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="64" xmlns="http://www.w3.org/2000/svg"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                </a>
            </div>
        </div>
    </div>

    <div class="w-full bg-zinc-200 flex flex-row justify-center border-b border-b-gray-300 shadow">
        <div class="max-w-6xl flex flex-row justify-center py-2 gap-x-6 text-lg">
            <a href="" class="hover:text-red-500 transition-all">Электронные сигареты</a>
            <a href="" class="hover:text-red-500 transition-all">Pod-системы</a>
            <a href="" class="hover:text-red-500 transition-all">Одноразовые устройства</a>
            <a href="" class="hover:text-red-500 transition-all">Моды</a>
            <a href="" class="hover:text-red-500 transition-all">Комплектующие</a>
            <a href="" class="hover:text-red-500 transition-all">Жидкости</a>
        </div>
    </div>

    <div class="w-full flex flex-row justify-center">
        <div class="max-w-6xl flex flex-row justify-start py-12 text-3xl font-semibold">
            Магазин электронных сигарет и вейпов {{ config('app.name') }}
        </div>
    </div>
</x-app-layout>
