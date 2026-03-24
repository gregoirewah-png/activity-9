@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white text-center">
                    <h4>{{ Auth::user()->name }}'s Private Dashboard</h4>
                </div>
                
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        Authentication successful! You are securely logged into Activity 9.
                    </div>
                    
                    <h5 class="mt-4">Esta algo bien la actividad</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Que rollo profe
                            <span class="badge badge-primary badge-pill">ola k ase</span>
                        </li>
                        <li class="list-group-item">vivan los pollos asados</li>
                        <li class="list-group-item">Estado: sinaloa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection