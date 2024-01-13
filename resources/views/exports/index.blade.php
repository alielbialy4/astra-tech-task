@extends('layouts.master')
@section('content')
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Select Columns to Export</h4>

                    <a href="/" class="btn btn-danger">
                        return Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('export.users') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="columns[]" value="full_name"
                                    id="full_name">
                                <label class="form-check-label" for="full_name">Full Name</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="columns[]" value="email"
                                    id="email">
                                <label class="form-check-label" for="email">Email</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="columns[]" value="phone_number"
                                    id="phone_number">
                                <label class="form-check-label" for="phone_number">Phone Number</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Export</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
