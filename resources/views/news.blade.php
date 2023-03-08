@extends('layouts.default')

@section('content')
    <section class="text-gray-600 overflow-hidden text-center">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap text-center">
                <div class="container mx-auto text-center">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $news->title }}</h1>
                    <p class="leading-relaxed">{{ $news->author }}</p>
                    <p class="leading-relaxed">{{ \Carbon\Carbon::parse($news->publication_date)->format('d/m/Y') }}</p>
                    <div>
                        <div>
                            <img src="{{ url("storage/{$news->image}") }}" style="display: block; margin: 0 auto; max-width: 100%; width: 500px;">
                        </div>

                    </div>
                    <div class="flex border-t-2 border-gray-100 mt-6 pt-6">
                        <a class="text-gray-900 text-3xl mb-1 text-lg">{{ $news->text }}</a>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection
