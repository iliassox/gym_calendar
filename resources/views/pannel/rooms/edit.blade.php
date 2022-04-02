@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Room {{ $room->id }}</h1>

            <br>

            <form action="{{ route('rooms.update',$room->id) }}" method="post">
                @method('PUT')
                @csrf

                Capacity :
                <input type="text" name="capacity" value="{{ $room->capacity }}" class="form-control"/>

                <br>

                <input type="submit" class="btn btn-primary" value="Edit">

            </form>

        </div>
    </section>
@endsection
