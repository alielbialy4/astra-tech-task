@extends('layouts.master')
@section('content')

<div class="mt-5">
    <div>
        <h1 class="display-5 text-primary">
            Simple Admin Panel
        </h1>
        <p class="text-muted">
            from here you can import/export users .
        </p>
    </div>
    <div class="row mt-5" >
        <div class="col-md-3">
            <a class="btn btn-primary btn-block" href="{{ route('export.view') }}">Export Users</a>
        </div>
        <div class="col-md-6">
            <a class="btn btn-success btn-block" href="{{ route('import.view') }}">Import Users</a>
        </div>
    </div>
</div>

@endsection
