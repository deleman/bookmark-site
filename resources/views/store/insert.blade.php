@extends('store.master')

@push('css')
    <style>

        body{
            background-color: currentColor;
        }
        .radius{
            border: 1px solid lightblue;
            border-radius: 15px;
            box-shadow: 2px 3px 3px cyan;
        }
        .custome-bg{
            background-color: darkslategrey !important;
        }

    </style>
@endpush

@section('content')
    <article class="row">
        <div class="col-sm-5 m-auto">
                @include('store.error')
        </div>
    </article>
    <article class="row ">

        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto text-light custome-bg mt-5 radius pt-3">
            <h3 class="m-auto text-center text-warning ">Link Insert</h3>
            <form class="p-1 pt-1 pb-4" action="{{route('store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputAddress">Link Header</label>
                    <input type="text" name="header" class="form-control" id="inputAddress" placeholder="header ...">
                </div>

                <div class="form-group">
                    <label for="inputAddress">Link Url</label>
                    <input type="text" name="url" class="form-control" id="inputAddress" placeholder="url ...">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Link Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="description ..."></textarea>
                </div>

                <button type="submit" class="btn btn-block btn-danger">save</button>
            </form>
        </div>
    </article>


@endsection

