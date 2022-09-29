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
                            <i href="{{route('TakeNote.edit',$textnote->id)}}">
                                <form action="{{route('TakeNote.destroy',$textnote->id)}}" method="POST" >
                                    @csrf
                                    @method('Delete')
                                <button type="submit" class="btn btn-sm float-end"><i class="fa fa-times fa-4m "></i></button>
                                </form>
                            <div class="card-header text-primary">{{$textnote -> title}}</div>
                            <div class="card-body ">
                                <p class="card-text element text-primary">{{$textnote->description}}</p>
                            </div>
                            </i>

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
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }

    </style>

@endsection
