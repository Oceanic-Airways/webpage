<div class="">
    <div x-data="{modalIsOpen: $wire.requestId}">
        <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
            class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
            role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
            <!-- Modal Dialog -->
            <div x-show="modalIsOpen"
                x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                x-transition:enter-start="opacity-0 scale-110" x-transition:enter-end="opacity-100 scale-100"
                class="flex md:w-2/5 flex-col gap-4  overflow-hidden rounded-xl border border-slate-300 bg-white text-slate-700">
                <!-- Dialog Header -->
                <div class="flex items-center justify-between border-b border-slate-300 bg-slate-100/60 p-4">
                    <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black">Ingresa
                        los siguientes datos</h3>
                </div>
                <!-- Dialog Body -->
                <div class="px-4 py-8">
                    <form class="">
                        <div class="mb-5">
                            <label for="vid" class="block mb-2 text-sm font-medium text-gray-900">
                                VID</label>
                            <input type="number" id="vid"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="999999" wire:model.live='vid' />
                            @error('vid')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <span class="block mb-2 text-sm font-medium text-gray-900">O</span>
                        </div>
                        <div class="mb-5">
                            <label for="vatsim" class="block mb-2 text-sm font-medium text-gray-900">Vatsim ID</label>
                            <input type="number" id="vatsim"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="9999999" wire:model.live='vatsimId' />
                            @error('vatsimId')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </form>
                </div>
                <!-- Dialog Footer -->
                <div
                    class="flex flex-col-reverse justify-between gap-2 border-t border-slate-300 bg-slate-100/60 p-4 sm:flex-row sm:items-center md:justify-end">
                    <button type="button" wire:click='saveData'
                        class="cursor-pointer whitespace-nowrap rounded-xl bg-[#1340b8] px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600">Continuar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="h-12"></div>

    <div class="flex px-12 flex-col">
        <div class="text-5xl font-bold">
            <span class="text-[#13408b]">{{$pilotStats["va_user"]}} | {{Auth::user()->name}}
                {{Auth::user()->surname}}
            </span>
        </div>

        <div class="text-3xl mt-5 font-semibold text-slate-700">
            Estadisticas:</span>
        </div>
    </div>
    <section class="flex items-center flex-col text-center mt-5" data-aos="fade-up">
        <div class="md:w-4/5 w-4/5 sm:w-full grid md:grid-cols-3 justify-items-center gap-12 font-semibold mb-5">
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl ">
                    {{-- @dd($pilotStats) --}}
                    <span>{{$pilotStats["flights"]}}</span>
                </div>
                <div class="text-4xl"><span>Vuelos</span></div>
            </div>
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl">
                    <span>{{number_format($pilotStats["hours"],0,',','.')}}</span>
                </div>
                <div class="text-4xl"><span>Horas</span></div>
            </div>
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl">
                    <span>{{$pilotStats["location"]}}</span>
                </div>
                <div class="text-4xl"><span>Ubicación</span></div>
            </div>
        </div>
        <div class="md:w-3/5 w-3/5 sm:w-full grid md:grid-cols-2 justify-items-center gap-12 font-semibold mb-5">
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl">
                    <span>{{Auth::user()->rank}}</span>
                </div>
                <div class="text-4xl"><span>Rango</span></div>
            </div>
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl">
                    <span>{{Auth::user()->alt_code}}</span>
                </div>
                <div class="text-4xl"><span>Base</span></div>
            </div>
        </div>
        <div class="md:w-4/5 w-4/5 sm:w-full grid md:grid-cols-3 justify-items-center gap-12 font-semibold mb-5">
            @if (Auth::user()->vid)

            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">
                <div class="text-6xl ">
                    <span>{{Auth::user()->vid}}</span>
                </div>
                <div class="text-4xl"><span>IVAO VID</span></div>
            </div>
            @endif
            <div class="rounded-xl w-full grid text-center p-6 text-white"></div>
            @if (Auth::user()->vatsim_id)
            <div class="bg-[#1f7be7] rounded-xl w-full grid text-center p-6 text-white">

                <div class="text-6xl">
                    <span>{{Auth::user()->vatsim_id}}</span>
                </div>
                <div class="text-4xl"><span>Vatsim ID</span></div>
            </div>
            @endif
        </div>
    </section>

</div>