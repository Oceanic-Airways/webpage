@php
use Carbon\Carbon;
@endphp

<div class="">
    <div class="mt-12">
        <div class="grid px-16">
            <div class="title_container grid md:grid-cols-2 mb-12" data-aos="fade-down-right">
                <div class="flex flex-col gap-2">
                    <div class="">
                        <h3 class="text-6xl font-bold text-[#1f6be7]">Nuestros pilotos</h3>
                    </div>
                    <div class="blue_bar w-full p-2 bg-[#13408b] rounded-full"></div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="grid grid-cols-1 justify-center gap-6 md:w-4/5">
                    <div class="overflow-hidden w-full overflow-x-auto rounded-xl border border-slate-300">
                        <table class="w-full text-left text-sm text-slate-700">
                            <thead class="border-b border-slate-300 bg-slate-100 text-sm text-black">
                                <tr>
                                    <th scope="col" class="p-4">Callsing</th>
                                    <th scope="col" class="p-4">Name</th>
                                    <th scope="col" class="p-4">Location</th>
                                    <th scope="col" class="p-4">Last active</th>
                                    <th scope="col" class="p-4 text-center">IVAO STATUS</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-300">
                                @foreach ($pilots as $item)

                                <tr>
                                    <td class="p-4 font-bold">{{$item["va_user"]}}</td>
                                    <td class="p-4">{{$item["name"]}} {{$item["surname"][0]}}.</td>
                                    <td class="p-4">{{$item["location"]}}</td>
                                    <td class="p-4">
                                        {{Carbon::createFromTimestamp($item["lastactive"])->format('d/m/Y')}}</td>
                                    <td class="p-4 flex justify-center">
                                        @if (isset($item[0]['vid']))
                                        <img src="https://status.ivao.aero/{{$item[0]['vid']}}.png"
                                            alt="{{$item[0]['vid']}}">
                                        @endif
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>