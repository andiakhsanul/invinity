@extends('layout-admin.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Full Name:</strong> <span>{{ $payment_detail->full_name }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Nationality:</strong> <span>{{ $payment_detail->nationality }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Country of Residence:</strong> <span>{{ $payment_detail->country_of_residence }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Institution:</strong> <span>{{ $payment_detail->institution }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Phone Number:</strong> <span>{{ $payment_detail->phone_number }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Email:</strong> <span>{{ $payment_detail->email }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Student Number:</strong> <span>{{ $payment_detail->student_number }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Screenshot Proof:</strong> <span><a target="_blank"
                            href="{{ Storage::url($payment_detail->screenshot_proof) }}">View</a></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Payment Methods:</strong> <span>{{ $payment_detail->payment_methods }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Payment Proof:</strong> <span><a href="{{ Storage::url($payment_detail->payment_proof) }}"
                            target="_blank">View</a></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Status:</strong>
                    @if ($payment_detail->status == 0)
                        <!-- pending -->
                        <span class="">
                            {{ $payment_detail->status }}
                        </span>
                    @elseif ($payment_detail->status == 1)
                        <!-- approved -->
                        <span class="text-success">
                            Approved
                        </span>
                    @else
                        <span class="text-danger">
                            Decline
                        </span>
                    @endif
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Reason:</strong> <span>{{ $payment_detail->reason }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Document:</strong> <span><a target="_blank" href="{{ Storage::url($payment_detail->document) }}">View Documents</a></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Poster:</strong> <span><a target="_blank" href="{{ Storage::url($payment_detail->poster) }}">View Poster</a></span>
                </li>
            </ul>
            <form action="{{ route('paper.approved', $payment_detail->id) }}" method="post" class="mt-3 text-center">
                @csrf
                @method('PUT')
                <div class="d-flex gap-2">
                    <button type="submit" name="status" value="1" class="btn btn-success w-100">Approve</button>
                    <a href="{{ route('paper.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    <a href="{{ route('paper.delete', $payment_detail->id) }}" class="btn ">Delete</a>
                </div>
            </form>
            <form action="{{ route('paper.approved', $payment_detail->id) }}" method="post" class="mt-3 text-center">
                @csrf
                @method('PUT')
                <button onclick="decline(event)" name="status" class="btn btn-danger"
                    style="margin-top: 4rem">Decline</button>
                <textarea name="reason" class="form-control mt-3" id="reason" cols="30" rows="3"
                    placeholder="reason for declining" style="display: none;"></textarea>
                <button type="submit" value="2" name="status" id="reason2" style="display: none;">decline for sure</button>
            <form>
        </div>
    </div>

    <script>
        function decline(event) {
            event.preventDefault();
            document.getElementById('reason').style.display = 'block';
            document.getElementById('reason2').style.display = 'block';
        }
    </script>
@endsection
