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
        table, th, td {
            width: 100%;
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
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>