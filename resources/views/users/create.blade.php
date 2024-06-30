@extends('pages.base')

@section('content')

    <style>
        .row  {
            color: black;
            width: 400px;
            border: 1px solid black;
            padding: 20px;
            background-color: rgba(167, 164, 164, 0.651);
        }
        .input {
            margin: 10px;
        }
    </style>



    <center><div class="row">

        <h2>Create New User</h2>
        <div >
            <form action="{{url('users/create')}}" method="POST">
                @csrf
                <div class="input">
                    <input type="text" name="full_name" id="full_name" placeholder="Enter full name..." class="form-control">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="username" id="username" placeholder="Enter username..." class="form-control">
                    @error('username')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="email" id="email" placeholder="Enter email..." class="form-control">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                          </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</center>

@endsection
