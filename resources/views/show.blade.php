<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
    <head>

        <title>@yield('titulo')</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <br/>
        <style type="text/css">
            @media print {
                html,body {
                margin-top: -10px !important;
                padding: 0 !important;
                }

                @page {
                    margin: 0;
                }
            }
            .center {
                width: 654px;
                text-align: center;
                left: 121px;
            }

            .texto {
                font-family: 'Open Sans', sans-serif;
                font-weight: 400;
                font-size: 17px;
            }

            .texto-mini {
                font-family: 'Open Sans', sans-serif;
                font-weight: 400;
                font-size: 10px;
            }

            .destaque1 {
                font-family: 'Open Sans', sans-serif;
                font-weight: 800;
                font-size: 30px
            }

            .destaque2 {
                font-family: 'Open Sans', sans-serif;
                font-weight: 800;
                font-size: 22px
            }

        </style>
    </head>
    <body bgcolor="#A0A0A0" vlink="blue" link="blue">
        @foreach ($collection as $item)
            @include('layout.certificado')
        @endforeach
    </body>
</html>