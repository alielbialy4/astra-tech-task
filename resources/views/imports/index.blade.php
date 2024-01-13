@extends('layouts.master')
@section('content')
    <div class="mt-5">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <form class="mt-5" action="{{ route('import.users') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose a file:</label>
        <input class="form-control"   type="file" name="file" id="file" accept=".xlsx, .xls" required>
        <div class="row mt-5">
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" type="submit">import Users</button>
            </div>
            <div class="col-md-6">
                <a class="btn btn-success btn-block" href="/">Go Back</a>
            </div>
        </div>
    </form>
@endsection
