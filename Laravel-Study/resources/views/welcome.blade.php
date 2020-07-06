@extends('layouts/master')

@section('style')
    <style>
        body {background: darkgray; color: white;}
    </style>
@endsection

@section('content')
    <p>저는 자식 뷰의 'content section' 입니다.</p>
@endsection

@section('script')
    <script>
        alert("저는 자식 뷰의 'script section'입니다.");
    </script>
@endsection
