@extends('layouts.app')

@section('content')

<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title mb-0">Registrar Usuario</h4>
				</div>
				<div class="card-content">
					<div class="px-3">
						<form action="{{route('user.store')}}" method="POST">
                                  @csrf
                                  <input type="text" class="form-control mb-3 error" placeholder="Nombre" required="" name="nombre" />

                                  <div class="form-group {{ $errors->has('email')? 'error':'' }}">
                                    <input type="email" class="form-control mb-3 " placeholder="Email" required="" name="email" value="{{old('email')}}" />
                                  </div>


                                  <div class="form-group {{ $errors->has('password')? 'error':'' }}">
                                    <input type="password" class="form-control mb-3 " placeholder="Contraseña" name="password" />
                                  </div>

                                  <div class="form-group {{ $errors->has('password')?'error':'' }}">
                                    <input type="password" class="form-control mb-3 " placeholder="Confirmar Contraseña" name="password_confirmation" required="" />
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                    <input type="checkbox" id="customCheckboxInline1" name="terminos" required="" class="custom-control-input"
                                       />
                                    <label class="custom-control-label" for="customCheckboxInline1">
                                      Aceptar <a href="#">Términos Y Condiciones</a>
                                    </label>
                                   @if(count($errors) > 0)
                                   <hr>
                                    <div class="help-block">
                                      <ul role="alert">
                                        @foreach($errors->all() as $error)
                                          <li class="danger">{{ $error }}</li>
                                        @endforeach
                                      </ul>
                                    </div>
                                   @endif
                                  </div>
                                  <div class="fg-actions d-flex justify-content-between">

                                    <div class="recover-pass">
                                      <button class="btn btn-primary">
                                          Registrar
                                      </button>
                                    </div>

                                  </form>
					</div>
				</div>
			</div>
		</div>
@endsection
