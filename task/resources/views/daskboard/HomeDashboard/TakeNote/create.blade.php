@extends('daskboard.Masterboard')
@section('Content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Floating Label</h6>
                    <form action="{{route('TakeNote.store')}}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Title</label>
                        </div>
                        <div class="form-floating">
                                    <textarea name="description" class="form-control" placeholder="Leave a comment here"
                                              id="floatingTextarea" style="height: 150px;" required></textarea>
                            <label for="floatingTextarea">Note</label>
                        </div>
                        <button type="submit" class="btn btn-primary m-4 float-end">Save</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <!-- Form End -->
@endsection
