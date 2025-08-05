@extends('dog.layout')

@section('title', 'Descripción del Perro')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/5">
            <h1 class="text-7xl text-[#A0C878] text-center mb-8">{{ $dog->name }}</h1>

            <!-- Back to index -->
            <button
                class="bg-[#5f965a] hover:bg-[#478a4d] text-white font-bold rounded-lg px-4 py-2 my-4 cursor-pointer"
                onclick="location.href='{{ route('dog.index') }}'">
                Volver
            </button>

            <div class="grid grid-cols-6 grid-rows-4 justify-center bg-[#A0C878] rounded-lg pt-7 pb-5">
                <!-- Imagen del perro -->
                <div class="col-span-2 row-span-4 col-start-2 m-8">
                    <img src="{{ $dog->image }}" alt="Imagen del perro" class="object-cover p-8 bg-gray-200 w-full h-full rounded-lg">
                </div>

                <!-- Descripción del perro -->
                <div class="col-span-2 row-span-3 col-start-4">
                    <div class="p-8 w-auto bg-[#DDEB9D] m-8 rounded-lg">
                        <p>Datos del Perro</p><br>
                        <div class="grid grid-cols-2 gap-3">
                            <!-- ID -->
                            <div>
                                <p>ID</p>
                                <p>{{ $dog->id }}</p>
                            </div>

                            <!-- Peso -->
                            <div>
                                <p>Peso</p>
                                <p>{{ $dog->weight }}</p>
                            </div>

                            <!-- Raza -->
                            <div>
                                <p>Raza</p>
                                <p>{{ $dog->race }}</p>
                            </div>

                            <!-- Edad -->
                            <div>
                                <p>Edad</p>
                                <p>{{ $dog->age }}</p>
                            </div>

                            <!-- Tipo de animal -->
                            <div>
                                <p>Tipo de animal</p>
                                <p>{{ $dog->animal_type->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botón editar -->
                <div class="col-span-2 col-start-4 m-8">
                    <button
                        class="bg-[#5f965a] hover:bg-[#478a4d] text-white font-bold rounded-lg w-full h-full p-4 cursor-pointer"
                        onclick="location.href='{{ route('dog.edit', $dog->id) }}'">
                        Editar Perro
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
