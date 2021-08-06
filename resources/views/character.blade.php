
<html lang="en">
<head>
 <link rel="stylesheet" href="{{asset('css/app2.css')}}">

</head>
<body>
    <div class="container" style="background-color: white;">
        @foreach ($result as $r)
            <div class="buttons">
                <button onclick="window.history.back();" class="btn btn-danger"> Back</button>
                <h4 style="margin-top: 30px;">{{$r->name}}</h4>
                <p></p>
            </div>
            <div class="form-group">
                <div class='input-group'>
                    <?= '<img src="'.$r->thumbnail->path.'.'.$r->thumbnail->extension.'" class="img"/>'; ?>
                </div>
                @if($r->description == "")
                    <p>This character has no description on the Marvel website.</p>
                @endif
                <p>{{$r->description}}</p>
            </div>
            <div class="comics">
                @foreach($r->comics->items as $comic)
                    <?php
                        $array_url = explode("/", $comic->resourceURI);
                        $id = end($array_url);
                    ?>
                    <a href="{{route('comics', $id)}}">{{$comic->name}}</a><br/>
                @endforeach
            </div>
            @endforeach
    
</body>
</html>
