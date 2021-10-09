@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('services.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <strong>Reach out to us on these media platforms for our extended services</strong>
        <br>
    <div class="card">
        
        <table>
        <tr>
                                <td>Gmail: <strong>
                                jaye.batz@gmail.com
                                </strong></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Yahoo: <strong>
                               jaye.batz@yahoo.com
                                </strong></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Facebook: <strong>
                                Cj Batausa
                                </strong></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Twitter: <strong>
                                @caiusjayce
                                </strong></td>
                                <td></td>
                            </tr>
        </table>

    </div>
    </body>
    </html>

@endsection

