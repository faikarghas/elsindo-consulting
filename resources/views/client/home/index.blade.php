@extends('client/components/layout.index')
@section('content')

<main page="home">
    <section class="section__first">
        <div  class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12">
                    <div class="banner">
                        <picture>
                            <source media="(max-width:650px)" srcset="{{asset('images/banner/Landing-Page-Banner-Website-Cover-m.jpeg')}}">
                            <img src="{{asset('images/banner/Landing-Page-Banner-Website-Cover.jpg')}}" alt="banner" width="100%">
                        </picture>
                    </div>
                    <div>
                        {{-- <button  class="btn btn-primary">Click Here For Free Consultation</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> 

@endsection


