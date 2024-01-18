<x-app-layout>

</x-app-layout>

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

    <div style="position: relative; top:-600px; right: -350px ">

        <form action="{{url('/uploadduty')}}" method="post">

            @csrf

            <div>
                <label>Name</label>
                <input style="color:black" type="text" name="name" placeholder="Name" required>
            </div>

            <div>
                <label>Role</label>
                <input style="color:black" type="text" name="role" placeholder="Role" required>
            </div>

            <div>
                <label>Shift</label>
                <input style="color:black" type="text" name="shift" placeholder="Shift" required>
            </div>

            <div>
                <input style="color:black" type="submit" value="Save">
            </div>
        </form>

        <div>

            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Role</th>
                    <th style="padding: 30px">Shift</th>
                    <th style="padding: 30px">1st Action</th>
                    <th style="padding: 30px">2nd Action</th>

                </tr>

                @foreach($dataa as $dataa)

                <tr align="center">
                    <td>{{$dataa->name}}</td>
                    <td>{{$dataa->role}}</td>
                    <td>{{$dataa->shift}}</td>

                    <td><a style="color:yellow" href="{{url('/deleteduty',$dataa->id)}}">Delete</a></td>

                    <td><a style="color:yellow" href="{{url('/updateduty',$dataa->id)}}">Update</a></td>

                </tr>

                @endforeach

            </table>

        </div>




    </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>

</body>
</html>
