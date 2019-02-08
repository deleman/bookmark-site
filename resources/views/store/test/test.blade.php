
<?php
    if(isset($_POST['name'])) echo 'yes';
?>
@extends('store.master')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="" method="post">
            <button type="button" name="name" class="btn btn-primary">Save changes</button>
        </form>
        <form class="col-md-4 col-sm-2 col-3 p-0 m-0" action="{{route('delete')}}" method="POST">
                {{ csrf_field() }}
            <input type="hidden" value="" name="url" id="url">
            <button class="col-12 btn btn-danger">delete</button>
        </form>
      </div>
    </div>
  </div>
</div>


{{-- @push('js')
<script>

 $('#exampleModal').modal();
 setTimeout(function() {
    $('#exampleModal').modal('hide');
}, 5000);
</script>
@endpush --}}
