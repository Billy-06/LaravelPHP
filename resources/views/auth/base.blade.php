<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

</head>
<body>
    <div class="align-items-center justify-content-center g-0 min-vh-100 row">
        <div class="py-8 py-xl-0 col-lg-5 col-md-5">
            <div class="card">
                <div class="p-6 card-body">
                    <div class="mb-4">
                        <a href="/">
                            <img src="/static/media/logo-icon.ef90e78058ae6a66eabcbb0a6b6976f5.svg" alt="" class="mb-4">
                        </a>
                        <h1 class="mb-1 fw-bold">Sign in</h1>
                        <span>
                            Don’t have an account? 
                            <a class="ms-1" href="/authentication/sign-up">
                                Sign up
                            </a>
                        </span>
                    </div>
                    <form class="">
                        <div class="row">
                            <div class="mb-3 col-lg-12 col-md-12">
                                <label class="form-label">
                                    Username or email 
                                </label>
                                <input placeholder="Email address here" required="" type="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-12 col-md-12">
                                <label class="form-label">
                                    Password 
                                </label>
                                <input placeholder="**************" required="" type="password" id="password" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-12 col-md-12">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="mb-3 mb-md-0">
                                        <div class="form-check">
                                            <input type="checkbox" id="formBasicCheckbox" class="form-check-input">
                                            <label title="" for="formBasicCheckbox" class="form-check-label">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <a href="/authentication/forget-password">
                                        Forgot your password?
                                    </a>
                                </div>
                            </div>
                            <div class="mb-0 d-grid gap-2 col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Sign in
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="mt-4 text-center">
                        <a class="btn-social btn-social-outline btn-facebook" href="/authentication/sign-in/">
                            <i class="fab fa-facebook"></i>
                        </a> 
                        <a class="btn-social btn-social-outline btn-twitter" href="/authentication/sign-in/">
                            <i class="fab fa-twitter"></i>
                        </a> 
                        <a class="btn-social btn-social-outline btn-linkedin" href="/authentication/sign-in/">
                            <i class="fab fa-linkedin"></i>
                        </a> 
                        <a class="btn-social btn-social-outline btn-github" href="/authentication/sign-in/">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>