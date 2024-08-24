<div class="">

    <div class="h-12"></div>


    <div class="px-12 mb-5">
        <div id="default-carousel" class="relative w-full z-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('assets/img/carrousel/737.jpeg')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('assets/img/carrousel/formacion.jpeg')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('assets/img/carrousel/mantenimiento.jpeg')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('assets/img/carrousel/cola.jpeg')}}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-10 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>

    <div class="flex justify-center px-12 flex-col mb-5">
        <div class="text-5xl font-bold text-center md:text-left">
            <span class="text-[#13408b]">Información personal
            </span>
        </div>
    </div>

    <div class="flex justify-center w-full py-6 px-12">
        <div class=" md:w-4/5">
            <div class="flex flex-wrap justify-between">
                <div class="mb-5 md:w-6/12 w-full pr-2.5">
                    <label for="vid" class="block mb-2 text-sm text-gray-900 font-bold">Your
                        VID</label>
                    <input type="number" id="vid" wire:model.live='vid'
                        class="border border-gray-300 text-gray-900  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="{{Auth::user()->vid}}" required />
                </div>
                <div class="mb-5 md:w-6/12 w-full pl-2.5">
                    <label for="vatsim" class="block mb-2 text-sm text-gray-900 font-bold">Vatsim
                        ID</label>
                    <input type="number" id="vatsim" wire:model.live='vatsimId'
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="{{Auth::user()->vatsim_id}}" required />
                </div>
                <div class="mb-5 md:w-full w-full">
                    <label for="email" class="block mb-2 text-sm text-gray-900 font-bold">Your
                        name</label>
                    <input type="email" id="email"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        value="{{$pilotStats['va_user']}} | {{Auth::user()->name}} {{Auth::user()->surname}}"
                        disabled />
                </div>
            </div>
            <div class="">
                @error('vatsimId')
                <div class="alert alert-danger font-bold text-xl">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex justify-end">
                <button wire:click='saveData'
                    class="bg-[#1f6be7] px-3 py-2 rounded text-white hover:bg-[#13408b]">Guardar</button>
            </div>
        </div>
    </div>

</div>