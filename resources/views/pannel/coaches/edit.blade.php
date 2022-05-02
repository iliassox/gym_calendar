@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Editing the coach : {{ $coach->name }}</h1>

            <br>

            <form action="{{ route('coaches.update',$coach->id) }}" method="post">
                @method('PUT')
                @csrf

                email :
                <input type="text" name="email" value="@if(!($errors->any())) {{ $coach->email }} @else {{ old('email') }} @endif" class="form-control @error('email') is-invalid @enderror"/>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>
                Phone :
                <input type="text" name="phone" value="@if(!($errors->any())) {{ $coach->phone }} @else {{ old('phone') }} @endif" class="form-control @error('phone') is-invalid @enderror"/>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>
                Speciality :
                <input type="text" name="speciality" value="@if(!($errors->any())) {{ $coach->speciality }} @else {{ old('speciality') }} @endif" class="form-control @error('speciality') is-invalid @enderror"/>

                @error('speciality')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>
                Experience :
                <input type="text" name="experience" value="@if(!($errors->any())) {{ $coach->experience }} @else {{ old('experience') }} @endif" class="form-control @error('experience') is-invalid @enderror"/>

                @error('experience')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>

                <input type="submit" class="btn btn-primary" value="Edit">

                <a class="btn btn-light" href="{{ route('coaches.index') }}">Cancel</a>

            </form>

        </div>
    </section>
@endsection
