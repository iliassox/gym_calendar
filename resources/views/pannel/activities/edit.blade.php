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
                <input type="text" name="name" value="{{ $activity->name }}" class="form-control"/>

                <br>
                Type :
                <input type="text" name="type" value="{{ $activity->type }}" class="form-control"/>

                <br>

                <input type="submit" class="btn btn-primary" value="Edit">

            </form>

        </div>
    </section>
@endsection
