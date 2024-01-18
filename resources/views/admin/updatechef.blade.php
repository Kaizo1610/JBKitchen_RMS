<!DOCTYPE html>
<html lang="en">
  <head>

    <base href ="/public">

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
                <input type="submit" value="Update chef" style="color:black">
            </div>
        </form>

    </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>
