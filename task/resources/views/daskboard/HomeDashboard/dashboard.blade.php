@extends('daskboard.Masterboard')
@section('Content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-3">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-3">
                <i class="fa fa-list-check fa-3x text-primary"></i>
                <div class="ms-2">
                    <h6 class="mb-2">Home Task</h6>
                    <p class="mb-0"> Uncompleted  {{ $TodolistNotComplete}}</p>
                    <p class="mb-0"> Complete  {{ $TodolistCount}}</p>
{{--                    <p class="mb-0"> Un Complete  {{ $HomeunComplete}}</p>--}}
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-3">
                <i class="fa fa-user fa-3x text-primary"></i>
                <div class="ms-2">
                    <h6 class="mb-2">Personal Task</h6>
                    <p class="mb-0"> UnComplete  {{ $PersonalNotComplete}}</p>
                    <p class="mb-0"> Task Complete  {{ $PersonalCount}}</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-3">
                <i class="fa fa-star fa-3x text-primary"></i>
                <div class="ms-2">
                    <h6 class="mb-2">Important Task</h6>
                    <p class="mb-0"> UnComplete  {{ $ImportantNotComplete}}</p>
                    <p class="mb-0"> Task Complete  {{ $ImportantCount}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">To Do List</h6>
                    <a href="{{route('Homelist.index')}}">Show All</a>
                </div>
                @foreach($TodolisComplet as $TodolisComplet)
                    <div class="d-flex align-items-center border-bottom py-2 bg-teal-200">
                        <form method="POST" action="{{ route('uncomplete.update',$TodolisComplet->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" checked class="form-check-input m-0" onclick="if(this.checked==false){this.form.submit()}">
                        </form>
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between ">
                                <del>{{$TodolisComplet -> task }}</del>
                            </div>
                        </div>
                        <form action="{{route('ImportantList.destroy',$TodolisComplet->id)}}" method="POST" >
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
{{--        Personal--}}
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Personal List</h6>
                    <a href="{{route('PersonalList.index')}}">Show All</a>
                </div>

                    @foreach($PersonalComplete as $PersonalComplete)
                        <div class="d-flex align-items-center border-bottom py-2 bg-teal-200">
                            <form method="POST" action="{{ route('uncomplete.update',$PersonalComplete->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" checked class="form-check-input m-0" onclick="if(this.checked==false){this.form.submit()}">
                            </form>
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between ">
                                    <del>{{$PersonalComplete -> task }}</del>
                                </div>
                            </div>
                            <form action="{{route('ImportantList.destroy',$PersonalComplete->id)}}" method="POST" >
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </form>
                        </div>
                    @endforeach

            </div>
        </div>


{{--        Important--}}
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Important List</h6>
                    <a href="{{route('ImportantList.index')}}">Show All</a>
                </div>
                @foreach($ImportantComplete as $ImportantComplete)
                    <div class="d-flex align-items-center border-bottom py-2 bg-teal-200">
                        <form method="POST" action="{{ route('uncomplete.update',$ImportantComplete->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" checked class="form-check-input m-0" onclick="if(this.checked==false){this.form.submit()}">
                        </form>
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between ">
                                <del>{{$ImportantComplete -> task }}</del>
                            </div>
                        </div>
                        <form action="{{route('ImportantList.destroy',$ImportantComplete->id)}}" method="POST" >
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </form>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<!-- Widgets End -->










@endsection
