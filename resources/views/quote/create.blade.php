@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div><a href="{{ route('quote.index') }}">{{ __('Назад') }}</a></div>
                    <div class="card-header">{{ __('Створити') }}</div>
                    @if(session('errors'))
                        <h2>{{ session('errors')}}</h2>
                    @endif
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <form method="POST" action="{{ route('quote.store') }}">
                                @csrf
                                <textarea rows="5" class="w-100" name="description" minlength="10" required></textarea>
                                <button type="submit">{{ __('Відправити') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
