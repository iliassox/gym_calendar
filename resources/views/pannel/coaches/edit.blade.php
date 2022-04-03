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
                <input type="text" name="email" value="{{ $coach->email }}" class="form-control"/>

                <br>
                Phone :
                <input type="text" name="phone" value="{{ $coach->phone }}" class="form-control"/>

                <br>
                Speciality :
                <input type="text" name="speciality" value="{{ $coach->speciality }}" class="form-control"/>

                <br>
                Experience :
                <input type="text" name="experience" value="{{ $coach->experience }}" class="form-control"/>

                <br>

                <input type="submit" class="btn btn-primary" value="Edit">

            </form>

        </div>
    </section>
@endsection
