<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .table_design {
            border: 2px solid white;
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 40px;
        }

        .th_design {
            background-color: skyblue;
            padding: 10px;
        }

        tr {
            border: 3px solid white;
        }

        td {
            padding: 10px;
        }

    </style>
</head>

<body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <table class="table_design">
                    <tr>
                        <th class="th_design">Room Title</th>
                        <th class="th_design">Description</th>
                        <th class="th_design">Price</th>
                        <th class="th_design">Wifi</th>
                        <th class="th_design">Room Type</th>
                        <th class="th_design">Image</th>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data -> room_title}}</td>
                        <td>{!! Str::limit($data -> description,150 )}</td>
                        <td>{{$data -> price}}$</td>
                        <td>{{$data -> wifi}}</td>
                        <td>{{$data -> room_type}}</td>
                        <td>
                            <img width="60" src="room/{{$data -> image}}">
                        </td>
                    </tr>

                </table>

            </div>
        </div>
    </div>


    @include('admin.footer')
</body>

</html>