@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
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
    
    <style>
         .card{
            width: 100%;
            height: 500px;
        }
        .top{
            padding: 10px 50px 20px 0px;
        }
        #head-txt{
            padding: 20px 0px 20px 20px;
        }
        .txtfield1{
            margin: 40px 50px 20px 20px;
        }
        .txtfield2{
            margin: -180px 0px 20px 500px;
        }
        .txtfield3{
            margin: 0px 50px 20px 20px;
        }
        input[name="message"]{ 
            line-height: 150px; 
        }
        .submit-btn{
            float: right;
            padding: 10px 30px 20px 20px;
        }
    </style>
</head>
<body>
<div class="content px-3">

@include('flash::message')
<div class="top">
    <h3>Contact Sales</h3>
    <br>

    <p>
        Contact us for any concern regarding the product sales.
    </p>
</div>
<div class="card">

    <h3 id="head-txt"> Tell us anything</h3>

    <div class="txtfield1">
        <form>
            First Name <br>
            <input type="text" name="txtbox1" size=50> <br>
            Company/Organization Name <br>
            <input type="text" name="txtbox1" size=50> <br>
            Telephone Number <br>
            <input type="text" name="txtbox1" size=50> <br>
        </form>
    </div>
    <div class="txtfield2">
        <form>
            Last Name <br>
            <input type="text" name="txtbox2" size=50> <br>
            Post Code<br>
            <input type="text" name="txtbox2" size=50> <br>
            Email<br>
            <input type="text" name="txtbox2" size=50> <br>
        </form>

    </div>
    <div class="txtfield3">
        <form>
            Message/Concerns <br>
            <input type="text" name="message" size=115>
        </form>
    </div>

</div>
<div class="submit-btn">
    <button>Send</button>
</div>

</div>


</body>
</html>
    
    
@endsection