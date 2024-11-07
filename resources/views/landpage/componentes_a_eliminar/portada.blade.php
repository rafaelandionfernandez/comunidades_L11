@extends('welcome')

@section('content')

<div class="row mr-0 ">
    <div class="col-lg-12 pr-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 " src="/images/portada.jpg" alt="Tu Vecindad">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/villa.png" alt="Tu Vecindad">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/piscina.jpg" alt="Tu Vecindad">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/fachada.jpg" alt="Tu Vecindad">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/parque.jpg" alt="Tu Vecindad">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/img1.jpg" alt="Tu Vecindad">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/gimnasio.jpg" alt="Tu Vecindad">
                </div>
            </div>

        </div>

        <h4 class="carousel-caption texto ">Gestiona tu comunidad tranquilamente desde cualquier dispositivo móvil, tablet o pc </h4>
    </div>
</div>


<div class="row m-4 p-4 d-flex flex-lg-nowrap justify-content-lg-around">
    <div class="col xs-col-1 sm-col-6 md-col-6 lg-col-3 ">
        <a href="{{ route('comunidades.create') }}">
            <div class="card m-3 p-3 zoom " style="width: 16rem;">

                <i style='font-size:80px' class='fas text-center m-2'>&#xf64f;</i>
                <div class="card-body">

                    <h5 class="card-title">Alta de comunidad</h5>
                    <p class="card-text">Cree la ficha de la comunidad y propiedades de cada usuario</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Regístrese</li>
                    <li class="list-group-item">Cumplimente el formulario</li>
                    <li class="list-group-item">Asigne propiedades</li>
                </ul>
            </div>
        </a>
    </div>

    <div class="col xs-col-1 sm-col-6 md-col-6 lg-col-3 ">
        <a href="{{ route('comunidades.index') }}">
            <div class="card m-3 p-3 zoom " style="width: 16rem;">

                <i style='font-size:80px' class='fas text-center m-2'>&#xf0c0;</i>

                <div class="card-body">
                    <h5 class="card-title">Alta de propietarios</h5>
                    <p class="card-text">Asocie los propietarios a cada una de las propiedades</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Identifique su comunidad</li>
                    <li class="list-group-item">Añada las propiedades</li>
                    <li class="list-group-item">Asigne los usuarios</li>
                </ul>
            </div>
        </a>
    </div>

    <div class="col xs-col-1 sm-col-6 md-col-6 lg-col-3 ">
        <div class="card m-3 p-3 zoom " style="width: 16rem;">

            <i style='font-size:80px' class='fas text-center m-2'>&#xf1fe;</i>
            <div class="card-body">
                <h5 class="card-title">Gestiona gastos</h5>
                <p class="card-text">Reparta las cuotas de propietarios mediante domiciliación bancaria</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Identifique Comunidad</li>
                <li class="list-group-item">Seleccione propiedad</li>
                <li class="list-group-item">Asigne la cuota</li>
            </ul>
        </div>
    </div>


    <div class="col xs-col-1 sm-col-6 md-col-6 lg-col-3 ">
        <div class=" card m-3 p-3 zoom " style="width: 16rem;">

            <i style='font-size:80px' class='fas text-center m-2'>&#xf044;</i>
            <div class="card-body">
                <h5 class="card-title">Foro</h5>
                <p class="card-text">Boletín actualizado de programación de Juntas e incidencias</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Identifique comunidad</li>
                <li class="list-group-item">Acceda al foro de noticias</li>
                <li class="list-group-item">Deje su mensaje</li>
            </ul>
        </div>
    </div>
</div>

<div class="row m-auto p-5 with-3d-shadow justify-content-center">
    <div class="card border-light mb-3" style="max-width: 75rem;">
        <div class="card-header"><h3>Quiénes somos</h3></div>
        <div class="card-body">
            <h5 class="card-title">RDN COMUNIDADES</h5>
            <p class="card-text">Somos un equipo de desarrolladores que hemos implementado un software sencillo y económico para facilitar la gestión de comunidades desde una única aplicación web.<br/>
                Podrá tramitar todas las actividades de las comunidades y condominios, desde la creación de una nueva comunidad, seguimiento de incidencias; hasta el cobro de los recibos de los propietarios por domiciliación bancaria.</p>

        </div>
    </div>


</div>
<div class="row m-auto p-5 with-3d-shadow justify-content-center">
    <div class="card border-light mb-3" style="max-width: 75rem;">
        <div class="card-header "><h3>Contacto</h3></div><br/>
        <div class="row justify-content-around d-flex flex-lg-nowrap">
            <div class="col xs-col-1 sm-col-6 md-col-6 lg-col-3 ">
                <div class="card-body m-3 p-5 zoom d-flex flex-column">
                    <h5 class="card-title">Oficinas</h5>
                    <i style='font-size:50px' class='fas text-center m-2'>&#xf3c5;</i><br/>
                    <span>Avenida A Miró, 27, Ático A 07003 Palma de Mallorca, Illes Balears <br/>
                        Horario: lunes a viernes de 9:00h a 18:00h</span>
                </div>
            </div>
            <div class=" col xs-col-1 sm-col-6 md-col-6 lg-col-3 ">
                <div class="card-body m-3 p-5 zoom">
                    <h5 class="card-title">Contáctar por correo</h5>
                    <i style='font-size:50px' class='fas text-center m-2'>	&#xf674;</i><br/>
                    <a href="mailto:tuvecindad.fb.moll@gmail.com?Subject=Informacion%20del%20software">tuvecindad.fb.moll@gmail.com</a>
                </div>
            </div>
            <div class=" col xs-col-1 sm-col-6 md-col-6 lg-col-3 ">
                <div class="card-body m-3 p-5 zoom">
                    <h5 class="card-title">Contáctar por teléfono</h5>
                    <i style='font-size:50px' class='fas text-center m-2'>	&#xf1e4;</i><br/>

                    <a class="m-auto"href="tel:+34987654321">+34987654321</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
