<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($too as $t)
        {{$t}}

    @endforeach


    Welcome : {{$name}} - {{$age}}
    @if($age > 18)
        <p>nasand hursen bn</p>
    @else
        <p>nasand hureegui bn </p>
    @endif 
    <?php // laravel deer @ eer ehelj
    //@eer duusna!!!
        if($age>18){
            echo "ta 18 as deesh nastai";
        }
    ?>

    

</body>
</html>