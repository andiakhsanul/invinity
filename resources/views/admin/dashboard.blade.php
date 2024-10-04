@extends('layout-admin.main')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <h5>Welcome, {{ Auth::user()->name ?? 'Admin INIVINITY 2024' }}</h5>
        </div>
    </div>
</div>

<div class="row">
    <!-- Card 1: Papers -->
    <div class="col">
        <div class="card rounded-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between">
                    <div class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-regular fa-file fa-xl"></i>
                        <h3 class="fw-bold m-0 p-0">Papers</h3>
                    </div>
                    <h5>10</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2: Users -->
    <div class="col">
        <div class="card rounded-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between">
                    <div class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-solid fa-users fa-xl"></i>
                        <h3 class="fw-bold m-0 p-0">Users</h3>
                    </div>
                    <h5>15</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 3: Applications -->
    <div class="col">
        <div class="card rounded-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between">
                    <div class="d-flex flex-row align-items-center gap-2">
                        <i class="fa-solid fa-laptop-code fa-xl"></i>
                        <h3 class="fw-bold m-0 p-0">Seminar</h3>
                    </div>
                    <h5>50</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
