@extends('daskboard.Masterboard')
@section('Content')
    <!-- Widgets Start -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-12">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">To Do List</h6>
                        <a href="">Show All</a>
                    </div>
                    <form action="{{route('ImportantList.store')}}" method='POST'>
                        @csrf
                        <div class="d-flex mb-2">

                            <input class="form-control bg-transparent" name="task"  type="text" placeholder="Enter task">
                            <button type="submit" class="btn btn-primary ms-2">Add</button>
                        </div>
                    </form>
                    @foreach($importantList as $importantList)
                        <div class="d-flex align-items-center border-bottom py-3">
                            <form method="POST" action="{{ route('imporcomplete.update',$importantList->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" class="form-check-input m-0" onclick="if(this.checked){this.form.submit()}">
                            </form>
                            <div class="w-100 ms-2">
                                <div class="d-flex w-80 align-items-center justify-content-between">
                                    <form method="POST" action="{{route('ImportantList.update',$importantList->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <div type="submit" class="myText"> {{$importantList -> task }} </div>
                                        <script>
                                            $(document).on('click', '.myText', function() {
                                                var that = $(this);
                                                var text = that.text();
                                                that.wrap('<div id="wrp" />');
                                                $('#wrp').html('<input type="text" name="task" value="' + text + '" />');
                                            });
                                        </script>
                                    </form>
                                </div>
                            </div>

                            <form action="{{route('ImportantList.destroy',$importantList->id)}}" method="POST" >
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

    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-12">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Task Completed</h6>
                    </div>
                    @foreach($listcompleted as $listcompleted)
                        <div class="d-flex align-items-center border-bottom py-2 bg-teal-200">
                            <form method="POST" action="{{ route('uncomplete.update',$listcompleted->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" checked class="form-check-input m-0" onclick="if(this.checked==false){this.form.submit()}">
                            </form>
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between ">
                                    <del>{{$listcompleted -> task }}</del>
                                </div>
                            </div>
                            <form action="{{route('Homelist.destroy',$listcompleted->id)}}" method="POST" >
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

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
            myInput.focus()
        })
    </script>


@endsection
