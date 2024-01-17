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
