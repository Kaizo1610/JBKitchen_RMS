<x-app-layout>

</x-app-layout>

    <!DOCTYPE html>
<html lang="en">

  <head>

    <base href="/public">

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

        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Title</label>
                <input style="color:black" type="text" name="title" value={{$data->title}} required>
            </div>

            <div>
                <label>Code No</label>
                <input style="color:black" type="text" name="codeno" value={{$data->codeno}} required>
            </div>

            <div>
                <label>Description</label>
                <input style="color:black" type="text" name="description" value={{$data->description}} required>
            </div>

            <div>
                <label>Old Image</label>
                <img height="300" width="300" src="/foodimage/{{$data->image}}">
            </div>

            <div>
                <label>New Image</label>
                <input type="file" name="image" required>
            </div>

            <div>
                <input style="color:yellow" type="submit" value="Save">
            </div>

        </form>

    </div>

    @include("admin.adminscript")

</body>
</html>




