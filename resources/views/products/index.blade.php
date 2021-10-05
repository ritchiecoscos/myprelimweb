@extends('layouts.app')

@section('content')

    <section>
        <img src="{{asset('image\honda1.jpg')}}" alt="honda1"
        width="250"
        height="250">
        <div><b>Honda Grazia 125</b></div>
        <div>P70,500.00</div>     
    </section>

    <section>
        <img src="{{asset('image\honda2.jpg')}}" alt="honda2"
        width="250"
        height="250" >
        <div><b>Honda Beat 115</b></div>
        <div>P63,000.00</div>     
    </section>

    <section>
        <img src="{{asset('image\honda3.jpg')}}" alt="honda3"
        width="250"
        height="250">
        <div><b>Honda XRM 125</b></div>
        <div>P67,500.00</div>     
    </section>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('products.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

