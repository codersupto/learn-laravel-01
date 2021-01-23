@extends('layouts.master')

@section('content')
    <form action="{{ route('photos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>
@endsection
