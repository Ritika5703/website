<?php 

include "connection.php";

$id = $_GET["id"];
$sql = "SELECT * FROM `contact` WHERE `id` = $id;";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            
        </header>
        <main>
            <div
                class="container border border-dark my-5 p-5" style="max-width: 500px;">
            <h1 class="text-center">Edit form</h1>
                <form action="update.php" method="post">
                    <div class="mb-3 visually-hidden">
                        <label for="" class="form-label ">ID</label>
                        <input
                            type="text"
                            class="form-control"
                            name="id"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo "{$row['id']}";?>"
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo "{$row['name']}";?>"
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="emailHelpId"
                            placeholder="abc@mail.com"
                            value="<?php echo "{$row['email']}";?>"
                        />
                        <small id="emailHelpId" class="form-text text-muted"
                            >Help text</small
                        >
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mobile no.</label>
                        <input
                            type="text"
                            class="form-control"
                            name="number"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            value="<?php echo "{$row['number']}";?>"
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Feedback</label>
                        <input
                            type="input"
                            class="form-control"
                            name="query"
                            id=""
                            placeholder=""
                            value="<?php echo "{$row['query']}";?>"
                        />
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
