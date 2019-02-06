<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>qeury builders</title>
    <style>
        .margin-auto{
            width:60%;
            margin:auto;
            padding:20px;
            border-radius: 14px;
            font-size:1.3rem;
            color:orange;
            background-color:gray;
        }
        h3{
            color:darkviolet;
        }
        body{
            background-color:black;
        }
    </style>
</head>
<body>
    <article class="margin-auto">
        <h3>Hello Query Builder Laravel</h3>
        <hr color="cyan">
        @foreach ($all_info as $k=> $info)
            @if(gettype($info)=='object')

                @foreach ($info as $key => $item)

                    @if (gettype($item)=='string')
                            <h5>{{$item}}</h5>
                    @else
                    <p>id  {{$item->id}}</p>
                    <p>name  {{$item->name}}</p>
                    <p>email  {{$item->email}}</p>
                    <p>password  {{$item->password}}</p>

                    @endif
                @endforeach
            @else
                <p>{{$k }} - {{$info}}</p>
            @endif

        @endforeach
    </article>
</body>
</html>
