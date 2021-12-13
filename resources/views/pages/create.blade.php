@extends('layouts.master')

@section('content')
    <form action="{{route('storeCreateData')}}" method="post">
        @csrf
        <label>標題</label>
        <input name="title">
        <label>內容</label>
        <input name="content">
        <label>備註</label>
        <input name="remark">
        <button type="submit">submit</button>
    </form>
@endsection
