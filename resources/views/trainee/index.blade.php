@extends('pages.base')

@section('content')

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
 background-color: rgb(41, 222, 219);
 color: rgb(23, 43, 39);

}
td {
 background-color: rgb(126, 246, 230);
}

</style>

    <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($trainees as $trainee):?>
                    <tr>
                        <td>{{$trainee->id}}</td>
                        <td>{{$trainee->user->full_name}}</td>
                        <td>{{$trainee->status}}</td>

                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>

@endsection
