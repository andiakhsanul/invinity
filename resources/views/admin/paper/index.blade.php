@extends('layout-admin.main')
@section('content')
    <div class="row">
        <div class="col">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Country of Residence</th>
                        <th>Profession</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Student Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($papers as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->country_of_residence }}</td>
                            <td>{{ $item->profession }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->student_number }}</td>
                            <td>
                                <a href="{{ route('paper.approve', $item->id) }}" class="btn btn-sm btn-warning">Approve</a>
                            </td>
                        </tr>
                        
                        <!-- screenshot proof modal -->
                        <div class="modal fade" id="screenshot{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->full_name }} - Screenshot Proof</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img loading="lazy" class="img-fluid rounded-2" src="{{ asset('storage/' . $item->screenshot_proof) }}" alt="{{ $item->screenshot_proof }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- payment proof modal -->
                        <div class="modal fade" id="payment{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->full_name }} - Payment Proof</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img loading="lazy" class="img-fluid rounded-2" src="{{ asset('storage/' . $item->payment_proof) }}" alt="{{ $item->payment_proof }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="9">
                                Sorry, nothing to shows ...
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
