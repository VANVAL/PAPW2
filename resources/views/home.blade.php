@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    
        <!--Lo que fredo hizo para mostrar la lista de correos -->
        <!--
        @isset($users)
        <h3>Todos los usuarios registrados:</h3>
        <ul>
            @foreach ($users as $u)
            <li>{{ $u->email }}</li>
            @endforeach


        </ul>
        @endisset-->


        <!-- Hasta aqui -->
       
</div>
@endsection
