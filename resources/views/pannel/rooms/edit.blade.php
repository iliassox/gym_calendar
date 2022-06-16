@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Room : {{ $room->name }}</h1>

            <br>

            <form action="{{ route('rooms.update',$room->id) }}" method="post">
                @method('PUT')
                @csrf

                Capacity :
                <input type="text" name="capacity" value="@if(!($errors->any())) {{ $room->capacity }} @else {{ old('capacity') }} @endif" class="form-control @error('capacity') is-invalid @enderror"/>

                @error('capacity')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <br>

                <input type="submit" class="btn btn-primary" value="Edit">
                <a class="btn btn-light" href="{{ route('rooms.index') }}">Cancel</a>

            </form>

        </div>
    </section>
@endsection
