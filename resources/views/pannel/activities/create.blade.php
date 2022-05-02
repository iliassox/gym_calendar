@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Create activity</h1>

            <br>

            <form action="{{ route('activities.store') }}" method="post">
                @csrf

                Name :
                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"/>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>
                Type :
                <input type="text" name="type" value="{{ old('type') }}" class="form-control @error('type') is-invalid @enderror"/>

                @error('type')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>

                <input type="submit" class="btn btn-primary" value="Create">
                <a class="btn btn-light" href="{{ route('activities.index') }}">Cancel</a>

            </form>

        </div>
    </section>
@endsection
