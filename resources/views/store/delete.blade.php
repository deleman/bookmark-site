<!-- Button trigger modal -->
<div class="col-md-4 col-sm-2 col-3 p-0 m-0" action="{{route('delete')}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" value="{{$item->link}}" name="url" id="url">
    <button class="col-12 btn btn-danger" data-toggle="modal" data-target="#deleteModel"> delete</button>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="deleteModelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModelLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you Sure delete this post?
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form class="col-md-4 col-sm-2 col-3 p-0 m-0" action="{{route('delete')}}" method="POST">
                {{ csrf_field() }}
            <input type="hidden" class="btn btn-secondary col-12" value="{{$item->link}}" name="url" id="url">
            <button class="col-12 btn btn-danger">Ok</button>
        </form>

      </div>
    </div>
  </div>
</div>
