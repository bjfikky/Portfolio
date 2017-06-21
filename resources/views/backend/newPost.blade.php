@extends('backend.layout.app')

@section('page title', 'Create Post')

@section('content')

    <div class="container">
        <h4><a href="/dashboard/posts">ALL POSTS</a> &rightarrow; NEW POST</h4>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <form action="" method="POST">

                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control">
                    {{--<button id="remove-img" class="btn btn-info">Remove</button>--}}
                </div>

                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="body" id="newPost" cols="60" rows="35" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="form-control btn-primary" value="POST">
                </div>
            </form>

        </div>
    </div>

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'#newPost',
            menubar: false,
            plugins: 'image, link, spellchecker, lists',
            toolbar: 'styleselect | bold italic underline | undo redo | fontsizeselect | link image media | spellchecker' +
            ' | numlist bullist | blockquote'

        });
    </script>



@endsection