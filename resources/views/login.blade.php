<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @if (Session::has('StatusLogin'))
        <b>{{Session::get('StatusLogin')}}</b>
    @endif
    {{-- <form action="/auth" method="post">
    @csrf
    </form> --}}
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg" style="width: 25rem;">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Login</h3>
                        <form action="/auth" method="POST">
                            @csrf                          
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>                          
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>                          
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block text-muted" style="text-decoration: none">
                                    <a style="text-decoration: none" class="text-light">Login</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
