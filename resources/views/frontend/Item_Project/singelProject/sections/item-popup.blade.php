


@section('content')
    <div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <form class="default-form" action="{{ route('store.item') }}" method="post" novalidate="novalidate">
                @csrf
                <div class="form-bg">
                    <div class="row clearfix">
                        <li>
                            <input type="hidden" name="project_id" value="{{ $id }}" required>

                        </li>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Name</p>
                                <input type="text" class="form-control" required="" aria-required="true"
                                    value="{{ $user->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Your Email</p>
                                <input type="email" class="form-control required email" required=""
                                    aria-required="true" value="{{ $user->email }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Phone</p>
                                <input type="text" class="form-control" required="" name="phone"
                                    value="{{ $user->phone }}">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Address*</p>
                                <input type="text" name="address" placeholder="" required=""
                                    value="{{ $user->address }}">
                            </div>
                        </div>


                    </div>
                </div>

                <ul class="payment-option">

                    <h4>Choose Items for Donation:</h4>


                </ul>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="donate_item" value="Tree" required>
                    <label class="form-check-label"> Tree :{{$project->tree_type}}</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="donate_item" value="Fertilizer" required>
                    <label class="form-check-label">Fertilizer : {{$project->fertilizer}}</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="donate_item" value="Equipments" required>
                    <label class="form-check-label">Equipments : {{$project->equipments}}</label>
                </div>


                <div class="center">

                    <button class="thm-btn sbmt-btn" type="submit">Donate Now</button>
                </div>
            </form>
        </div>
    </div>
@endsection
