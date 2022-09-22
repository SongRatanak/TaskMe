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
                       <button type="submit" class="btn btn-primary ms-2">Add</button>
                </div>
                </form>
                @foreach($homelist as $homelist)
                <div class="d-flex align-items-center border-bottom py-1">
                    <form method="POST" action="{{ route('complete.update',$homelist->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="checkbox" class="form-check-input m-0" onclick="if(this.checked){this.form.submit()}">
                    </form>
                        <div class="w-100 ms-2">
                        <div class="d-flex w-80 align-items-center justify-content-between">
                            <span>{{$homelist -> task }}</span>
                        </div>
                    </div>

                    <button type="submit"  class="btn btn-square btn-outline-success m-2"><i class="fa fa-check"></i></button>


                    <button type="button" class="btn btn-square btn-outline-warning m-2"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button>



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
                        <form method="POST" action="{{ route('uncomplete.update',$listcompleted->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" checked class="form-check-input m-0" onclick="if(this.checked==false){this.form.submit()}">
                        </form>
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
    <script>
        $('#fluency').change(function()
        {
            if(this.checked == true)
            {
                $('#myform').submit();
            }
        });
    </script>
@endsection
