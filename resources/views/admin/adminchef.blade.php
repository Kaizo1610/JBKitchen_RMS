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
                <input style="color:black" type="text" name="name" placeholder="Enter the speciality" required>

            </div>

            <div>

                <input type="file" name="image" required>

            </div>

            <div>

                <input style="color:yellow" type="submit" name="name" value="Save">

            </div>

        </form>
        </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>
