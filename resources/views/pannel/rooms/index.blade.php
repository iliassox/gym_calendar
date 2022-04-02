@extends('layouts.side_nav')

@section('side_nav_content' )


    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <h1 class="display-5" align="center">All rooms</h1>
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                            <tr class="row100 head">
                                <th class="cell100 column4">Room number</th>
                                <th class="cell100 column4">Room name</th>
                                <th class="cell100 column4">Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                            @if($rooms)
                                @foreach($rooms as $room)

                                    <tr class="row100 body">
                                        <td class="cell100 column4">{{ $room->id }}</td>
                                        <td class="cell100 column4">{{ $room->capacity }}</td>
                                        <td class="cell100 column4 text-right">
                                            <form action="{{ route('rooms.destroy' , $room->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" data-inline="true"
                                                   href="{{ route('rooms.edit', $room->id) }}">edit</a>
                                                <input type="submit" data-inline="true" value="delete"
                                                       class="btn btn-danger">
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            <tr class="row100 body">
                                <td class="cell100 column4"><a class="btn btn-success"
                                                               href="{{ route('rooms.create') }}">Add new</a></td>
                                <td class="cell100 column4"></td>
                                <td class="cell100 column4"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
