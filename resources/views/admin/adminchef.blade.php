<x-app-layout>

</x-app-layout>

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
        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>

                <label>Name</label>
                <input style="color:black" type="text" name="name" placeholder="Enter name" required>

            </div>

            <div>

                <label>Speciality</label>
                <input style="color:black" type="text" name="speciality" placeholder="Enter the speciality" required>

            </div>

            <div>

                <input type="file" name="image" required>

            </div>

            <div>

                <input style="color:yellow" type="submit" value="Save">

            </div>

        </form>

        <table bgcolor="black">

            <tr>
                <th style="padding: 30px"> Chef Name </th>
                <th style="padding: 30px"> Speciality </th>
                <th style="padding: 30px"> Image </th>
                <th style="padding: 30px"> Update </th>
                <th style="padding: 30px"> Remove </th>
            </tr>

        @foreach($data as $data)  {{--loop to enter into db --}}

            <tr align="center">

                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>
                <td><img height="100px" width="100px" src="/chefimage/{{$data->image}}"></td>
                <td><a style="color:yellow" href="{{url('updatechef', $data->id)}}">Update</a></td>

                <td><a style="color:yellow" href="{{url('deletechef', $data->id)}}">Delete</a></td>
            </tr>

        @endforeach




        </table>

        </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>
