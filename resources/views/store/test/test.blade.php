
<?php
    if(isset($_POST['name'])) echo 'yes';
?>
@extends('store.master')

<div class="input-group">
    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
    <div class="input-group-append">
        <button type="button" class="btn btn-outline-secondary">login</button>
        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">sign up</a>
        </div>
    </div>
</div>

<div class="input-group-append">
        <button type="button" class="btn btn-outline-secondary">login</button>
        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">sign up</a>
        </div>
    </div>
