<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    {{-- <meta http-equiv="refresh" content="1" > --}}
    <link rel="icon" href="https://i.pinimg.com/originals/70/38/2f/70382fb22583c58066be57f2e2e6fb8a.png">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css"> 
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> --}}
    <style>
        body{
            margin: 5px;
            background-color: #c0c0c0;
        }
    
        label {
            display: block;
            font: 1rem 'Fira Sans', sans-serif;
        }
        
        input, label {
            margin: .4rem 0;
        }

        input[type=number]
        {
            -moz-appearance: textfield;
        }  

        .active a{
			color: green;
			text-decoration: none;
		}
    </style>
</head>
<body>
    @include('contenidos.nav')
    @include('contenidos.status')


    


    @yield('contenidoGeneral')
</body>
</html>