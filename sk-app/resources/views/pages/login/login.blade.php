<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/techics.custom.login.css')}}">
    <link rel="stylesheet" href="{{asset('css/techics.main.css')}}">
    <link rel="stylesheet" href="{{asset('css/loginpage-2.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <title>Login-Customization</title>
    
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid">
          <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg bgd">
            <div class="row flex-grow">
              <div class="col-lg-12 d-flex align-items-center  justify-content-center">
                <div class="techics-auth-form-transparent text-left p-3 car shadow p-3">
                  <div class="user text-center">
                    <img src="images/tech.png" class="img-responsive " alt="">
                  </div>
                    @if(\Session::has('login_err'))
                        <div class="pop-up-box">
                            <li class="pop-up">
                            {!! \Session::get('login_err') !!}
                            </li>
                        </div>
                    @endif
                    @if(\Session::has('pass_rst'))
                    <div class="pop-up-box">
                            <li class="pop-up">
                            {!! \Session::get('pass_rst') !!}
                            </li>
                    </div>
                    @endif
                  
                  <form class="" action="{{url('login')}}">
                    @csrf
                    <div class="techics-form-group ">
                      <div class="techics-input-group form-floating mb-3 bg-transparent">
                        <div class="techics-input-group-prepend">
                          <span class="techics-input-group-text bg-transparent border-right-0">
                            <i class="fas fa-user-tie techics-text-custom"></i>
                          </span>
                        </div>
                        <input name="email" type="email" class="form-control form-control-lg border-left-0" id="exampleInputPassword"
                          placeholder="Password">
                        <label for="exampleInputEmail">Username</label>
                      </div>
                    </div>
                    <div class="techics-form-group">
                      <div class="techics-input-group form-floating mb-3" id="show_hide_password">
                        <div class="techics-input-group-prepend bg-transparent">
                          <span class="techics-input-group-text bg-transparent ">
                            <i class="fas fa-lock techics-text-custom"></i>
                          </span>
                        </div>
                        <input name="password" type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword"
                          placeholder="Password">
                          <div class="input-group-addon showicon">
                            <a href=""><i class="fa fa-eye-slash text-muted mt-4" aria-hidden="true"></i></a>
                          </div>
                          
                          <label for="floatingPassword">Password</label>
                      </div>
                      <div class="forget-pass">
                            <a href="{{url('forgot-password')}}"><h2 class="text-right font-weight-light text-muted mr-1">Forget your password?</h2></a>
                      </div>
                     
                    </div>
                   
                    <div class="my-3 sub">
                      <button class="btn btn-block btn-color btn-lg font-weight-medium auth-form-btn mt-5 text-white"
                        >LOGIN</button>
                    </div>
                  </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/base.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"> </script>
</body>

</html>