@extends('website.template')
@section('content')
<div class="mt-12">
    <div class="grid px-16">
        <div class="title_container grid md:grid-cols-2 mb-12" data-aos="fade-down-right">
            <div class="flex flex-col gap-2">
                <div class="">
                    <h3 class="text-6xl font-bold text-[#1f6be7]">Nuestro staff</h3>
                </div>
                <div class="blue_bar w-full p-2 bg-[#13408b] rounded-full"></div>
            </div>
        </div>
        <div class="">
            <div class="grid lg:grid-cols-2 grid-cols-1 justify-center gap-6">
                {{-- Component --}}
                <div class="flex items-center w-full">
                    <div class="inset-0 grid md:grid-cols-3 items-center justify-items-center justify-center gap-5">
                        <div class="w-100">
                            <div class="rounded-full bg-[#13408b] p-5">
                                <img src="{{asset('assets/img/staff/Lucho.jpg')}}" alt=""
                                    class="rounded-full h-64 w-64 ">
                            </div>
                        </div>
                        <div class="row-span-2 w-full">
                            <div class="flex flex-col">
                                <div class="">
                                    <h4 class="font-bold text-3xl text-[#13408b]">CO-CEO - Luis G.</h4>
                                </div>
                                <div class="flex justify-center flex-col gap-5 w-full">
                                    <p class="text-center">
                                    <ul class="text-2xl font-normal">
                                        <li>VID: 519256</li>
                                        <li>Callsing: OAS101</li>
                                    </ul>
                                    </p>
                                </div>
                                <img src="https://status.ivao.aero/519256.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Component --}}
                <div class="flex items-center w-full">
                    <div class="inset-0 grid md:grid-cols-3 items-center justify-items-center justify-center gap-5">
                        <div class="w-100">
                            <div class="rounded-full bg-[#13408b] p-5">
                                <img src="{{asset('assets/img/staff/Santiago.jpg')}}" alt=""
                                    class="rounded-full h-64 w-64 ">
                            </div>
                        </div>
                        <div class="row-span-2 w-full">
                            <div class="flex flex-col">
                                <div class="">
                                    <h4 class="font-bold text-3xl text-[#13408b]">CEO - Santiago S.</h4>
                                </div>
                                <div class="flex justify-center flex-col gap-5 w-full">
                                    <p class="text-center">
                                    <ul class="text-2xl font-normal">
                                        <li>VID: 698698</li>
                                        <li>Callsing: OAS102</li>
                                    </ul>
                                    </p>
                                </div>
                                <img src="https://status.ivao.aero/698698.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Component --}}
                <div class="flex items-center w-full">
                    <div class="inset-0 grid md:grid-cols-3 items-center justify-items-center justify-center gap-5">
                        <div class="w-100">
                            <div class="rounded-full bg-[#13408b] p-5">
                                <img src="{{asset('assets/img/staff/Hafid.png')}}" alt=""
                                    class="rounded-full h-64 w-64 ">
                            </div>
                        </div>
                        <div class="row-span-2 w-full">
                            <div class="flex flex-col">
                                <div class="">
                                    <h4 class="font-bold text-3xl text-[#13408b]">Jefe de Operaciones - Hafid.</h4>
                                </div>
                                <div class="flex justify-center flex-col gap-5 w-full">
                                    <p class="text-center">
                                    <ul class="text-2xl font-normal">
                                        <li>VID: 679272</li>
                                        <li>Callsing: OAS103</li>
                                    </ul>
                                    </p>
                                </div>
                                <img src="https://status.ivao.aero/679272.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Component --}}
                <div class="flex items-center w-full">
                    <div class="inset-0 grid md:grid-cols-3 items-center justify-items-center justify-center gap-5">
                        <div class="w-100">
                            <div class="rounded-full bg-[#13408b] p-5">
                                <img src="{{asset('assets/img/staff/Cesar.jpeg')}}" alt=""
                                    class="rounded-full h-64 w-64 ">
                            </div>
                        </div>
                        <div class="row-span-2 w-full">
                            <div class="flex flex-col">
                                <div class="">
                                    <h4 class="font-bold text-3xl text-[#13408b]">Director Corporativo - Cesar V.</h4>
                                </div>
                                <div class="flex justify-center flex-col gap-5 w-full">
                                    <p class="text-center">
                                    <ul class="text-2xl font-normal">
                                        <li>VID: 730717</li>
                                        <li>Callsing: OAS105</li>
                                    </ul>
                                    </p>
                                </div>
                                <img src="https://status.ivao.aero/730717.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Component --}}
                <div class="flex items-center w-full">
                    <div class="inset-0 grid md:grid-cols-3 items-center justify-items-center justify-center gap-5">
                        <div class="w-100">
                            <div class="rounded-full bg-[#13408b] p-5">
                                <img src="{{asset('assets/img/staff/Maxi.jpeg')}}" alt=""
                                    class="rounded-full h-64 w-64 ">
                            </div>
                        </div>
                        <div class="row-span-2 w-full">
                            <div class="flex flex-col">
                                <div class="">
                                    <h4 class="font-bold text-3xl text-[#13408b]">Director de marketing - Maxi G.</h4>
                                </div>
                                <div class="flex justify-center flex-col gap-5 w-full">
                                    <p class="text-center">
                                    <ul class="text-2xl font-normal">
                                        <li>VID: 739666</li>
                                        <li>Callsing: OAS120</li>
                                    </ul>
                                    </p>
                                </div>
                                <img src="https://status.ivao.aero/739666.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Component --}}
                <div class="flex items-center w-full">
                    <div class="inset-0 grid md:grid-cols-3 items-center justify-items-center justify-center gap-5">
                        <div class="w-100">
                            <div class="rounded-full bg-[#13408b] p-5">
                                <img src="{{asset('assets/img/staff/David.webp')}}" alt=""
                                    class="rounded-full h-64 w-64 ">
                            </div>
                        </div>
                        <div class="row-span-2 w-full">
                            <div class="flex flex-col">
                                <div class="">
                                    <h4 class="font-bold text-3xl text-[#13408b]">Fundador - David V.</h4>
                                </div>
                                <div class="flex justify-center flex-col gap-5 w-full">
                                    <p class="text-center">
                                    <ul class="text-2xl font-normal">
                                        <li>VID: 739666</li>
                                        <li>Callsing: OAS120</li>
                                    </ul>
                                    </p>
                                </div>
                                <img src="https://status.ivao.aero/739666.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection