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
                    @foreach($dates as $day)
                    <option value="{{ $day }}" @if($session->day == $day) selected @endif>{{ $day }}</option>
                    @endforeach
                </select>

                <br>
                <div class="col-md-3">
                    Starts at :
                    <input name="startHour" type="number" class="col-md-2 @error('time') is-invalid @enderror @error('startHour') is-invalid @enderror" value="{{ explode(":",$session->hour)[0] }}"> H <input name="startMin" type="number"
                                                                                                                                                              class="col-md-2 @error('startMin') is-invalid @enderror" value="{{ explode(":",$session->hour)[1] }}"> mins
                    @error('startHour')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    @error('startMin')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    @error('time')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <br>
                <div class="col-md-3">
                    Ends at :
                    <input name="endHour" type="number" class="col-md-2 @error('endHour') is-invalid @enderror" value="{{ explode(":",$session->end)[0] }}"> H <input name="endMin" type="number"
                                                                                                                                                       class="col-md-2 @error('endMin') is-invalid @enderror" value="{{ explode(":",$session->end)[1] }}"> mins
                    @error('endHour')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    @error('endMin')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Edit">
                <a class="btn btn-light" href="{{ route('sessions.index') }}">Cancel</a>

            </form>

        </div>
    </section>
@endsection
