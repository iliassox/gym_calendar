@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <br>
                <h3 >Requested sessions for :</h3>
                <br>
                <h1 align="center">{{ $coach->name }} <div class="float-end pe-5"> <a class="lead" href="{{ route('SessionStop') }}">logout</a></div></h1>
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                            <tr class="row100 head">
                                <th class="cell100 column6">Activity name</th>
                                <th class="cell100 column6">Room name</th>
                                <th class="cell100 column6">Day</th>
                                <th class="cell100 column6">Start</th>
                                <th class="cell100 column6">End</th>
                                <th class="cell100 column6">Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                            @if($sessions)
                                @foreach($sessions as $session)

                                    <tr class="row100 body">
                                        <td class="cell100 column6">{{ \App\Models\Activity::find($session->activity_id)->name }}</td>
                                        <td class="cell100 column6">{{ \App\Models\Room::find($session->room_id)->name }}</td>
                                        <td class="cell100 column6">{{ $session->day }}</td>
                                        <td class="cell100 column6">{{ $session->hour }}</td>
                                        <td class="cell100 column6">{{ $session->end }}</td>
                                        <td class="cell100 column6 text-right">
                                            <form action="{{ route('SessionDestroy' ,['sessionId' => $session->id]) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" data-inline="true" value="delete"
                                                       class="btn btn-danger">
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            <tr class="row100 body">
                                <td class="cell100 column6"><a class="btn btn-success"
                                                               href="{{ route('Form') }}">New Request</a></td>
                                <td class="cell100 column6"></td>
                                <td class="cell100 column6"></td>
                                <td class="cell100 column6"></td>
                                <td class="cell100 column6"></td>
                                <td class="cell100 column6"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
