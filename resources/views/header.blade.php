<nav class="bg-gray-400 py-6 relative shadow">
    <div class="container mx-auto flex px-8 xl:px-8">
        <div class="flex flex-grow">
            <img src="/assets/icons/aeropuerto.png" alt="" class="w-12">
        </div>
        <div class="flex lg:hidden items-center">
            <img src="/assets/icons/menu.png" alt="" class="w-7" onclick="openMenu()">
        </div>
        <div id="menu" class="lg:flex hidden flex-grow justify-between absolute lg:relative lg:top-0 top-20 left-0 bg-gray-400 w-full lg:w-auto items-center py-14 lg:py-0 px-8 sm:px-24 lg:px-0">
            <div class="flex flex-col lg:flex-row mb-6 lg:mb-0">
                <a href="#" class="text-white lg:mr-7 mb-6 lg:mb-0">Home</a>
                <a href="#" class="text-white lg:mr-7 mb-6 lg:mb-0">Services</a>
                <a href="#" class="text-white lg:mr-7 mb-6 lg:mb-0">Airlines</a>
                <a href="#" class="text-white lg:mr-7 mb-6 lg:mb-0">Contact us</a>
            </div>
            <div class="flex flex-col lg:flex-row text-center">
                <a href="/login" class="text-white border border-white py-2.5 px-5 rounded-md hover:bg-white hover:text-gray-800 transition duration-300 ease-in-out lg:mr-4 mb-6 lg:mb-0">Iniciar sesion</a>
                <a href="/register" class="text-white bg-blue-500 py-2.5 px-5 rounded-md hover:bg-blue-600 hover:border-blue-600 transition duration-300 ease-in-out">Registrate</a>
            </div>
        </div>

    </div>
</nav>

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
