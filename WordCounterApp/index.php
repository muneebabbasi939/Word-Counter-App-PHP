<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Word Counter App</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title mt-3">
                        <h3 class="bg-success mt-3 py-3 text-center text-white">Word Counter Application</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <textarea  id="counters" cols="65" rows="10" class="form-control" placeholder="Write Here........"></textarea>
                        </form>
                    </div>
                    <div class="card-footer bg-dark">
                        <div class="text-white lead" id="display"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="jquery.js"></script>
    <script src="myjs.js"></script>
</body>

</html>