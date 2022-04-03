@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Create coach</h1>

            <br>

            <form action="{{ route('coaches.store') }}" method="post">
                @csrf

                Name :
                <input type="text" name="name" value="" class="form-control"/>

                <br>
                email :
                <input type="text" name="email" value="" class="form-control"/>

                <br>
                Phone :
                <input type="text" name="phone" value="" class="form-control"/>

                <br>
                Speciality :
                <input type="text" name="speciality" value="" class="form-control"/>

                <br>
                Experience :
                <input type="text" name="experience" value="" class="form-control"/>

                <br>

                <input type="submit" class="btn btn-primary" value="Create">

            </form>

        </div>
    </section>
@endsection
