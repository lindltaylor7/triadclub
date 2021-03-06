<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Triad Club-Login</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    @font-face {
        font-family: Axiforma;
        src: url('font/Axiforma-Medium.woff');
    }

    body {
        background-color: rgb(26, 29, 41);
        color: #fff;
        margin: 0;
        padding: 0;
        font-family: Axiforma;
        overflow-x: hidden;
    }




    .footer {
        background: black;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-top: 30px;
        position: relative;
        bottom: 0;
    }

    .footer-logo {
        display: flex;
        justify-content: center;
    }

    .footer img {
        position: relative;
        top: 20px;
        width: 10%;
    }

    .footer-links {
        display: flex;
        justify-content: center;
        font-size: 12px;
        margin: 35px 30%;
        text-align: justify;
    }

    .footer-brand {
        display: flex;
        justify-content: center;
        font-weight: 100;
        font-size: 10px;
        padding-bottom: 20px;
    }

    .area-login {
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-login {
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .input-text {
        width: 450px;
        height: 48px;
        background-color: rgb(49, 52, 62);
        color: rgb(249, 249, 249);
        border: none;
        font-size: 15px;
        font-weight: 100;
        font-family: Axiforma;
        outline: none;
        margin: 10px;
        padding: 7px 12px;
        border-radius: 4px;
    }

    .btn-primary {
        width: 450px;
        height: 48px;
        background-color: rgb(0, 114, 210);
        color: rgb(249, 249, 249);
        border: none;
        font-size: 15px;
        letter-spacing: 1.5px;
        font-family: Axiforma;
        outline: none;
        margin: 10px;
        padding: 7px 12px;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary:hover {
        transition: .5s;
        background-color: rgb(6, 141, 255);
    }

    .quest {
        color: rgb(202, 202, 202);
    }

    .quest a {
        color: #fff;
        text-decoration: none;
    }

    .quest a:hover {
        transition: .3s;
        text-decoration: underline;
    }


    .logo {
        padding: 30px;
        width: 250px;
    }

    @media screen and (max-width: 600px) {

        .area-login p {
            text-align: center;
        }

        .form-login {
            width: 100%;
        }

        .input-text {
            width: 80%;
            height: 48px;
            background-color: rgb(49, 52, 62);
            color: rgb(249, 249, 249);
            border: none;
            font-size: 15px;
            font-weight: 100;
            font-family: Axiforma;
            outline: none;
            margin: 10px;
            padding: 7px 12px;
            border-radius: 4px;
        }

        .btn-primary {
            width: 80%;
            height: 48px;
            background-color: rgb(0, 114, 210);
            color: rgb(249, 249, 249);
            border: none;
            font-size: 15px;
            letter-spacing: 1.5px;
            font-family: Axiforma;
            outline: none;
            margin: 10px;
            padding: 7px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            font-size: 12px;
            margin: 35px 10%;
            text-align: justify;
        }
    }

</style>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Triad Club</title>
        <link rel="stylesheet" href="styles/login.css">
    </head>

    <body>


        <section class="area-login">
            <a href="/"><img class="logo" src="{{ Storage::url('index/logo.png') }}" alt="logo" /></a>
            <p style="font-size: 20px; margin-top:0;">Registra tu Empresa</p>
            <p style="font-size: 15px; margin-top: 0px;">Paso 2 de 3: Datos de la Empresa</p>
            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('reg2') }}" class="form-login">
                @csrf
                <input type="text" class="input-text" name="name" id="" placeholder="Nombre de la Empresa" value="{{old('name')}}" required autofocus>
                <input type="text" class="input-text" name="ruc" id="" placeholder="RUC" value="{{old('ruc')}}" required autofocus>
                <input type="text" class="input-text" name="direccion" id="" placeholder="Direcci??n" value="{{old('direccion')}}" required autofocus>
                <input type="text" class="input-text" name="tlf" id="" placeholder="Tel??fono" value="{{old('tlf')}}" required autofocus>
                <input type="text" class="input-text" name="cel" id="" placeholder="Celular" value="{{old('cel')}}" required autofocus>
                <label for="">Ciudad</label>
                <select name="ciudad" class="input-text" id="">
                    <option value="Huancayo">Huancayo</option>
                    <option value="Lima">Lima</option>
                </select>
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <label for="">Rubro</label>
                <select name="rubro_id" class="input-text" id="">
                    <option value="1">Educaci??n</option>
                    <option value="2">Restaurantes</option>
                    <option value="3">Salud</option>
                    <option value="4">Abogados</option>
                    <option value="5">Tecnolog??a</option>
                    <option value="6">Hoteler??a</option>
                    <option value="7">Telecomunicaciones</option>
                    <option value="8">Constructoras e Inmoviliarias</option>
                    <option value="9">Artesan??a</option>
                    <option value="10">Moda</option>
                    <option value="11">Otros</option>
                </select>
                <input type="submit" class="btn-primary" value="CONTINUAR">
            </form>
            <p class="quest">??Ya tienes una cuenta en Triad Club? <a href="{{ route('login') }}">Ingresa aqu??</a></p>
        </section>





    </body>

    </html>
</body>

</html>
