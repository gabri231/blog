@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Administración del blog') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('Estás logueado correctamente') }}
        </div>
    </div>
@endsection
