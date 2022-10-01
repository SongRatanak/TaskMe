@extends('daskboard.Masterboard')
@section('Content')
    <!-- Typography Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">

                <a href="{{route('TakeNote.edit',$TakeNote->id)}}" type="button" class="btn btn-square btn-outline-success m-2 float-end"><i class="fa fa-edit"></i></a>
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">{{$TakeNote -> title}}</h6>
                    <p>{{$TakeNote -> description}}</p>

                </div>

            </div>
        </div>
    </div>

    <!-- Typography End -->
@endsection
