@extends('layouts.app')


@php
$count = 0;
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                <h3> الطبقات </h3>
                <form action="{{route('layer.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleFormControlInput1">صورة الطبقة </label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">

                        <button class="btn btn-danger" type="submit">اضافة طبقة</button>
                    </div>

                </form>
            </div>
            <br>


            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">صورة الشريحة</th>
                        <th scope="col">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($layers as $layer)
                    <tr>
                        <th scope="row">{{++$count}}</th>
                        <td><img width="150px" src="{{URL::asset($layer->image)}}" alt="{{$layer->image}}"></td>
                        <td>

                            <a href="{{route('layer.edit',['id'=> $layer->id])}}"> <i class="fas fa-2x fa-edit"></i> </a>&nbsp;&nbsp;
                            <a class="text-danger" href="{{route('layer.destroy',['id'=> $layer->id])}}"> <i class="fas  fa-2x fa-trash-alt"></i> </a>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>

@endsection