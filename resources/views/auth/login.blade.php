@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- Form login -->

<!-- Form login -->
        <br/>

            <div class="panel panel-default">
                <div class="panel-heading"><font size="4">Login</font></div>
                <br/>
                <br/>
                <div class="panel-body">
         <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


                            <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                                <input id="email" type="email" class="form-control validate" name="email" value="{{ old('email') }}" required autofocus>
                                               <label for="email" data-success"Correcto" data-error"Email Invalido">E-Mail</label>   
                            </div>
                            @if ($errors->has('email'))
                                     <div class='error alert bg-danger waves-effect text-white z-depth-4 hoverable imenn'> <span  class="close" data-dismiss="alert" aria-label="close">&times;</span><center><strong> <i class='fa fa-1x fa-times left'></i>&nbsp;&nbsp;Error!</strong>

                                      {{ $errors->first('email', ':message') }}
                                    </center></div>
                                @endif
                       
<br/>
                            <div class="md-form">
                            <i class="fa fa-unlock-alt prefix"></i>
                                <input id="password" type="password" class="form-control validate" name="password" required>
            <label for="password" data-success"Correcto" data-error"Incorrecto">Contraseña</label>
                            </div>
                             @if ($errors->has('password'))
                                       <div class='error alert bg-danger waves-effect text-white z-depth-4 hoverable imenn'> <span  class="close" data-dismiss="alert" aria-label="close">&times;</span><center><strong> <i class='fa fa-1x fa-times left'></i>&nbsp;&nbsp;Error!</strong>
                            {{ $errors->first('password', ':message') }}
                                 </center></div>
                                @endif
              
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
<div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-elegant">
                                    <i class="fa fa-sign-in left"></i> Iniciar Sesion
                                </button>

                                <a class="btn btn-elegant" href="{{ route('password.request') }}">
                                   <i class="fa fa-unlock left"></i> ¿Olvidaste tu Contraseña?
                                </a>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
