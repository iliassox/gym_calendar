@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Create room</h1>

            <br>

            <form action="{{ route('rooms.store') }}" method="post">
                @csrf

                Number :
                <input type="text" name="id" value="" class="form-control"/>


                <br>
                Capacity :
                <input type="text" name="capacity" value="" class="form-control"/>

                <br>

                <input type="submit" class="btn btn-primary" value="Create">

            </form>

        </div>
    </section>
@endsection
