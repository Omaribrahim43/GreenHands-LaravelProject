

<section class="urgent-cause2 sec-padd">
    <div class="container">

        <div class="row">
            @foreach ($project as $item)
                <article class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item clearfix with-mb">
                        <figure class="img-box">
                            @if ($item->image)
                                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                                    style="width: 370px ; height:230px">
                            @endif
                            <div class="overlay">
                                <div class="inner-box">
                                    <div class="content-box">
                                        @if ($item->category->id == 1)
                                            <a href="{{ route('show.Donation', ['id' => $item->id]) }}">
                                                <button class="thm-btn style-2 donate-box-btn">
                                                    donate now</button>
                                            </a>
                                        @elseif ($item->category->id == 2)
                                            <a href="{{ route('show.item', ['id' => $item->id]) }}">
                                                <button class="thm-btn style-2 donate-box-btn">
                                                    donate now</button>
                                            </a>
                                        @elseif ($item->category->id == 3)
                                            <a href="{{ route('show.service', ['id' => $item->id]) }}">
                                                <button class="thm-btn style-2 donate-box-btn">
                                                    donate now</button>
                                            </a>
                                        @endif
                                        {{-- <button class="thm-btn style-2 donate-box-btn">
                                            donate now</button> --}}
                                    </div>
                                </div>
                            </div>

                        </figure>

                        <div class="content">

                            <div class="text center">
                                <a href="">
                                    <h4 class="title">

                                        @if ($item->category->id == 1)
                                            <a href="{{ route('show.Donation', ['id' => $item->id]) }}">
                                                <h4>{{ $item->title }}</h4>
                                            </a>
                                        @elseif ($item->category->id == 2)
                                            <a href="{{ route('show.item', ['id' => $item->id]) }}">
                                                <h4>{{ $item->title }}</h4>
                                            </a>
                                        @elseif ($item->category->id == 3)
                                            <a href="{{ route('show.service', ['id' => $item->id]) }}">
                                                <h4>{{ $item->title }}</h4>
                                            </a>
                                        @endif
                                    </h4>
                                </a> 
                                <p>{{ $item->short_description }}</p>
                                {{-- <div class="progress-box">
                                    <div>
                                        <div class="progress-container" style="width: 90%;">
                                            <div class="progress-bar" id="myProgressBar">90%</div>
                                        </div>
                                    </div>
                                </div> --}}
                                
                                <div class="donate clearfix">
                                 <div class="donate float_left" style="margin-left: 10px"><span> Location : </span>{{ $item->location }} </div>
                                 <br>
                                 <div class="donate float_left" style="margin-left: 10px"><span> Start Date : </span>{{ $item->start_day }} </div>
                                 {{-- <div class="donate float_left"><span> {{ $item->start_date }}  </span></div> --}}

                                </div>


                            </div>

                        </div>
                </article>
            @endforeach

        </div>
    </div>
</section>
<ul class="page_pagination center">
    <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
    <li><a href="#" class="active tran3s">1</a></li>
    <li><a href="#" class="tran3s">2</a></li>
    <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
</ul>
<br>









