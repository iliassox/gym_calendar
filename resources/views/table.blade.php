<div class="container">
    <div class="timetable-img text-center">
        <img src="img/content/timetable.png" alt="">
    </div>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
            <tr class="bg-light-gray">
                <th class="text-uppercase">Time
                </th>
                @foreach($hours as $hour)
                    @if($hour != '17:00')
                    <th class="text-uppercase">{{ $hour }} - {{ next($hours) }}</th>
                    @else
                        <th class="text-uppercase">17:00 - 18:30</th>
                    @endif
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($days as $day)
                <tr>
                    <td class="align-middle ">{{ $day }}</td>
                    @foreach($hours as $hour)
                        @if(isset($finalArray[$day][$hour]))
                            <td class="sizing">
                                <span
                                    class="{{ $colors[($finalArray[$day][$hour]['number']) % 6] }} padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $finalArray[$day][$hour]['activity'] }}</span>
                                <div class="margin-10px-top font-size14">{{ $finalArray[$day][$hour]['coach'] }}</div>
                                <div class="font-size13 text-light-gray">starts at {{ $finalArray[$day][$hour]['hour'] }}</div>
                            </td>
                        @endif
                        @if(empty($finalArray[$day][$hour]))
                            <td class="sizing">

                            </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
