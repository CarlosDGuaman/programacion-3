@extends('welcome')
@section('contenido')

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Ingresar con Usuario</h2>

              <form action="{{route('login.ingresar')}}" method="post">
                @csrf

                <div class="form-outline mb-4">
                  <input type="email" name="correo"id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Correo Electronico</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="contraseña" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Contraseña</label>
                </div>
                @if (isset($error))
                  <div class="alert alert-danger" role="alert">
                    Usuario o Contraseña invalidos
                  </div>
                @endif
                @if (isset($registro))
                  <div class="alert alert-success" role="alert">
                    Se a registrado Correctamente
                  </div>
                @endif
                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    Proximamente <a href="#!" class="text-body"><u>Terminos de la Profe</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Iniciar Sesion</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">No tienes Usuario? <a href="{{route('registro')}}"
                    class="fw-bold text-body"><u>Ir a Registro</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection