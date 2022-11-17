<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/techics.custom.login.css')}}">
    <link rel="stylesheet" href="{{asset('css/techics.main.css')}}">
    <link rel="stylesheet" href="{{asset('css/loginpage-2.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <title>password reset</title>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid">
          <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg bgd">
            <div class="row flex-grow">
              <div class="col-lg-12 d-flex align-items-center  justify-content-center">
                <div class="techics-auth-form-transparent text-left p-3 car shadow p-3">
                  <div class="user text-center">
                    <img src="{{asset('images/tech.png')}}" class="img-responsive " alt="">
                  </div>
                    @if(\Session::has('failed'))
                        <div class="pop-up-box">
                            <li class="pop-up">
                            {!! \Session::get('failed') !!}
                            </li>
                        </div>
                    @endif
                    @foreach($errors->all() as $message)
                        <div class="pop-up-box">
                            <li class="pop-up">
                                {{$message}}
                            </li>
                        </div>
                    @endforeach
                  <form class="" action="{{route('user.reset.password.page')}}">
                    @csrf
                    <div class="techics-form-group ">
                      <div class="techics-input-group form-floating mb-3 bg-transparent">
                        <div class="techics-input-group-prepend">
                          <span class="techics-input-group-text bg-transparent border-right-0">
                            <i class="fas fa-user-tie techics-text-custom"></i>
                          </span>
                        </div>
                        <input name="email" value={{$email}} type="email" class="form-control form-control-lg border-left-0" id="exampleInputPassword"
                          placeholder="Password">
                        <label for="exampleInputEmail">User_Email</label>
                      </div>
                    </div>
                    <input type="hidden" name="token" value="{{$token}}"/>
                    <div class="techics-form-group">
                      <div class="techics-input-group form-floating mb-3" id="show_hide_password">
                        <div class="techics-input-group-prepend bg-transparent">
                          <span class="techics-input-group-text bg-transparent ">
                            <i class="fas fa-lock techics-text-custom"></i>
                          </span>
                        </div>
                        
                        <input name="password"  type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword"
                          placeholder="Password">
                          <div class="input-group-addon showicon">
                            <a href=""><i class="fa fa-eye-slash text-muted mt-4" aria-hidden="true"></i></a>
                          </div>
                          
                          <label for="floatingPassword">Password</label>
                      </div>

                      <div class="techics-form-group">
                      <div class="techics-input-group form-floating mb-3" id="show_hide_confirmed_password">
                        <div class="techics-input-group-prepend bg-transparent">
                          <span class="techics-input-group-text bg-transparent ">
                            <i class="fas fa-lock techics-text-custom"></i>
                          </span>
                        </div>
                        <input name="password_confirmation" type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword"
                          placeholder="Password">
                          <div class="input-group-addon showicon">
                            <a href=""><i class="fa fa-eye-slash text-muted mt-4" aria-hidden="true"></i></a>
                          </div>
                          
                          <label for="floatingPassword">confirm password</label>
                      </div>
                    </div>
                   
                    <div class="my-3 sub">
                      <button type="submit" class="btn btn-block btn-color btn-lg font-weight-medium auth-form-btn mt-5 text-white"
                        >reset</button>
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