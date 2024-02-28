<nav class="shadow-md fixed w-full z-40">
    <div class="mx-auto flex justify-between items-center px-8 sm:px-0 md:px-0 xl:px-0">
        {{-- <div class="flex flex-grow">
            <img src="/assets/icons/aeropuerto.png" alt="" class="w-10">
        </div> --}}
        <div class="flex md:hidden items-center cursor-pointer pl-0 sm:pl-6 z-50">
            <img src="/assets/icons/menu.png" alt="" class="w-7 py-5" onclick="openMenu()">
        </div>
        <div id="menu" class="md:flex hidden flex-grow justify-between absolute md:relative md:top-0 top-16 left-0 bg-gray-50 w-full md:w-auto items-center py-0 md:py-0 sm:px-0 md:px-7 shadow-lg md:shadow-none">
            <div class="flex flex-col md:flex-row mb-6 md:mb-0 @if (session('id')) w-full justify-center @endif">
                @if (!session('id'))
                    <a href="#" class="text-sm md:mr-0 mb-0 px-8 py-5 md:py-6 hover:bg-gray-200 transition-all duration-300">Home</a>
                    <a href="#" class="text-sm md:mr-0 mb-0 px-8 py-5 md:py-6 hover:bg-gray-200 transition-all duration-300">Services</a>
                    <a href="#" class="text-sm md:mr-0 mb-0 px-8 py-5 md:py-6 hover:bg-gray-200 transition-all duration-300">Airlines</a>
                    <a href="#" class="text-sm md:mr-0 mb-0 px-8 py-5 md:py-6 hover:bg-gray-200 transition-all duration-300">Contact us</a>
                @else
                    <li class="flex items-center">
                        <a href="#" class="text-sm md:mr-0 mb-0 px-8 py-5 md:py-6 hover:bg-gray-200 transition-all duration-300">Home</a>
                    </li>
                    <li class="flex items-center relative">
                        <button class="text-sm md:mr-0 mb-0 px-8 py-5 md:py-6 hover:bg-gray-200 transition-all duration-300 button-subOption">Pilots</button>
                        <ul class="z-50 w-52 suboption-container hidden absolute -bottom-22 bg-white shadow-md rounded-md p-2">
                            <li class="flex items-center">
                                <a href="#" class="w-full hover:bg-seaFoam rounded-lg text-sm px-2 py-2 transition-all duration-300">Pilots</a>
                            </li>
                            <li class="flex items-center">
                                <a href="PilotsRegister" class="w-full hover:bg-seaFoam rounded-lg text-sm px-2 py-2 transition-all duration-300"> New Pilot</a>
                            </li>
                        </ul>
                    </li>
                    <li class="flex items-center relative">
                        <button class="text-sm md:mr-0 mb-0 px-8 py-5 md:py-6 hover:bg-gray-200 transition-all duration-300 button-subOption">Planes</button>
                        <ul class="z-50 w-52 suboption-container hidden absolute -bottom-22 bg-white shadow-md rounded-md p-2">
                            <li class="flex items-center">
                                <a href="#" class="w-full hover:bg-seaFoam rounded-lg text-sm px-2 py-2 transition-all duration-300">Planes</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="w-full hover:bg-seaFoam rounded-lg text-sm px-2 py-2 transition-all duration-300">New Plane</a>
                            </li>
                        </ul>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="text-sm md:mr-0 mb-0 px-8 py-5 md:py-6 hover:bg-gray-200 transition-all duration-300">Flights</a>
                    </li>

                @endif
            </div>
            <div class="flex flex-col md:flex-row text-center items-center">
                @if (!session('id'))
                    <a href="/login" class="w-full md:w-24 border-2 border-forest py-2.5 px-5 rounded-md hover:bg-forest hover:text-white transition duration-300 ease-in-out md:mr-4 mb-6 md:mb-0 lg:mb-0 text-sm">Sign in</a>
                    <a href="/register" class="w-full md:w-24 text-white border-2 border-forest bg-forest py-2.5 px-5 rounded-md hover:bg-white hover:border-forest hover:text-black transition duration-300 ease-in-out text-sm">Sign up</a>
                @else
                    <button class="p-5 bg-sky rounded-full relative hidden md:inline">
                        <span class="absolute bottom-0 right-1.5 p-1.5 bg-green-600 rounded-full"></span>
                    </button>
                @endif
            </div>
        </div>

        @if (session('id'))
            <button class="p-5 h-8 bg-sky rounded-full relative md:hidden mr-2">
                <span class="absolute bottom-0 right-1.5 p-1.5 bg-green-600 rounded-full"></span>
            </button>
        @endif

    </div>
</nav>
<script type="module" src="/assets/js/navHeaderOptions.js"></script>

<script>
    function openMenu(){
        let menu = document.getElementById("menu")

        if(menu.classList.contains('hidden')){
            menu.classList.remove('hidden')
        }else{
            menu.classList.add('hidden')
        }
    }
</script>
