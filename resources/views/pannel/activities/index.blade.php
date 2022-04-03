@extends('layouts.side_nav')

@section('side_nav_content' )


            <div class="limiter">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <h1 class="display-5" align="center">All activities</h1>
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-head">
                                <table>
                                    <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column3">Activity name</th>
                                        <th class="cell100 column3">Type of activity</th>
                                        <th class="cell100 column3">Actions</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>

                            <div class="table100-body js-pscroll">
                                <table>
                                    <tbody>
                                    @if($activities)
                                    @foreach($activities as $activity)

                                    <tr class="row100 body">
                                    <td class="cell100 column3">{{ $activity->name }}</td>
                                    <td class="cell100 column3">{{ $activity->type }}</td>
                                    <td class="cell100 column3 text-right">
                                        <form action="{{ route('activities.destroy' , $activity->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-info" data-inline="true" href="{{ route('activities.edit', $activity->id) }}">edit</a>
                                            <input type="submit" data-inline="true" value="delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                    </tr>

                                    @endforeach
                                    @endif
                                    <tr class="row100 body">
                                        <td class="cell100 column3"><a class="btn btn-success" href="{{ route('activities.create') }}" >Add new</a></td>
                                        <td class="cell100 column3"></td>
                                        <td class="cell100 column3"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
