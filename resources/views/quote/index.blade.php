@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <div class="card-header">{{ __('Цитата') }}</div>
                        @auth
                            <div class="container flex justify-center pt-8 sm:justify-start sm:pt-">
                                <h3><a href="{{ route('quote.create') }}">{{ __('Додати') }}</a></h3>
                            </div>
                        @endauth
                        <div class="container mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                @foreach($quotes as $quote)
                                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            <div class="text-sm text-gray-700 dark:text-gray-500 underline">
                                                {{ $quote->description }}
                                            </div>
                                            @if($quote->shared_count )
                                                <div class="text-sm text-gray-700 dark:text-gray-500 underline">
                                                    {{ __('Кол-во shared:') }} {{ $quote->shared_count }}
                                                </div>
                                            @endif
                                            @auth
                                                <div class="text-sm text-gray-700 dark:text-gray-500 underline">
                                                    <h5><a href="{{ route('quote.edit', ['quote' => $quote->id]) }}">{{ __('Оновити') }}</a></h5>
                                                </div>
                                            @endauth

                                        </div>
                                    </div>
                                    <hr/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
