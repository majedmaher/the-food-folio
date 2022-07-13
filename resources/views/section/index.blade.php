@extends('layouts.app')


@php
$count = 0;
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                <h3> الأقسام </h3>
                <a href="{{route('section.create')}}">اضافة قسم</a>
            </div>
            <br>


            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان القسم</th>
                        <th scope="col">محتوى القسم</th>
                        <th scope="col">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $section)
                    <tr>
                        <th scope="row">{{++$count}}</th>
                        <td>{{$section->title}}</td>
                        <td>{{$section->content }}</td>
                        <td>
                            <a href="{{route('section.edit',['id'=> $section->id])}}"> <i class="fas fa-2x fa-edit"></i> </a>&nbsp;&nbsp;
                            <a class="text-danger" href="{{route('section.destroy',['id'=> $section->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>

@endsection