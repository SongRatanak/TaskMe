@extends('daskboard.Masterboard')
@section('Content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-2">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-3">
                <i class="fa fa-list-check fa-3x text-primary"></i>

                <div class="ms-2">
                    <h6 class="mb-2">Home Task</h6>
                    <p class="mb-0"> Task Complete  {{ $TodolistCount}}</p>
{{--                    <p class="mb-0"> Un Complete  {{ $HomeunComplete}}</p>--}}
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Today Revenue</p>
                    <p class="mb-0"> Task Complete  {{ $PersonalCount}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-3">
                <i class="fa fa-list fa-3x text-primary"></i>
                <div class="ms-2">
                    <h6 class="mb-2">Important Completed</h6>
                    <p class="mb-0"> Task {{ $ImportantCount}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->


<div class="div">
{{--    <h2>{{$Homecomplete}}</h2>--}}
</div>






@endsection
