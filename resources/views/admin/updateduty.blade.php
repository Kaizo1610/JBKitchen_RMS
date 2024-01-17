<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href ="/public">

    @include("admin.admincss")

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")
    <div style="position: relative; top:-700px; right: -350px ">

        <form action="{{url('/updatee',$dataa->id)}}" method="post">

            @csrf

            <div>
                <label>Name</label>
                <input style="color:black" type="text" name="name" value="{{$dataa->name}}" required>
            </div>

            <div>
                <label>Role</label>
                <input style="color:black" type="text" name="role"  value="{{$dataa->role}}" required>
            </div>

            <div>
                <label>Shift</label>
                <input style="color:black" type="text" name="shift"  value="{{$dataa->shift}}" required>
            </div>

            <div>
                <input style="color:yellow" type="submit" value="Save">
            </div>
        </form>

    </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>
