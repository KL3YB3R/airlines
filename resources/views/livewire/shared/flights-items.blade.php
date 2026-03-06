<div class="flex justify-center flex-col mt-20 pe-10">
    <article class="flex bg-white shadow-md rounded-xl overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow">
        <!-- 1. Imagen del Destino -->
        <aside class="relative w-64 shrink-0">
            <img class="h-full w-full object-cover" src="{{ asset('assets/img/airport1.jpg') }}" alt="{{ 'New York, NY' }}">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                <span class="text-white font-bold text-lg uppercase tracking-wider">{{ 'New York, NY' }}</span>
            </div>
        </aside>

        <!-- 2. Información Principal (Cuerpo) -->
        <div class="flex-1 p-6 flex flex-col justify-between">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-widest">Vuelo #{{ 'AV-204' }}</p>
                    <h3 class="text-2xl font-black text-zinc-800">LA <span class="text-zinc-400 mx-2">→</span> {{ 'NEW YORK, NY' }} </h3>
                </div>
                <div class="text-right">
                    <span class="bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                        {{ 'A tiempo' }}
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-4">
                <div>
                    <p class="text-xs text-gray-400 uppercase">Salida</p>
                    <p class="font-semibold text-zinc-700">{{ '01 Enero, 2023' }}</p>
                    <p class="text-sm text-zinc-500">{{ '12:00 AM' }}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-400 uppercase">Asientos</p>
                    <p class="font-semibold text-zinc-700">{{ '100' }} <span class="text-gray-400 font-normal">/ {{ '200' }}</span></p>
                    <div class="w-full bg-gray-200 h-1.5 rounded-full mt-1">
                        <div class="bg-green-500 h-1.5 rounded-full" style="width: {{ '0' }}%"></div>
                    </div>
                </div>
                <div>
                    <p class="text-xs text-gray-400 uppercase">Clase</p>
                    <p class="font-semibold text-zinc-700">Económica</p>
                </div>
            </div>
        </div>

        <!-- 3. Sección "Ticket" (Lado Derecho) -->
        <aside class="w-48 bg-zinc-50 border-s border-dashed border-gray-300 p-6 flex flex-col items-center justify-center relative">
            <!-- Círculos de "Corte de Ticket" -->
            <div class="absolute -top-3 -left-3 w-6 h-6 bg-gray-100 rounded-full"></div>
            <div class="absolute -bottom-3 -left-3 w-6 h-6 bg-gray-100 rounded-full"></div>

            <div class="text-center">
                <p class="text-xs text-gray-400 uppercase">Puerta</p>
                <p class="text-3xl font-black text-zinc-800">{{ 'B12' }}</p>
            </div>

            <button class="mt-6 w-full bg-zinc-900 text-white text-xs font-bold py-3 rounded-lg hover:bg-zinc-800 transition-colors uppercase tracking-widest">
                Reservar
            </button>
        </div>
    </article>
</div>