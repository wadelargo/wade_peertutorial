@extends('pages.base')

@section('content')
@if (session('message'))
    <div class="success">{{session('message')}}</div>
@endif

<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('users/create ')}}" class="btn btn-primary me-md-2" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
          </svg>
    </a>
</div>

    <style>

           /* Center the entire table */
    table {
        width: 100%; /* Adjust the width as needed */
        margin: auto;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: cyan;
        color: rgb(23, 43, 23);

    }
    td {
        background-color: rgb(190, 233, 229);
    }

    .success  {
        padding: 15px;
        text-align: center;
        background-color: white;
        color: green;
        border-radius: 9px;

    }

    </style>



   <center><table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Edit</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->full_name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-center">
                            <a href="{{url('/users/'.$user->id)}}" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                  </svg>
                            </a>
                        </td>

                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table></center>

@endsection
