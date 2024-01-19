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

    <style>
        body {
          font-family: 'Arial', sans-serif;
          background-color: #f0f0f0;
          color: white;
        }

        .container-scroller {
          position: relative;
        }

        form {
          margin-top: 10px;
          color: white;
        }

        form div {
          margin-bottom: 15px;
        }

        label {
          display: block;
          margin-bottom: 5px;
        }

        input[type="text"], input[type="file"] {
          width: 50%;
          padding: 8px;
          box-sizing: border-box;
        }

        input[type="submit"] {
          color: yellow;
          background-color: black;
          padding: 10px;
          cursor: pointer;
        }

        table {
          width: 70%;
          margin-top: 20px;
          text-align: center;
          border-collapse: collapse;
        }

        th, td {
          padding: 15px;
          border-bottom: 1px solid #ddd;
        }

        th {
          background-color: lightseagreen;
          color: black;
        }

        img {
          max-width: 300px;
          max-height: 300px;
        }

        a {
          text-decoration: none;
          color: white;
        }

        a:hover {
          text-decoration: underline;
        }
      </style>

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
                <input style="color:yellow" type="submit" value="Save">
            </div>
        </form>

        <div>

            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Role</th>
                    <th style="padding: 30px">Shift</th>
                    <th style="padding: 30px">Remove</th>
                    <th style="padding: 30px">Update</th>

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
