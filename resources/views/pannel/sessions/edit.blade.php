@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <h1>Edit session</h1>

            <br>

            <form action="{{ route('sessions.update',$session->id) }}" method="post">
                @method('PUT')
                @csrf

                Activity :
                <select name="activityID" class="form-select">
                    @if($activities)
                        @foreach($activities as $activity)
                            <option value="{{ $activity->id }}" @if($activity->id == $session->activity_id) selected @endif>{{ $activity->name }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Coach :
                <select name="coachID" class="form-select">
                    @if($coaches)
                        @foreach($coaches as $coach)
                            <option value="{{ $coach->id }}" @if($coach->id == $session->coach_id) selected @endif>{{ $coach->name }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Room number :
                <select name="roomID" class="form-select">
                    @if($rooms)
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}" @if($room->id == $session->room_id) selected @endif>{{ $room->id }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Day :
                <select name="day" class="form-control">
                    @foreach($days as $day)
                    <option value="{{ $day }}" @if($session->day == $day) selected @endif>{{ $day }}</option>
                    @endforeach
                </select>

                <br>
                Hour :
                <select name="hour" class="form-control">
                    @foreach($hours as $hour)
                        <option value="{{ $hour }}" @if($session->$hour == $hour) selected @endif>{{ $hour }}</option>
                    @endforeach
                </select>

                <br>
                <input type="submit" class="btn btn-primary" value="Edit">

            </form>

        </div>
    </section>
@endsection
