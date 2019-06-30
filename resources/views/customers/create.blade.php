@extends('index')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <h2 class="h2">
            Add New Customer
        </h2>
        <form class="text-left" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputTitle">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="inputTitle">Age</label>
                <input type="number" class="form-control" name="age" required>
            </div>
            <div class="form-group">
                <label for="inputTitle">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="inputTitle">Address</label>
                <input type="text" class="form-control" name="address" required>
            </div>
            <div class="form-group">
                <label >Choose File</label>
                <input type="file" class="form-control-file" name="avatar">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <a href="{{route('Customer.list')}}">Back</a>
    </div>
</div>
@endsection
