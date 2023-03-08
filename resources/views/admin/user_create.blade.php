@extends('layouts.default')
@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Adicionar Usuários</h1>
                </div>

                <form enctype="multipart/form-data" method="POST" action="{{ route('user.add') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/1">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome</label>
                                <input value="{{old('name')}}" type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('name')
                            <div class="text-red-400 text-sm">  {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                        <div class="p-2 w-1/1">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="text" id="email" name="email"
                                       value="{{old('email')}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('email')
                            <div class="text-red-400 text-sm">  {{ $message }}</div>
                            @enderror

                            <div class="relative">
                                <label for="password" class="leading-7 text-sm text-gray-600">Senha</label>
                                <input type="password" id="password" name="password"
                                       value="{{old('password')}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('password')
                            <div class="text-red-400 text-sm">  {{ $message }}</div>
                            @enderror

                        <div class="p-2 w-1/2">
                            <button
                                type="submit"
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Adicionar
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
