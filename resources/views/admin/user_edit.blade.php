
@extends('layouts.default')
@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Editar Usuários</h1>
                </div>

                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.user.update',  ['user' => $user->id] )}}">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/1">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome</label>
                                <input value="{{$user->name}}" type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                        </div>

                        <div class="p-2 w-1/1">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="text" id="email" name="email"
                                       value="{{$user->email}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            <div class="relative">
                                <label for="password" class="leading-7 text-sm text-gray-600">Senha</label>
                                <input type="text" id="password" name="password"
                                       value="{{$user->password}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>



                        <div class="p-2 w-1/2">
                            <button
                            type="submit"
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Editar
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
