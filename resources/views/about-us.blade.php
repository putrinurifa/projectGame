@extends('layouts.app')

@section('statusAbout')
    {{$status}}
   
@endsection

@section('content')
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>About Us</h4>
                            <h2><i><u>iStudy<u></i></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br>
    <div class="container">
    <figure class="text-center">
    <h1 class="display-3">Our Teams</h1>

    </figure>
            <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-Polinema-Politeknik-Negeri-Malang-PNG-1140x1138.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Syifa’ul Ikrom Almasyriqi 1941720057 </h5>
                        <p class="card-text"></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                <img src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-Polinema-Politeknik-Negeri-Malang-PNG-1140x1138.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Muhammad Fauzan 1941720171 </h5>
                        </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-Polinema-Politeknik-Negeri-Malang-PNG-1140x1138.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Putri Nurifa Firdausia  1941720036  </h5>
                        </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-Polinema-Politeknik-Negeri-Malang-PNG-1140x1138.png" class="card-img-top" alt="...">  
                        <div class="card-body">
                            <h5 class="card-title">Rakha Elang Gunawan 1841720163   </h5>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection