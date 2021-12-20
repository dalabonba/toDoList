@extends('layouts.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <td>標題</td>
                <td>內容</td>
                <td>備註</td>
                <td>功能</td>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{$row->title}}</td>
                <td>{{$row->content}}</td>
                <td>{{$row->remark}}</td>
                <td><button type="button" class="btn btn-outline-success">新增</button>
                    <button type="button" class="btn btn-outline-danger" onclick="deleteData({{$row->id}})">刪除</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        <script>
            function deleteData(id) {
                window.location.href="{{route("deleteData")}}"+"?id="+id;
            }
        </script>
    </div>
@endsection
