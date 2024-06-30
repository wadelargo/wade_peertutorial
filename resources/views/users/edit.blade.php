@extends('pages.base')

@section('content')
<!-- Modal -->

@if (session('message'))
<div class="success">{{session('message')}}</div>
@endif

<style>
        .row  {
            color: black;
            width: 400px;
            border: 1px solid black;
            padding: 20px;
            background-color: rgba(173, 141, 141, 0.651);
        }
        .input {
            margin: 10px;
        }
        </style>



<center><div class="row">

    <h2>edit User</h2>
    <div >
        <form action="{{url('users/'.$user->id)}}" method="POST">
            @csrf
            <div class="input">
                <input type="text" name="full_name" id="full_name" placeholder="Enter full name..." class="form-control" value="{{$user->full_name}}">
                    @error('full_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="username" id="username" placeholder="Enter username..." class="form-control" value="{{$user->username}}">
                    @error('username')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="email" id="email" placeholder="Enter email..." class="form-control" value="{{$user->email}}">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                        Delete
                      </button>

                    <button class="btn btn-primary" type="submit">
                        Edit User
                    </button>
                </div>
            </form>
        </div>
    </div>
</center>
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark" id="deleteUserModalLabel">Delete User - {{$user->full_name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('users/delete/' . $user->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <div class="modal-body">
                 Are you sure you want to delete this User?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete User</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection
