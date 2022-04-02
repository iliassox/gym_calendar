@extends('layouts.side_nav')

@section('side_nav_content' )


    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <h1 class="display-5" align="center">All sessions</h1>
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                            <tr class="row100 head">
                                <th class="cell100 column6">Activity name</th>
                                <th class="cell100 column6">Coach name</th>
                                <th class="cell100 column6">Room number</th>
                                <th class="cell100 column6">Day</th>
                                <th class="cell100 column6">Hour</th>
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
                                        <td class="cell100 column6">{{ \App\Models\Coach::find($session->coach_id)->name }}</td>
                                        <td class="cell100 column6">{{ $session->room_id }}</td>
                                        <td class="cell100 column6">{{ $session->day }}</td>
                                        <td class="cell100 column6">{{ $session->hour }}</td>
                                        <td class="cell100 column6 text-right">
                                            <form action="{{ route('sessions.destroy' , $session->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" data-inline="true"
                                                   href="{{ route('sessions.edit', $session) }}">edit</a>
                                                <input type="submit" data-inline="true" value="delete"
                                                       class="btn btn-danger">
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            <tr class="row100 body">
                                <td class="cell100 column6"><a class="btn btn-success"
                                                               href="{{ route('sessions.create') }}">Add new</a></td>
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
