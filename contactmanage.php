<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<header>
      <!-- place navbar here -->
    </header>
  <main>

  <?php 

include "connection.php";



$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {

echo "<div class='container my-5'>
<h1 class='text-center my-5'>Contact Management</h1>
<div class='table-responsive'>
    <table class='table table-primary'>
        <thead>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Name</th>
                <th scope='col'>Email</th>
                <th scope='col'>Mobile no.</th>
                <th scope='col'>query</th>
                <th scope='col'>Action</th>
            </tr>
        </thead>
        <tbody>
";

while ($rows = mysqli_fetch_assoc($result)) {
    echo "  <tr class=''>
    <td scope='row'>{$rows['id']}</td>
    <td>{$rows['name']}</td>
    <td>{$rows['email']}</td>
    <td>{$rows['number']}</td>
    <td>{$rows['query']}</td>
    <td>
    <a
    name=''
    id=''
    class='btn btn-warning'
    href='edit.php?id={$rows['id']}'
    role='button'
    >Edit</a
>
<a
    name=''
    id=''
    class='btn btn-danger'
    href='delete.php?id={$rows['id']}'
    role='button'
    >Delete</a
>
</td>
</tr>";
} 

   echo "
   </tbody>
</table>
</div>

</div>";
    




} else {
   echo "0 Record Found";
}



mysqli_close($conn);
?>





  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>



