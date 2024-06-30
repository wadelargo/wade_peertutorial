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
    .title {
        text-align: left;
    }
    .main {
        text-align: center;
        color: black;
    }

    .form-select {
        width: 340px;
    }
    .form-control {
        width: 340px;
    }
    .button {
        margin: 0 50px;
    }
    form {
        width: 300px;
    }
</style>


<h1 class="main">Create Trainor</h1>
<center><div class="row">
    <div class="col-md-5">
        <form action="{{url('trainors/create')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id" class="title">Select User</label>
                <select name="user_id" id="user_id" class="form-select">
                    @foreach ($users as $userId => $user)
                        <option value="{{$userId}}">{{$user}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="specialty">Specialty</label>
                <input type="text" name="specialty" id="specialty" class="form-control">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary mt-2" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                      </svg>
                </button>
            </div>
        </form>
    </div>
</div></center>

@endsection
