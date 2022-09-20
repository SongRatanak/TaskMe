@extends('daskboard.Masterboard')
@section('Content')
<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-12">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">To Do List</h6>
                    <a href="">Show All</a>
                </div>
                <form action="{{route('Homelist.store')}}" method='POST'>
                    @csrf
                <div class="d-flex mb-2">

                       <input class="form-control bg-transparent" name="task"  type="text" placeholder="Enter task">
                       <input type="hidden" name="type" value="Home">
                       <button type="submit" class="btn btn-primary ms-2">Add</button>
                </div>
                </form>
                @foreach($homelist as $homelist)
                <div class="d-flex align-items-center border-bottom py-2">
                    <input class="form-check-input m-0" value="1" name="completed" type="checkbox" {{$homelist->complete ? 'checked=checked' : ''}}>
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span>{{$homelist -> task }}</span>
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Widgets End -->


<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-12">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Task Completed</h6>
                </div>
                @foreach($listcompleted as $listcompleted)
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>{{$listcompleted -> task }}</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Widgets End -->
@endsection
