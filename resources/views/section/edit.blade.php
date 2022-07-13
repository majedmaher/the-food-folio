@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $item)
                <li>
                    {{$item}}
                </li>
                @endforeach
            </ul>
            @endif

            <form action="{{route('section.update',['id'=> $section->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">عنوان القسم </label>
                    <input value="{{$section->title}}" type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">تفاصيل القسم </label>
                    <textarea style="width: 100%;" name="content">{{$section->content}}</textarea>
                </div>

                <div class="form-group">

                    <button class="btn btn-danger" type="submit">تعديل القسم</button>
                </div>

            </form>


        </div>
    </div>
</div>

@endsection