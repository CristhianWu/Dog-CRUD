@extends('dog.layout')

@section('title','Crear perro')

@section('content')

    <div>
        <!-- Back to index -->
        <button class="bg-[#5f965a] hover:bg-[#478a4d] text-white font-bold rounded-lg px-4 py-2 my-4 cursor-pointer" onclick="location.href='{{ route('dog.index') }}'">
           Volver
        </button>

        <form action="{{ route('dog.store') }}" method="POST" class="max-w-sm mx-auto">
            @csrf
            <div class="max-w-sm mx-auto mt-20 bg-white rounded-md shadow-md overflow-hidden">
                <div class="px-6 py-4 bg-gray-700 text-white">
                    <h1 class="text-lg font-bold">Crea a tu perro</h1>
                </div>

                <div class="px-6 py-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Nombre
                        </label>
                        <input
                            class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="name" type="text" value="{{ old('name') }}">
                    </div>
            
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="weight">
                            Peso
                        </label>
                        <input
                            class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="weight" name="weight" type="text" value="{{ old('weight') }}">
                    </div>
            
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="race">
                            Raza
                        </label>
                        <input
                            class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="race" name="race" type="text" value="{{ old('race') }}">
                    </div>
        
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="age">
                            Edad
                        </label>
                        <input
                            class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="age" name="age" type="text" value="{{ old('age') }}">
                    </div>
        
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="animal_type_id">
                            Tipo de Animal
                        </label>
                        <select
                            class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="animal_type_id" name="animal_type_id">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
         
                    <input type="submit" class="bg-[#A0C878] hover:bg-[#81a65c] text-white font-bold py-2 px-4 rounded-full" value="Subir">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-600">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>

@endsection
