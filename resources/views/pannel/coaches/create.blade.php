@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Create coach</h1>

            <br>

            <form action="{{ route('coaches.store') }}" method="post">
                @csrf

                Name :
                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"/>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>
                email :
                <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"/>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>
                Phone :
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror"/>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>
                Speciality :
                <input type="text" name="speciality" value="{{ old('speciality') }}" class="form-control @error('speciality') is-invalid @enderror"/>

                @error('speciality')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>

                <input type="submit" class="btn btn-primary" value="Create">
                <a class="btn btn-light" href="{{ route('coaches.index') }}">Cancel</a>

            </form>

        </div>
    </section>
@endsection
