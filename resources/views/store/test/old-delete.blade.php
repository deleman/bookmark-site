 {{--  delete post   --}}
 <form class="col-md-4 col-sm-2 col-3 p-0 m-0" action="{{route('delete')}}" method="POST">
        {{ csrf_field() }}
    <input type="hidden" value="{{$item->link}}" name="url" id="url">
    <button class="col-12 btn btn-danger">delete</button>
</form>
