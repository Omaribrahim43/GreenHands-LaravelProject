<section class="event-section style-3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">
        
              
            
                    <div class="img-box">
                        @if ($project->image)
                            <img src="{{ asset( $project->image) }}"
                                alt="{{ $project->name }}" style="height: 450px; width:600px;">
                        @endif
                    </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">

                <br><br>
                <br>
             

                    <div class="text">
                        <h2>{{ $project->title }}</h2>
                        <br><br>
                        
                        <p style="font-size:17px">{{ $project->long_description }}</p>
                        <br>
                        <p > <span style="color: black " >  Start date: </span>{{ $project->start_day }}</p>
                        <p> <span style="color: black " > Location : </span>{{ $project->location }}</p>
                        <p> <span style="color: black " > Total Budget : </span>{{ $project->budget }} JOD</p>

                        
                    </div><br><br>

            </div>
          

       

        </div>
    </div>
</section>
