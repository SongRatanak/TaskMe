@extends('daskboard.Masterboard')
@section('Content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <a href="{{route('TakeNote.create')}}" class="btn btn-outline-primary float-end">Create Note<i class="fa fa-plus ms-2"></i></a>
            <div class="col-12">
                <div class="row p-3 ">
                    @foreach($textnote as $textnote)
                        <div class="card  border-primary  m-2 float-start" style="max-width: 20rem;">
                            <div class="row">
                                <div class="col-md-11 col-sm-11">
                                    <a  class="btn btn-sm float-end" href="{{route('TakeNote.edit',$textnote->id)}}"><i class="fa fa-edit fa-3m "></i></a>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <form action="{{route('TakeNote.destroy',$textnote->id)}}" method="POST" >
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-sm float-end"><i class="fa fa-times fa-6m "></i></button>
                                    </form>
                                </div>
                            </div>

                            <h5 class="card-head text-primary m-0">{{$textnote -> title}}</h5>
                            <hr class="m-2">
                            <div class="card-body p-2">
                                <p class="card-text element text-primary">{{$textnote->description}}</p>
                            </div>
                            <a  href="{{route('TakeNote.show',$textnote->id)}}" class="btn btn-success m-2">Read More..</a>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->

    <style>
        .element {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }

    </style>

@endsection
