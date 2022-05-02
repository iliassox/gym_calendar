@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Create room</h1>

            <br>

            <form action="{{ route('rooms.store') }}" method="post">
                @csrf

                Number :
                <input type="text" name="id" value="{{ old('id') }}" class="form-control @error('id') is-invalid @enderror"/>

                @error('id')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror


                <br>
                Capacity :
                <input type="text" name="capacity" value="{{ old('capacity') }}" class="form-control @error('capacity') is-invalid @enderror"/>

                @error('capacity')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <br>

                <input type="submit" class="btn btn-primary" value="Create">
                <a class="btn btn-light" href="{{ route('rooms.index') }}">Cancel</a>

            </form>

        </div>
    </section>
@endsection
