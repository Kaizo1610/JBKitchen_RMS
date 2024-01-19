<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

    <style>
        /* body {
          font-family: 'Arial', sans-serif;
          background-color: grey;
          color: white;
        } */

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

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top:-600px; right: -350px ">

        <table bgcolor="grey" border="2px">

            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Phone No</th>
                <th style="padding: 30px">Date</th>
                <th style="padding: 30px">Time</th>
                <th style="padding: 30px">Message</th>

            </tr>

            @foreach ($data as $data)

            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->message}}</td>

            </tr>

            @endforeach


        </table>

    </div>


    </div>

    @include("admin.adminscript")


  </body>
</html>
