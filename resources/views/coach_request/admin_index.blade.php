@extends('layouts.side_nav')

@section('side_nav_content' )


    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="display-5" align="center">Requested sessions</h1>
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                            <tr class="row100 head">
                                <th class="cell100 column7">Activity name</th>
                                <th class="cell100 column7">Coach name</th>
                                <th class="cell100 column7">Room name</th>
                                <th class="cell100 column7">Day</th>
                                <th class="cell100 column7">Start</th>
                                <th class="cell100 column7">End</th>
                                <th class="cell100 column7">Actions</th>
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
                                        <td class="cell100 column7">{{ \App\Models\Activity::find($session->activity_id)->name }}</td>
                                        <td class="cell100 column7">{{ \App\Models\Coach::find($session->coach_id)->name }}</td>
                                        <td class="cell100 column7">{{ \App\Models\Room::find($session->room_id)->name }}</td>
                                        <td class="cell100 column7">{{ $session->day }}</td>
                                        <td class="cell100 column7">{{ $session->hour }}</td>
                                        <td class="cell100 column7">{{ $session->end }}</td>
                                        <td class="cell100 column7 text-right">
                                            <form action="{{ route('pendingAccept',$session->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                <input type="submit" class="btn btn-info" data-inline="true"
                                                    value="Accept"/>
                                            </form>
                                            <form action="{{ route('pendingDelete' , $session->id) }}" style="display: inline-block;"
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
