@extends('daskboard.Masterboard')
@section('Content')
    <!-- Typography Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Text Elements</h6>
                    <p>This is a standard paragraph</p>
                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                    <p><u>This line of text will render as underlined.</u></p>
                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                    <p><strong>This line rendered as bold text.</strong></p>
                    <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Typography End -->
@endsection
