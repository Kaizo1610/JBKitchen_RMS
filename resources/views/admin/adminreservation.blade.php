<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top:-700px; right: -350px ">

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