<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>ADMIN DATA</h1>


<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top:60px; right: -60px ">

        <table bgcolor="grey" border="3px">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Aiman</td>
                <td>aiman10@gmail.com</td>
                <td>Delete</td>
            </tr>
        </table>

    </div>

    </div>

    @include("admin.adminscript")


  </body>
</html>

</body>
</html>
