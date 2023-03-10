@extends('main')

@section('title', 'Logs')

@section('content')
    <div class="container">
        <div class="d-grid gap-2 d-md-flex mt-2">
            <h1 style="font-size: 23px; font-weight: 400;">Activity Logs</h1>
        </div>
        <hr>
        <table class="table table-striped text-center">
            <thead style="background-color: lightgray; color:black;">
                <th>Timestamp</th>
                <th>Log Entry</th>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->created_at->format('l, d F Y g:i A') }}</td>
                    <td>{{ $log->log_entry }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
        </div>
    </div>
@endsection

