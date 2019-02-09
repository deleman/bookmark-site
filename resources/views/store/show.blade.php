@extends('store.master')
    @push('css')
        <style>
                .radius{
                    border: 1px solid lightblue;
                    border-radius: 15px;
                    box-shadow: 2px 3px 3px cyan;
                    background-color: darkslategrey;
                    min-height: 550px;

                }
                .slice-radius{
                    border: 1px solid lightblue;
                    border-radius: 15px;
                    box-shadow: 2px 3px 3px gray;
                }
                .bottom{
                    position: absolute;
                    bottom:0px;
                    width:100%;
                    margin-right: -15px;
                    margin-left: -15px;
                    border-radius: 0px 0px 12px 12px;
                }
                .relative{
                    position: relative;
                }
        </style>
        @endpush

    @section('content')
    <article class="row">
            <div class="col-sm-5 m-auto">
                 @include('store.error')
            </div>
        </article>

    <section class="radius mt-1 container-fluid relative">
        @include('store.header')
        <article class="row" style="margin-bottom:100px;">
            <div class=" col-sm-12 col-lg-10 col-md-12 m-auto px-1  pt-2">
                @foreach ($all as $item)
                    <div class="bg-dark text-white mx-auto my-2 slice-radius px-3 py-1 row">
                        <h3 class="col-md-8 col-lg-9 col-sm-12">{{$item->header}}</h3>
                        {{-- if users authenticated can see this --}}
                        @if (Auth::check())
                                <div class="col-md-4 col-lg-3 col-sm-12 d-flex justify-content-center row p-0 m-0">
                            <a class="col-md-4 col-sm-2 col-3 btn btn-primary" target="_black" href="{{$item->link}}">go link</a>
                                {{--  change post   --}}
                                <form class="col-md-4 col-sm-2 col-3 p-0 m-0" action="{{route('change')}}" method="POST">
                                        {{ csrf_field() }}
                                    <input type="hidden" value="{{$item->link}}" name="url" id="url">
                                    <button class="col-12 btn btn-warning">change</button>
                                </form>

                                @include('store.delete')
                            @else

                            <div class="col-md-4 col-lg-3 col-sm-12 d-flex justify-content-end row p-0 m-0">
                                <a class="col-md-4 col-sm-2 col-3 btn btn-primary align-self-right" target="_black" href="{{$item->link}}">go link</a>

                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
        </article>
        <article class="d-flex justify-content-center mt-3 bg-dark bottom">
                <div class=" text-danger row pb-0 ">
                    <span class="col-5 d-flex justify-content-center align-self-center m-auto d-flex ">
                        <sapn class="m-auto"><p>{{ $all->links() }}</p><span>
                    </span>
                </div>
        </article>
    </section>
@endsection


