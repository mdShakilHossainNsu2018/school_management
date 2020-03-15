



<div class="card" style="margin-top: -8rem;" >
    <div class="card-header"><h1 class="Upcoming events text-center">Upcoming events</h1></div>


    <div class="card-deck p-3" >

        @foreach($upcomingEventsData as $events)
        <div class="card">
            <img src="{{$events->image_path}}" class="card-img-top align-self-center p-2" style="height: 20rem;" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$events->title}}</h5>
                <p class="card-text">{{$events->content}}</p>

                                @if($events->created_at)

                                    <p class="card-text"><small class="text-muted">{{$events->created_at->diffForHumans()}}</small></p>
                                    @endif



            </div>
        </div>

            @endforeach
    </div>
    <a href="" class="badge-pill font-weight-bolder align-self-end p-2">MORE EVENTS ></a>
</div>



