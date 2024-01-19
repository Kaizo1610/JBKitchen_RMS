<!DOCTYPE html>
<html lang="en">
  <head>

    <base href ="/public">

    <style>
        body {
          font-family: 'Arial', sans-serif;
          background-color: #f0f0f0; /* Set your desired background color */
          color: white; /* Set text color to white */
        }

        .container-scroller {
          position: relative;
        }

        form {
          margin-top: 10px;
          color: white; /* Set form text color to white */
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
          border-collapse: collapse;
        }

        th, td {
          padding: 15px;
          text-align: left;
          border-bottom: 1px solid #ddd;
        }

        th {
          background-color: black;
          color: white;
        }

        img {
          max-width: 300px;
          max-height: 300px;
        }

        a {
          text-decoration: none;
          color: white; /* Set link color to white */
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

    {{$data->name}}


    <div style="position: relative; top:-700px; right: -350px ">

        <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Chef Name</label>
                <input style="color:black" type="text" name="name" value="{{$data->name}}" >
            </div>

            <div>
                <label>Speciality</label>
                <input style="color:black" type="text" name="speciality"  value="{{$data->speciality}}" required>
            </div>

            <div>
                <label> Old Image</label> <br>
                <img height="300" width="300" src="/chefimage/{{$data->image}}" alt="">

            </div>

            <div>
                <label> New Image</label>
                <input type="file" name="image">
            </div>

            <div>
                <input type="submit" value="Update chef" style="color:yellow">
            </div>
        </form>

    </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>
