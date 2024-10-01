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
    <div class="col">
        <div class="card rounded-3">
            <div class="card-body">
                <div class="d-flex flex-column justify-content-between">
                    <div class="d-flex flex-row  align-items-center gap-2">
                        <i class="fa-regular fa-file fa-xl"></i>
                        <h3 class="fw-bold m-0 p-0">Papers</h3>
                    </div>
                    <h5>10</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
