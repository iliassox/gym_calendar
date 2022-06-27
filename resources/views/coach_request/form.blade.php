@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <h3>Requesting session for the coach : </h3>
                <h1 align="center">{{ $coach->name }}</h1>
            <br>

            <form action="{{ route('SessionValidation') }}" method="post">
                @csrf

                Activity :
                <select name="activityID" class="form-select">
                    @if($activities)
                        @foreach($activities as $activity)
                            <option value="{{ $activity->id }}"
                                    @if($activity->id == old('$activityID')) selected @endif>{{ $activity->name }}</option>
                        @endforeach
                    @endif
                </select>

                <br>

                Room number :
                <select name="roomID" class="form-select">
                    @if($rooms)
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}"
                                    @if($room->id == old('roomID')) selected @endif>{{ $room->name }}</option>
                        @endforeach
                    @endif
                </select>

                <br>
                Day :
                <select name="day" class="form-control">
                    @foreach($dates as $day)
                        <option value="{{ $day }}" @if($day == old('day')) selected @endif>{{ $day }}</option>
                    @endforeach
                </select>

                <br>
                <div class="col-md-3">
                    Starts at :
                    <input name="startHour" type="number" class="col-md-2 @error('startHour') is-invalid @enderror" value="{{ old('startHour') }}"> H <input name="startMin" type="number"
                                                                                                                                                             class="col-md-2 @error('startMin') is-invalid @enderror" value="{{ old('startMin') }}"> mins
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
                </div>

                <br>
                <div class="col-md-3">
                    Ends at :
                    <input name="endHour" type="number" class="col-md-2 @error('time') is-invalid @enderror @error('endHour') is-invalid @enderror" value="{{ old('endHour') }}"> H <input name="endMin" type="number"
                                                                                                                                                                                           class="col-md-2 @error('endMin') is-invalid @enderror" value="{{ old('endMin') }}"> mins
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
                    @error('time')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Create">
                <a class="btn btn-light" href="/coach/sessions">Cancel</a>

            </form>

        </div>
    </section>
@endsection
