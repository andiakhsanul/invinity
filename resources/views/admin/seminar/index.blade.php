@extends('layout-admin.main')
@section('content')

<h1>All Seminars</h1>
    <div class="container">
        @foreach ($seminar as $item)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->full_name }}</h5>
                    <div class="row">
                        <div class="col-md-6"><strong>Country of Residence:</strong></div>
                        <div class="col-md-6">{{ $item->country_of_residence }}</div>

                        <div class="col-md-6"><strong>Institution:</strong></div>
                        <div class="col-md-6">{{ $item->institution }}</div>

                        <div class="col-md-6"><strong>Profession:</strong></div>
                        <div class="col-md-6">{{ $item->profession }}</div>

                        <div class="col-md-6"><strong>Phone Number:</strong></div>
                        <div class="col-md-6">{{ $item->phone_number }}</div>

                        <div class="col-md-6"><strong>Email:</strong></div>
                        <div class="col-md-6">{{ $item->email }}</div>

                        <div class="col-md-6"><strong>Student Number:</strong></div>
                        <div class="col-md-6">{{ $item->student_number }}</div>

                        <div class="col-md-6"><strong>Nationality:</strong></div>
                        <div class="col-md-6">{{ $item->nationality }}</div>

                        <div class="col-md-6"><strong>Screenshot Proof:</strong></div>
                        <div class="col-md-6">
                            <a href="{{ Storage::url($item->screenshot_proof) }}" target="_blank">View Screenshot</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @if ($seminar->isEmpty())
            <p class="text-center">No seminar entries found.</p>
        @endif
    </div>
@endsection
