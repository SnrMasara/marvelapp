    @extends('layouts.app')
    @section('content')
<div class="container bg-black text-white flex-auto bg-center">
    <div class="">
        <h1 style="
        font-family: 'Rajdhani', sans-serif;
    color: white;
    text-align: center;padding-bottom:25px;
    letter-spacing: 10px;"> List of Characters </h1>
    </div>
    <form action="{{route('search')}}" action="GET" class="flex-auto">
    
        <div class="form-group" style="width:80%;margin:0 auto;">
            <input type="text"
            name="name"
            class="form-control flex w-8"
            style="width: 80%;"
            placeholder="Enter a character name"
            value=''>

            <button class="btn btn-light btn-sm" type="submit" style="
            display: flex;
    justify-content: space-between;
    padding-bottom: 25px;
            "> Search </button>
        </div>
    </form>
    <div class="show">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                  <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="show">
                            @foreach ($result as $r)
                                <div class='input-group'>
                                    <h4>{{$r->name}}</h4>
                                    <?= '<img src="'.$r->thumbnail->path.'.'.$r->thumbnail->extension.'" class="img  w-full object-cover object-center"/>'; ?>
                                    <br/>
                                    <a href="{{ route('character', $r->id)}}"class="leading-relaxed mb-3 btn btn-danger btn-sm">More</a>
                                </div>
                            @endforeach
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
    </div>
    <div class="buttons lex mx-auto mt-16 text-white bg-yellow-700 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-400 rounded text-lg">
        @if($offset != 0)
            <a href="{{route('index', $offset - 20)}}" class="btn btn-light">Previous</a>
        @else
            <a href="{{route('index', $offset - 20)}}" class=""></a>
        @endif

        @if($total >= $offset + 20)
            <a href="{{route('index', $offset + 20)}}" class="btn btn-light">Next</a>
        @endif
        
        </div>    
    </div>
</div>            

    @endsection
