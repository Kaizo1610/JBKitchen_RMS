<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">

      @include("admin.navbar")

    <div style="position: relative; top:-700px; right: -350px ">

        <table bgcolor="grey" border="3px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if($data->usertype=="0")
                <td><a href="{{url('/deleteuser',$data->id)}}" style="color: yellow;">Delete</a></td>
                @else
                <td><a >Not Allowed</a></td>

                @endif

            </tr>

            @endforeach


        </table>

    </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>

</body>
</html>
