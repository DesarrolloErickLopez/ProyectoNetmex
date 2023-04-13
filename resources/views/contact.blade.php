@extends('layouts.sidebar')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home-estilos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- PERMITE HACER USO DE SWEETALERT2 PARA ALERTAS -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container">
    <!-- ESTE ES UN RENGLON -->
    <div class="row" style="height:auto;background-color:purple;">
        <!-- ESTA ES UNA COLUMNA -->
        <div class="col-8" id="colUno" style="height:auto;padding:1%;">
            <p id="tituloContact">Atención a clientes</p>
            <hr id="lineaContact">
            <p id=texto1Contact>            
            <b>Hola ¿En qué podemos ayudarte?</b><br>
            En NETMEX nos encanta recibir todas tus dudas, comentarios y
            observaciones. Queremos asegurarnos de que cada experiencia en
            Starbucks sea la mejor.<br/>
            <b><i class="bi bi-chat-left-quote-fill"></i> Atención al cliente</b>
            </p>
            @if(session('status'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: "{{ session('status') }}",
                                showConfirmButton: false,
                                timer: 1500
                            })
                        </script>
                        
                    @endif
            <form method="post" action="{{ route('contact') }}" style="padding-left:20%;padding-right:10%;">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">NOMBRE:</span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"><br>
                    {!! $errors->first('name','<small>:message</small><br>') !!}
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Correo:</span>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}"><br>
                    {!! $errors->first('email','<small>:message</small><br>') !!}
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Asunto:</span>
                    <input class="form-control" type="text" name="subject"  value="{{ old('subject') }}"><br>
                    {!! $errors->first('subject','<small>:message</small><br>') !!}
                </div>
                
                <div class="input-group mb-3">
                    <span class="input-group-text">Mensaje:</span>
                    <textarea class="form-control" name="content" >{{ old('content') }}</textarea><br>
                    {!! $errors->first('content','<small>:message</small><br>') !!}
                </div>
                
                <button class="btn btn-primary" style="width:100%">Enviar</button>
            </form>
        </div>
        <div class="col-4">
        
        <section id="mensaje">
        <p >
            <a href="https://api.whatsapp.com/send?phone=4774109114"><i id="WhatsApp" class="bi bi-whatsapp"></i> <b id="textoLink">Deseo recibir iformación personalizada</b></a></p>
        </section>   
            <section id="botonPayPal">
                <div id="donate-button-container">
                    <div id="donate-button"></div>
                    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                    <script>
                        PayPal.Donation.Button({
                        env:'production',
                        hosted_button_id:'TUXAEMV2Y65J2',
                        image: {
                        src:'https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif',
                        alt:'Donar con el botón PayPal',
                        title:'PayPal - The safer, easier way to pay online!',
                        }
                        }).render('#donate-button');
                    </script>
                </div>
            </section>
        </div>                
</div>
</body>
@endsection