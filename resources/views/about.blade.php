@extends('layouts.sidebar')

@section('content')

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}">
</head>
<style>
  .card{
    height: 100%;
  }
</style>
<div class="container">
    {{-- <p style="color: white;">hola desde about</p> --}}
    <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">
      <div class="col">
        <div class="card">
          <div class="card-header">
            NetMex
          </div>
          <div class="card-body">
            <h5 class="card-title">Misión</h5>
            <p class="card-text">NetMex quiere que conozcas su mision así como las metas a cuplir y objetivos que la empresa desea realizar para saber mas acerca de la misión de nuestra emresa da clic en el boton.</p>
            {{-- <a href="#" class="btn btn-warning">Saber más</a> --}}
            <button type="button" class="sabeMas btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Saber más
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Misión</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    La misión de NetMex es satisfacer a nuestros usuarios en forma suficiente, económica y con películas que se puedan ver con mayor calidad. Estamos seguros de que con nuestras carteleras se dará a los usuarios un servicio que se ajuste a sus necesidades, además de que nuestros programadores tienen una gran variedad de películas, ya que contamos con material de primer nivel.
                    La empresa NetMex se ajusta a los gustos de cada persona, pues no solo tiene películas viejitas, sino, también nuevas que permitirá al usuario elegir entre ellas.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>                        
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            NetMex
          </div>
          <div class="card-body">
            <h5 class="card-title">Visión</h5>
            <p class="card-text">NetMex quiere compartir contigo su visión sobre la industria del entretenimiento así podras conocer mejor cual es son nuestros ideales, si deseas saber mas acerca de visíon de nuestra empresa da clic en el siguiente boton.</p>
            {{-- <a href="#" class="sabeMas btn btn-warning">Saber más</a> --}}
            <button type="button" class="sabeMas btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">
              Saber más
            </button>
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Visión</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Buscar que nuestras carteleras se adapten a la necesidad del usuario en cuestión de que películas quiere ver a lo largo de su suscripción, para que este pueda llegar a tener su estilo propio con NetMex.
                    Ser una institución dedicada a la investigación e innovación de películas, series, novelas, etc. Para brindar al usuario una mayor satisfacción y darle a conocer que NetMex se dedica por completo a la necesidad de los usuarios.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>                        
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            NetMex
          </div>
          <div class="card-body">
            <h5 class="card-title">Valores</h5>
            <p class="card-text">NetMex quiere compartir la lista de valores por las cuales se rige nuestra empresa apegandonos cada día a ellos y trabajando para cumplir con todos y cada uno de ellos, si deseas saber mas acerca de los valores de nuestra empresa da clic en el siguiente boton.</p>
            {{-- <a href="#" class="sabeMas btn btn-warning">Saber más</a> --}}
            <button type="button" class="sabeMas btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3">
              Saber más
            </button>
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Valores</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <li>
                        Transparencia. En un entorno social donde cada vez es menos frecuente, dentro de nuestros valores empresariales podemos integrar la transparencia hacia nuestro equipo y hacia nuestros usuarios.
                      </li>
                      <li>
                        Puntualidad. El tiempo es dinero, y la gente cada vez valora más el suyo. Esto en cuestión de los estenos para que los usuarios no pierdan el interés en nosotros.
                      </li>
                      <li>
                        Excelencia. La calidad llevada al máximo, eso es la excelencia. Si nos exigimos lo mejor, podremos dar lo mejor. Y que un usuario y un empleado vean que les ofrecemos algo excelente les impulsará a quedarse con nosotros.
                      </li>
                      <li>
                        Escucha. La escucha es un valor empresarial que implica libertad de expresión.
                      </li>
                      <li>
                        Pasión. Este valor está directamente ligado al anterior, pero implica una mayor fuerza. Cuando alguien se muestra apasionado con su trabajo y con lo que hace, contagia esa pasión y esa energía a los demás.
                      </li>
                      <li>
                        Resolución. Es la capacidad para resolver problemas.
                      </li>
                      <li>
                        Claridad. A la hora de transmitir una idea, a la hora de cerrar un acuerdo, a la hora de explicar una serie de ventajas. Es vital ser claro, ya que a nadie le gusta no entender algo y tener la sensación de que quedan puntos sin tratar y sin aclarar.
                      </li>
                      <li>
                        Lealtad. Si nos mostramos leales y fieles con nuestro equipo y nuestros clientes, ellos nos devolverán esa fidelidad.
                      </li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>                        
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-lg-1 g-2 g-lg-3">
      <div class="col">
        <div class="card">
          <div class="card-header">
            NetMex
          </div>
          <div class="card-body" style="height: 100% !important;">
            <h5 class="card-title">Políticas de calidad</h5>
            <p class="card-text" style="font-size: 22px!important; margin-bottom: 5%;">NetMex quiere compartir contigo las politicas de calidad bajo las cuales se rige nuestra emresa, si deseas saber mas acerca de las politicas de calidad de nuestra empresa da clic en el siguiente boton.</p>
            <button type="button" class="sabeMas btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal4">
              Saber más
            </button>
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Políticas de calidad</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Somos una compañía comprometida y cuyas acciones las llevamos a cabo con el fin de servir y satisfacer a los usuarios, basándonos en los siguientes principios:
                    <ul>
                      <li>
                        Innovación en películas.
                      </li>
                      <li>
                        Integridad de nuestro personal
                      </li>
                      <li>
                        Compromiso con las normas de calidad
                      </li>
                      <li>
                        Productividad
                      </li>
                      <li>
                        Calidad en el trato con los usuarios
                      </li>
                      <li>
                        Creatividad en el diseño de nuestras carteleras
                      </li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>                        
          </div>
        </div>
      </div>
    </div>
</div>
@endsection