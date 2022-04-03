@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Create activity</h1>

            <br>

            <form action="{{ route('activities.store') }}" method="post">
                @csrf

                Name :
                <input type="text" name="name" value="" class="form-control"/>

                <br>
                Type :
                <input type="text" name="type" value="" class="form-control"/>

                <br>

                <input type="submit" class="btn btn-primary" value="Create">

            </form>

        </div>
    </section>
@endsection
