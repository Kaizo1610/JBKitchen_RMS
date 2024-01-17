<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top:-700px; right: -350px ">

        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Title</label>
                <input style="color:black" type="text" name="title" placeholder="Write a title" required>
            </div>

            <div>
                <label>Price</label>
                <input style="color:black" type="number" name="price" placeholder="Price" required>
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
                <input style="color:black" type="submit" value="Save">
            </div>

        </form>
    </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>

</body>
</html>
