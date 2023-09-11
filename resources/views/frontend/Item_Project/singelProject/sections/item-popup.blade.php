
@extends('frontend.layouts.master_popup')

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
                                    <input type="text" class="form-control" required=""
                                        value="{{ $user->phone }}"readonly>
                                </div>
                            </div>
   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <p>Address*</p>
                                    <input type="text" name="address" placeholder="" required="" value="{{ $user->address }}" readonly>
                                </div>
                            </div>
   
   
                        </div>
                    </div>

                    <ul class="payment-option">

                        <li>
                            <h4>Choose Items for Donation:</h4>
                        </li>
    
                     </ul>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="donate_tree" value="yes">{{ $project->tree_type}}                        
                    </div>
            
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="donate_tree" value="yes">{{ $project->tree_type}}
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="donate_equipments" value="yes"> {{$project->equipments}}
                    </div>

                           
                        </div>
                </form>
            </div>
        </div>

@endsection
