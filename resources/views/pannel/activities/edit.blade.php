@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Edit activity</h1>

            <br>

            <form action="{{ route('activities.update',$activity->id) }}" method="post">
                @method('PUT')
                @csrf

                Name :
                <input type="text" name="name" value="@if(!($errors->any())) {{ $activity->name }} @else {{ old('name') }} @endif" class="form-control @error('name') is-invalid @enderror"/>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>
                Type :
                <input type="text" name="type" value="@if(!($errors->any())) {{ $activity->type }} @else {{ old('type') }} @endif" class="form-control @error('type') is-invalid @enderror"/>

                @error('type')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br>

                <input type="submit" class="btn btn-primary" value="Edit">
                <a class="btn btn-light" href="{{ route('activities.index') }}">Cancel</a>

            </form>

        </div>
    </section>
@endsection
