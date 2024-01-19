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

        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Title</label>
                <input style="color:black" type="text" name="title" placeholder="Write a title" required>
            </div>

            <div>
                <label>Code No</label>
                <input style="color:black" type="text" name="codeno" placeholder="Code No" required>
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" required>
            </div>

            <div>
                <label>Description</label>
                <input style="color:black" type="text" name="description" placeholder="Description" required>
            </div>

            <div>
                <input style="color:yellow" type="submit" value="Save">
            </div>

        </form>

        <div>

            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Code No</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">1st Action</th>
                    <th style="padding: 30px">2nd Action</th>

                </tr>

                @foreach($data as $data)

                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->codeno}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="300" width="300" src="/foodimage/{{$data->image}}"></td>

                    <td><a style="color:yellow" href="{{url('/deletemenu',$data->id)}}">Delete</a></td>

                    <td><a style="color:yellow" href="{{url('/updateview',$data->id)}}">Update</a></td>

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
