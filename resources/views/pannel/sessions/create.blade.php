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
                            <option value="{{ $activity->id }}" @if($activity->id == old('$activityID')) selected @endif>{{ $activity->name }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Coach :
                <select name="coachID" class="form-select">
                    @if($coaches)
                        @foreach($coaches as $coach)
                            <option value="{{ $coach->id }}" @if($coach->id == old('coachID')) selected @endif>{{ $coach->name }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Room number :
                <select name="roomID" class="form-select">
                    @if($rooms)
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}" @if($room->id == old('roomID')) selected @endif>{{ $room->id }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Day :
                <select name="day" class="form-control">
                    @foreach($days as $day)
                        <option value="{{ $day }}" @if($day == old('day')) selected @endif>{{ $day }}</option>
                    @endforeach
                </select>

                <br>
                Hour :
                <select name="hour" class="form-control">
                    @foreach($hours as $hour)
                        @if($hour != '12:00')
                        <option value="{{ $hour }}" @if($day == old('hour')) selected @endif>{{ $hour }}</option>
                        @endif
                    @endforeach
                </select>

                @if($errors->any())
                <span class="text-danger" role="alert">
                                        <strong>The day and hour picked are already taken</strong>
                                    </span>
                @endif
                <br>
                <input type="submit" class="btn btn-primary" value="Create">
                <a class="btn btn-light" href="{{ route('sessions.index') }}">Cancel</a>

            </form>

        </div>
    </section>
@endsection
