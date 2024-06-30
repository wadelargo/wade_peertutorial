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
 border: 1px solid rgb(38, 16, 16);
 padding: 8px;
 text-align: left;
}

th {
 background-color: rgb(98, 236, 160);
 color: rgb(23, 43, 23);

}
td {
 background-color: rgb(85, 196, 247);
}

</style>


    <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Title</th>
                    <th>Description</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($courses as $course):?>
                    <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->trainor_user_name}}</td>
                        <td>{{$course->title}}</td>
                        <td>{{$course->description}}</td>

                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>

@endsection
