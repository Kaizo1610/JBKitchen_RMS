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
                <td><a href="{{url('updatechef', $data->id)}}">Update</a></td>

                <td><a href="{{url('deletechef', $data->id)}}">Delete</a></td>
            </tr>

        @endforeach




        </table>

        </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>
