@extends('dog.layout')

@section('title', 'Lista de Perros')

@section('content')
    <div class="text-center text-white">
        <h1 class="text-7xl mt-6 text-[#5f965a]">Bienvenido Usuario</h1>
        <h3 class="text-2xl p-3 text-[#5f965a]">Aquí puede administrar a sus perros</h3>
    </div>

    <div class="mb-7 pb-7">
        <a href="{{ route('dog.create') }}" class="bg-[#5f965a] hover:bg-[#478a4d] text-white font-bold py-2 px-4 rounded">
            Agregar perro
        </a>
    </div>

    <div class="grid grid-cols-5 gap-7">
        @foreach ($dogs as $dog)
            <div class="w-full max-w-sm bg-[#A0C878] border border-gray-200 rounded-lg shadow-sm">
                <div class="flex justify-end px-4 pt-4"></div>
                <div class="flex flex-col items-center pb-10">
                    <img class="w-34 h-34 object-fill" src="{{ $dog->image }}" alt="Imagen del perro"/>
                    <h5 class="mb-1 text-xl font-medium text-[#FFFDF6]">{{ $dog->name }}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $dog->race }}</span>
                    <div class="flex mt-4 md:mt-6">
                        <a href="{{ route('dog.show', $dog->id) }}"
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-[#A0C878] bg-[#FFFDF6] rounded-lg hover:bg-[#f3f1e9] focus:ring-4 focus:outline-none">
                            Ver perro
                        </a>

                        <form action="{{ route('dog.destroy', $dog) }}" method="POST"
                              class="py-2 px-4 ms-2 text-sm font-medium focus:outline-none rounded-lg border focus:z-10 focus:ring-4 ring-gray-700 bg-gray-800 hover:bg-gray-900 text-gray-400 border-gray-600">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este perro?')">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
