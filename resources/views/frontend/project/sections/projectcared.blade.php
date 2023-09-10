
<section class="eventlist">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="outer-box sec-padd event-style2">
                    @foreach($project as $item){

                            <div class="item style-1 clearfix">
                                <div class="img-column float_left">
                                    <figure class="img-holder">
                                        @if ($item->image)
                                                <img src="{{ asset('frontend/images/project/' . $item->image) }}" alt="{{ $item->name }}" width="300">
                                        @endif
                                        <div class="date"><span>{{$item->start_day}}<br>{{ $item->start_date }}
                                        </span></div>
                                    </figure>
                                </div>
                                <div class="text-column float_left">
                                    <div class="lower-content">

                                       

                                        <a href="{{ route('show.Donation', ['id' => $item->id]) }}"><h4>{{ $item->title }}</h4></a>

                                        <div class="text">
                                            <p> hidl iwfho kefhboq if oqkf n kf 'q'lenf qo {{$item->short_description}}</p>               
                                        </div>                            
                                    </div>
                                    <ul class="post-meta list_inline">
                                        <li><i class="fa fa-clock-o"></i>Started On: {{$item->start_day}}} </li> |&nbsp;&nbsp;&nbsp;
                                        <li><i class="fa fa-map-marker"></i> {{$item->location}}</li>
                                    </ul>
                                </div>      
                            </div>
                    @endforeach
                
                  

                    {{-- <ul class="page_pagination">
                        <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="active tran3s">1</a></li>
                        <li><a href="#" class="tran3s">2</a></li>
                        <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul> --}}

                </div>
            </div>
          



        </div>
    </div>
</section>
