<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
    <style>
            .container {
                height: 100vh;
                /* display: flex; */
                align-items: center;
            }
    </style>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Login</h4>
                        <br>
                        <form action="controller.php" method="post">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="" class="form-label">email address</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id=""
                                        class="form-control"
                                        placeholder=""
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">password</label>
                                    <input
                                        type="password"
                                        name="password"
                                        id=""
                                        class="form-control"
                                        placeholder=""
                                    />
                                </div>
                                <br><br>
                                <input type="submit" value="submit" class="btn btn-primary col-12">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>