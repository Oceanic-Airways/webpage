<div class="">
    <section>
        <div class="h-screen w-full relative">
            <video autoplay muted loop src="{{asset('assets/video/video_bg.mp4')}}"
                class="absolute z-10 w-full h-full"></video>
            <div class="h-full w-full flex justify-center items-end relative">
                <box-icon name='chevrons-down' size='lg' animation='fade-down' color="#ffffff"></box-icon>
            </div>
        </div>
    </section>
    <div class="h-32"></div>


    <section class="flex items-center flex-col text-center">
        <div class=" md:w-4/5 w-4/5 sm:w-full grid md:grid-cols-3 justify-items-center gap-12 font-semibold mb-5"
            data-aos="fade-up">
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl ">
                    <span>+30</span>
                </div>
                <div class="text-4xl"><span>Pilotos</span></div>
            </div>
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl">
                    <span>+{{number_format($data["hours"],0,'.',',')}}</span>
                </div>
                <div class="text-4xl"><span>Horas</span></div>
            </div>
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl">
                    <span>+{{$data["distance"]}}nm</span>
                </div>
                <div class="text-4xl"><span>Distancia</span></div>
            </div>
        </div>
        <div class="md:w-3/5 w-3/5 sm:w-full grid md:grid-cols-2 justify-items-center gap-12 font-semibold"
            data-aos="fade-right">
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl">
                    <span>+{{$data["pax"]}}</span>
                </div>
                <div class="text-4xl"><span>Pasajeros</span></div>
            </div>
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl">
                    <span>+{{$data["flights"]}}</span>
                </div>
                <div class="text-4xl"><span>Vuelos</span></div>
            </div>
        </div>
    </section>


    <div class="h-32"></div>
    <section class="p-12" data-aos="zoom-in">
        <div x-data="{
        // Sets the time between each slides in milliseconds
        autoplayIntervalTime: 4000,
        slides: [
            {
                imgSrc: '{{asset('assets/img/carrousel/dorado.png')}}',
                imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
            },
            {
                imgSrc: '{{asset('assets/img/carrousel/boarding.png')}}',
                imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',
            },
            {
                imgSrc: '{{asset('assets/img/carrousel/oas_fl.png')}}',
                imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
            },
        ],
        currentSlideIndex: 1,
        isPaused: false,
        autoplayInterval: null,
        previous() {
            if (this.currentSlideIndex > 1) {
                this.currentSlideIndex = this.currentSlideIndex - 1
            } else {
                // If it's the first slide, go to the last slide
                this.currentSlideIndex = this.slides.length
            }
        },
        next() {
            if (this.currentSlideIndex < this.slides.length) {
                this.currentSlideIndex = this.currentSlideIndex + 1
            } else {
                // If it's the last slide, go to the first slide
                this.currentSlideIndex = 1
            }
        },
        autoplay() {
            this.autoplayInterval = setInterval(() => {
                if (! this.isPaused) {
                    this.next()
                }
            }, this.autoplayIntervalTime)
        },
        // Updates interval time
        setAutoplayInterval(newIntervalTime) {
            clearInterval(this.autoplayInterval)
            this.autoplayIntervalTime = newIntervalTime
            this.autoplay()
        },
    }" x-init="autoplay" class="relative w-full overflow-hidden">

            <!-- slides -->
            <!-- Change min-h-[50svh] to your preferred height size -->
            <div class="relative min-h-[75svh] w-full rounded">
                <template x-for="(slide, index) in slides" class="rounded">
                    <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                        x-transition.opacity.duration.1000ms>

                        <img class="absolute w-full h-full inset-0 object-cover text-slate-700 rounded-md"
                            x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                    </div>
                </template>
            </div>

            <!-- Pause/Play Button -->
            <button type="button"
                class="absolute bottom-5 right-5 z-20 rounded-full text-slate-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:outline-offset-0"
                aria-label="pause carousel"
                x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)"
                x-bind:aria-pressed="isPaused">
                <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true" class="size-7">
                    <path fill-rule="evenodd"
                        d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z"
                        clip-rule="evenodd">
                </svg>
                <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true" class="size-7">
                    <path fill-rule="evenodd"
                        d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z"
                        clip-rule="evenodd">
                </svg>
            </button>

            <!-- indicators -->
            <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2"
                role="group" aria-label="slides">
                <template x-for="(slide, index) in slides">
                    <button class="size-2 cursor-pointer rounded-full transition"
                        x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)"
                        x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']"
                        x-bind:aria-label="'slide ' + (index + 1)"></button>
                </template>
            </div>
        </div>
    </section>
    <div class="h-32"></div>
    <section>
        <div class="md:w-full flex flex-col p-12 bg-[#1f6be7] text-white rounded-t">
            <div class="title_container grid md:grid-cols-2" data-aos="fade-down-right">
                <div class="flex flex-col gap-2">
                    <div class="">
                        <h3 class="text-6xl font-bold">Rangos</h3>
                    </div>
                    <div class="blue_bar w-full p-2 bg-[#ffffff] rounded-full"></div>
                </div>
            </div>
            <div class="flex items-center flex-col">
                <div class="md:w-4/5">
                    {{-- APA --}}
                    <div class="flex flex-col md:grid md:grid-cols-2 grid-cols-1 py-6 pt-12" data-aos="fade-right">
                        <div class="">
                            <div class=""><img src="{{asset('assets/img/ranks/APA.jpeg')}}" class="w-64" alt=""></div>
                        </div>
                        <div id="rank_details">
                            <div class="text-right grid h-full">
                                <h5 class="text-5xl font-bold flex items-center justify-end">APA</h5>
                                <div class="">
                                    <ul class="text-xl">
                                        <li><span class="font-semibold">Tiempo de vuelo:</span> 5 - 15 Horas</li>
                                        <li><span class="font-semibold">Flota:</span> C152 ~ C172 ~ PA28 ~ SR22</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- PPA --}}
                    <div class="flex flex-col md:grid md:grid-cols-2 grid-cols-1 py-6" data-aos="fade-right">
                        <div id="rank_details">
                            <div class="text-left grid h-full">
                                <h5 class="text-5xl font-bold flex items-center justify-start">PPA
                                </h5>
                                <div class="">
                                    <ul class="text-xl">
                                        <li><span class="font-semibold">Tiempo de vuelo:</span> 15 a 25 Horas</li>
                                        <li><span class="font-semibold">Flota: </span>C414 ~ C90 ~ B350 ~ DHC6 ~
                                            ATR72/ATR42</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex md:justify-end">
                            <div class=""><img src="{{asset('assets/img/ranks/PPA.jpeg')}}" class="w-64" alt=""></div>
                        </div>
                    </div>
                    {{-- PCA --}}
                    <div class="flex flex-col md:grid md:grid-cols-2 grid-cols-1 py-6 pt-12" data-aos="fade-right">
                        <div class="">
                            <div class=""><img src="{{asset('assets/img/ranks/PCA.jpeg')}}" class="w-64" alt=""></div>
                        </div>
                        <div id="rank_details">
                            <div class="text-right grid h-full">
                                <h5 class="text-5xl font-bold flex items-center justify-end">PCA</h5>
                                <div class="">
                                    <ul class="text-xl">
                                        <li><span class="font-semibold">Tiempo de vuelo:</span> 25 - 100 Horas</li>
                                        <li><span class="font-semibold">Flota:</span> A320 ~ A20N ~ B738</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- PTL --}}
                    <div class="flex flex-col md:grid md:grid-cols-2 grid-cols-1 py-6" data-aos="fade-right">
                        <div id="rank_details">
                            <div class="text-left grid h-full">
                                <h5 class="text-5xl font-bold flex items-center justify-start">PTL
                                </h5>
                                <div class="">
                                    <ul class="text-xl">
                                        <li><span class="font-semibold">Tiempo de vuelo:</span> +100 Horas</li>
                                        <li><span class="font-semibold">Flota: </span>A340 ~ A350 ~ B777 ~ B787</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex md:justify-end">
                            <div class=""><img src="{{asset('assets/img/ranks/PTL.jpeg')}}" class="w-64" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="h-16"></div>
    <section>
        <div x-data="{
        slides: [
            {
                imgSrc: '{{asset('assets/img/Discord_CTA.jpeg')}}',
                imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
                title: 'Conoce más en nuestro Discord oficial',
                {{-- description: 'The architects of the digital world, constantly battling against their mortal enemy – browser compatibility.', --}}
                ctaUrl: 'https://discord.gg/JgWBZnve32',
                ctaText: 'Unirse a Discord',
            }
        ],
        currentSlideIndex: 1
    }" class="relative w-full overflow-hidden">
            <!-- slides -->
            <!-- Change min-h-[50svh] to your preferred height size -->
            <div class="relative min-h-[50svh] w-full">
                <template x-for="(slide, index) in slides">
                    <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                        x-transition.opacity.duration.1000ms>

                        <!-- Title and description -->
                        <div
                            class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/85 to-transparent px-16 py-12 text-center">
                            <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white"
                                x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'">
                            </h3>
                            <p class="lg:w-1/2 w-full text-pretty text-sm text-slate-300" x-text="slide.description"
                                x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                            <a x-href="slide.ctaUrl"
                                class="mt-2 cursor-pointer whitespace-nowrap rounded-xl border flex items-center gap-2 border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm">
                                <box-icon name='discord-alt' type='logo' color='#ffffff'></box-icon>
                                <span x-text="slide.ctaText"></span>
                            </a>
                        </div>

                        <img class="absolute w-full h-full inset-0 object-cover text-slate-700"
                            x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                    </div>
                </template>
            </div>
        </div>
    </section>
    <div class="h-32"></div>
    <section>
        <div class="w-full p-12">

            <div x-data="{
            // Sets the time between each slides in milliseconds
            autoplayIntervalTime: 5000,
            slides: [
                {
                    imgSrc: '{{asset('assets/img/raiting/Cesar.jpeg')}}',
                    imgAlt: 'Foto de Cesar',
                    user: 'Cesar | Director de Marketing',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt aliquid sequi unde commodi nihil, ad autem reiciendis blanditiis, molestias iure, id aliquam quia illo.',
                    stars: '5'
                },
                {
                    imgSrc: '{{asset('assets/img/raiting/lucho.jpg')}}',
                    imgAlt: 'Foto de lucho',
                    user: 'Cesar | CO-CEO',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt aliquid sequi unde commodi nihil',
                    stars: '4'
                },
                {
                    imgSrc: '{{asset('assets/img/raiting/Santiago.jpg')}}',
                    imgAlt: 'Foto de santiago',
                    user: 'Santiago | CEO',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    stars: '5'
                },
                {
                    imgSrc: '{{asset('assets/img/raiting/Santiago.jpg')}}',
                    imgAlt: 'Foto de santiago',
                    user: 'Cesar | OAS999',
                    description: 'Cesar es ....',
                    stars: '1'
                },
            ],
            currentSlideIndex: 1,
            isPaused: false,
            autoplayInterval: null,
            previous() {
                if (this.currentSlideIndex > 1) {
                    this.currentSlideIndex = this.currentSlideIndex - 1
                } else {
                    // If it's the first slide, go to the last slide
                    this.currentSlideIndex = this.slides.length
                }
            },
            next() {
                if (this.currentSlideIndex < this.slides.length) {
                    this.currentSlideIndex = this.currentSlideIndex + 1
                } else {
                    // If it's the last slide, go to the first slide
                    this.currentSlideIndex = 1
                }
            },
            autoplay() {
                this.autoplayInterval = setInterval(() => {
                    if (! this.isPaused) {
                        this.next()
                    }
                }, this.autoplayIntervalTime)
            },
            // Updates interval time
            setAutoplayInterval(newIntervalTime) {
                clearInterval(this.autoplayInterval)
                this.autoplayIntervalTime = newIntervalTime
                this.autoplay()
            },
        }" x-init="autoplay" class="relative w-full overflow-hidden">

                <!-- slides -->
                <!-- Change min-h-[50svh] to your preferred height size -->
                <div class="relative min-h-[50svh] w-full">

                    <template x-for="(slide, index) in slides">
                        <div x-cloak x-show="currentSlideIndex == index + 1"
                            class="absolute inset-0 grid md:grid-cols-3 items-center justify-items-center justify-center h-full"
                            x-transition.opacity.duration.1000ms>

                            <div class="">
                                <div class="rounded-full bg-[#13408b] p-5">
                                    <img x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" alt=""
                                        class="rounded-full h-64 w-64 ">
                                </div>
                            </div>
                            <div class="col-span-2 w-full">
                                <div class="flex flex-col gap-12">
                                    <div class="">
                                        <h4 class="font-bold text-4xl text-[#13408b]" x-text="slide.user"
                                            x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h4>
                                    </div>
                                    <div class="flex flex-col gap-5 w-4/5">
                                        <p class="" x-text="slide.description"></p>

                                        <div x-data="{ currentVal: slide.stars }" class="flex items-center gap-1">
                                            <label for="oneStar"
                                                class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                                                <span class="sr-only">one star</span>
                                                <input x-model="currentVal" id="oneStar" type="radio" class="sr-only"
                                                    name="rating" value="1">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"
                                                    :class="currentVal > 0 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd">
                                                </svg>
                                            </label>

                                            <label for="twoStars"
                                                class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                                                <span class="sr-only">two stars</span>
                                                <input x-model="currentVal" id="twoStars" type="radio" class="sr-only"
                                                    name="rating" value="2">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"
                                                    :class="currentVal > 1 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd">
                                                </svg>
                                            </label>

                                            <label for="threeStars"
                                                class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                                                <span class="sr-only">three stars</span>
                                                <input x-model="currentVal" id="threeStars" type="radio" class="sr-only"
                                                    name="rating" value="3">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"
                                                    :class="currentVal > 2 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd">
                                                </svg>
                                            </label>

                                            <label for="fourStars"
                                                class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                                                <span class="sr-only">four stars</span>
                                                <input x-model="currentVal" id="fourStars" type="radio" class="sr-only"
                                                    name="rating" value="4">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"
                                                    :class="currentVal > 3 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd">
                                                </svg>
                                            </label>

                                            <label for="fiveStars"
                                                class="cursor-pointer transition hover:scale-125 has-[:focus]:scale-125">
                                                <span class="sr-only">five stars</span>
                                                <input x-model="currentVal" id="fiveStars" type="radio" class="sr-only"
                                                    name="rating" value="5">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"
                                                    :class="currentVal > 4 ? 'text-amber-500' : 'text-slate-700 dark:text-slate-300'">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd">
                                                </svg>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- indicators -->
                <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2"
                    role="group" aria-label="slides">
                    <template x-for="(slide, index) in slides">
                        <button class="size-2 cursor-pointer rounded-full transition"
                            x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)"
                            x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']"
                            x-bind:aria-label="'slide ' + (index + 1)"></button>
                    </template>
                </div>
            </div>




        </div>
    </section>
    <div class="h-32"></div>
</div>