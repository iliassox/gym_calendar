@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Create session</h1>

            <br>

            <form action="{{ route('sessions.store') }}" method="post">
                @csrf

                Activity :
                <select name="activityID" class="form-select">
                    @if($activities)
                        @foreach($activities as $activity)
                            <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Coach :
                <select name="coachID" class="form-select">
                    @if($coaches)
                        @foreach($coaches as $coach)
                            <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Room number :
                <select name="roomID" class="form-select">
                    @if($rooms)
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->id }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Day :
                <select name="day" class="form-control">
                    @foreach($days as $day)
                        <option value="{{ $day }}")>{{ $day }}</option>
                    @endforeach
                </select>

                <br>
                Hour :
                <select name="hour" class="form-control">
                    @foreach($hours as $hour)
                        @if($hour != '12:00')
                        <option value="{{ $hour }}">{{ $hour }}</option>
                        @endif
                    @endforeach
                </select>

                <br>
                <input type="submit" class="btn btn-primary" value="Create">

            </form>

        </div>
    </section>
@endsection
