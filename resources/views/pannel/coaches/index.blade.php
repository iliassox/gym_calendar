@extends('layouts.side_nav')

@section('side_nav_content' )



    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <h1 class="display-5" align="center">All coaches</h1>
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                            <tr class="row100 head">
                                <th class="cell100 column7">Coach name</th>
                                <th class="cell100 column7">Email</th>
                                <th class="cell100 column7">Phone</th>
                                <th class="cell100 column7">Speciality</th>
                                <th class="cell100 column7">Experience</th>
                                <th class="cell100 column7">Picture</th>
                                <th class="cell100 column7">Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                            @if($coaches)
                                @foreach($coaches as $coach)

                                    <tr class="row100 body">
                                        <td class="cell100 column7">{{ $coach->name }}</td>
                                        <td class="cell100 column7">{{ $coach->email }}</td>
                                        <td class="cell100 column7">{{ $coach->phone }}</td>
                                        <td class="cell100 column7">{{ $coach->speciality }}</td>
                                        <td class="cell100 column7">{{ $coach->experience }}</td>
                                        <td class="cell100 column7">{{ $coach->picture }}</td>
                                        <td class="cell100 column7 text-right">
                                            <form action="{{ route('activities.destroy' , $coach->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" data-inline="true"
                                                   href="{{ route('coaches.edit', $coach->id) }}">edit</a>
                                                <input type="submit" data-inline="true" value="delete"
                                                       class="btn btn-danger">
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            <tr class="row100 body">
                                <td class="cell100 column7"><a class="btn btn-success"
                                                               href="{{ route('coaches.create') }}">Add new</a></td>
                                <td class="cell100 column7"></td>
                                <td class="cell100 column7"></td>
                                <td class="cell100 column7"></td>
                                <td class="cell100 column7"></td>
                                <td class="cell100 column7"></td>
                                <td class="cell100 column7"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
