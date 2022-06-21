<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Login</title>
    <link href="{{ asset('css/styles1.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #7cc6fe" >
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <br><br>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header" style="background-color: #1C6E8C; color: #ffffff"><h3 class="text-center font-weight-light my-4">Coach login</h3></div>
                            <div class="card-body">
                                <form method="POST" action="/coach">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email"  name="email" placeholder="name@example.com" value="{{ old('email') }} " autofocus/>
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('MailPassword') is-invalid @enderror" id="inputPassword" name="code" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                        @error('MailPassword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Email or code are incorrect</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0" align="center">
                                        <div>
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                            <a class="btn btn-light" href="/">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3" style="background-color: #1C6E8C; color: #25CED1">
                                <div class="small" align="left"><i>clubs.ma</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
