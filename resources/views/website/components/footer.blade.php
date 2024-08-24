@php
use Carbon\Carbon;
@endphp
<footer class="bg-white rounded-lg shadow dark:bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center justify-center">

            <div class="grid grid-cols-3 items-center gap-6 mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{asset('assets/img/OA LOGO.png')}}" class="h-16" alt="Flowbite Logo" />
                <img src="{{asset('assets/img/VATSIM_LOGO.png')}}" class="h-16" alt="Vatim Logo" />
                <img src="{{asset('assets/img/IvaoCo.png')}}" class="h-32" alt="Flowbite Logo" />
                <a href="https://www.ivao.aero/" target="_blank"><img src="{{asset('assets/img/IVAOPartnerVa.svg')}}"
                        class="h-16" alt="Flowbite Logo" />
                </a>
                <img src="{{asset('assets/img/CoMMArka_logo.png')}}" class="h-32" alt="Flowbite Logo" />
                <a href="https://liverylab.com.ar/pmdg-737-800-oceanic-airways/" target="_blank"><img
                        src="{{asset('assets/img/LiveryLab_logo.png')}}" class="h-32" alt="Flowbite Logo" /></a>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="flex gap-16 justify-center">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{Carbon::now()->year}}
                Oceanic Airways. All Rights Reserved.</span>
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">Made with ♥ by ©
                {{Carbon::now()->year}} <a href="https://commarka.app/" class="hover:underline">CoMMArka
                    Studios</a></span>
        </div>
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
            <a href="https://ivao.aero/ContactGDPR.asp"
                class="text-[#1f6be7] hover:font-bold text-md hover:underline">GDPR Policy
                Reglamento
                General de Protección de Datos - AQUI -</a></span>
    </div>
</footer>