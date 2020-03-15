{{--{{$carouselData}}--}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding: 0; margin: 0">
    <ol class="carousel-indicators">

        @foreach($carouselData as $data)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$data->id}}"></li>

        @endforeach


        {{--        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
        {{--        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
    </ol>
    <div class="carousel-inner">


        @foreach($carouselData as $data)

            @if($data-> id == 1)
                <div class="carousel-item active">
                    @else
                        <div class="carousel-item">
                            @endif


                            <img class="d-block w-100" style="height: 25rem;" src="{{$data->image_path}}">

                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$data->carousel_title}}</h5>
                                <p>{{$data->carousel_content}}</p>
                            </div>
                        </div>
                        @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
    </div>


