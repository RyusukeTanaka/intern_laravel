@extends('layouts.layout')
@section('content')
    <form class="create-user" action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="list-header">
            <div class="list-header-left">
                <h2>create a user</h2>
            </div>
            <div class="list-header-right">
                <a class="btn-send back-link" href="{{ route('user.index') }}">Back</a>
            </div>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="email">
        </div>
        <div class="password-form">
            <div class="mb-3 password-left">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="password">
            </div>
            <div class="mb-3 password-right">
                <label for="formGroupExampleInput2" class="form-label">Password confirm</label>
                <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Address</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="address">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Facebook link</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="https://exampl.com" name="facebook_link">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">YouTube link</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="https://exampl.com" name="youtube_link">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="formGroupExampleInput2" name="description"></textarea>
        </div>
        <div class="form-bottom">
            <button class="btn btn-save">Save</button>
            <button class="btn btn-reset" type="reset">Reset</button>
        </div>
    </form>

@endsection
