@extends('layouts.default')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Usuários</h1>
                    <a  href="{{ route('admin.user.create') }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
                </div>
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">#</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">E-mail</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Senha</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">


                    @foreach($users as $user)
                        <tr @if($loop->even)class="bg-gray-50"@endif>
                            <td class="px-4 py-3">{{$user->id}}</td>
                            <td class="px-4 py-3">{{$user->name}}</td>
                            <td class="px-4 py-3">{{$user->email}}</td>
                            <td class="px-4 py-3">********</td>
                            <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                                <a href="{{ route('admin.user.edit', $user->id) }}" class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>
                                <a href="{{ route('admin.user.destroy', $user->id) }}" class="mt-3 text-indigo-500 inline-flex items-center">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
