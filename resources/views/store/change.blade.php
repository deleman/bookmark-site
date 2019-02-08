@extends('store.master')

@push('css')
    <style>

        body{
            background-color: gray;
        }
        .radius{
            border: 1px solid lightblue;
            border-radius: 15px;
            box-shadow: 2px 3px 3px cyan;
        }

    </style>
@endpush

@section('content')
    <article class="row">
        <div class="col-sm-5 m-auto">
            @if(session()->has('Inserted'))
                <div class="alert alert-success" role="alert">
                    {{session('Inserted')}}
                </div>
            @endif

            @if(session()->has('errorInserted'))
                <div class="alert alert-danger" role="alert">
                        {{session('errorInserted')}}
                </div>
            @endif
        </div>
    </article>
    <article class="row ">

        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto bg-info mt-5 radius pt-3">
            <h3 class="m-auto text-center text-dark ">Link update</h3>
            <form class="p-1 pt-1 pb-4" action="{{route('update')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputAddress">Link Header</label>
                    <input type="text" name="header" class="form-control" id="inputAddress" value="{{$data->header}}" placeholder="header ...">
                </div>

                <div class="form-group">
                    <label for="inputAddress">Link Url</label>
                    <input type="text" name="url" class="form-control" id="inputAddress" value="{{$data->link}}" placeholder="url ...">
                    <input type="hidden" name="url_hidden" class="form-control" id="inputAddress" value="{{$data->link}}" placeholder="url ...">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Link Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="description ...">{{$data->description}}</textarea>
                </div>

                <button type="submit" class="btn btn-block btn-danger">save</button>
            </form>
        </div>
    </article>

    <a href="{{route('store')}}">click </a>

@endsection

