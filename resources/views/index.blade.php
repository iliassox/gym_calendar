@extends('layouts.app')

@section('content')

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
                <th class="text-uppercase">09:00am</th>
                <th class="text-uppercase">10:00am</th>
                <th class="text-uppercase">11:00am</th>
                <th class="text-uppercase">12:00pm</th>
                <th class="text-uppercase">01:00pm</th>
                <th class="text-uppercase">02:00pm</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="align-middle ">Monday</td>
                <td>
                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                    <div class="margin-10px-top font-size14">9:00-10:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
                <td>
                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                    <div class="margin-10px-top font-size14">9:00-10:00</div>
                    <div class="font-size13 text-light-gray">Marta Healy</div>
                </td>

                <td>
                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                    <div class="margin-10px-top font-size14">9:00-10:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
                <td>
                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Dance</span>
                    <div class="margin-10px-top font-size14">9:00-10:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
                <td>
                    <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>
                    <div class="margin-10px-top font-size14">9:00-10:00</div>
                    <div class="font-size13 text-light-gray">Kate Alley</div>
                </td>
                <td>
                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                    <div class="margin-10px-top font-size14">9:00-10:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
            </tr>

            <tr>
                <td class="align-middle">Tuesday</td>
                <td>
                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                    <div class="margin-10px-top font-size14"></div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
                <td class="bg-light-gray">

                </td>
                <td>
                    <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>
                    <div class="margin-10px-top font-size14"></div>
                    <div class="font-size13 text-light-gray">Kate Alley</div>
                </td>
                <td>
                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                    <div class="margin-10px-top font-size14"></div>
                    <div class="font-size13 text-light-gray">Marta Healy</div>
                </td>
                <td>
                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                    <div class="margin-10px-top font-size14"></div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td class="bg-light-gray">

                </td>
            </tr>

            <tr>
                <td class="align-middle">Wednesday</td>
                <td>
                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
            </tr>

            <tr>
                <td class="align-middle">Thursday</td>
                <td class="bg-light-gray">

                </td>
                <td>
                    <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>
                    <div class="margin-10px-top font-size14">12:00-1:00</div>
                    <div class="font-size13 text-light-gray">Kate Alley</div>
                </td>
                <td>
                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Dance</span>
                    <div class="margin-10px-top font-size14">12:00-1:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
                <td>
                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                    <div class="margin-10px-top font-size14">12:00-1:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
                <td class="bg-light-gray">

                </td>
                <td>
                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                    <div class="margin-10px-top font-size14">12:00-1:00</div>
                    <div class="font-size13 text-light-gray">Marta Healy</div>
                </td>
            </tr>

            <tr>
                <td class="align-middle">Friday</td>
                <td>
                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
                <td class="bg-light-gray">

                </td>
                <td>
                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">Marta Healy</div>
                </td>
                <td>
                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
            </tr>

            <tr>
                <td class="align-middle">Saturday</td>
                <td>
                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
                <td class="bg-light-gray">

                </td>
                <td>
                    <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">James Smith</div>
                </td>
                <td>
                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">Marta Healy</div>
                </td>
                <td>
                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                    <div class="margin-10px-top font-size14">1:00-2:00</div>
                    <div class="font-size13 text-light-gray">Ivana Wong</div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
