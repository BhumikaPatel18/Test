@extends('layouts.main')
@push('title')
<title>home</title>
<style>
.col{
  text-align: center;
    margin: auto;
}


</style>
@endpush
@section('main-section')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/cricket_images/posing.jpg" alt="First slide" height= "550px" width= "100%">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/cricket_images/anthem.jpg" alt="Second slide" height= "550px" width= "100%">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/cricket_images/cup.jpg" alt="Third slide" height= "550px" width= "100%">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="text-center">
        <div class="row">
          <div class="col">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/cricket_images/winning.jpg" alt="First slide" height= "400px" width= "50%">
              </div>
          </div>
          <div class="col">
              <h2>About us</h2>
              <span class="align-middle"> Sahara India Pariwar is bringing the opportunity to learn, master and excel in a sport that has been called by many as the religion of the nation. Cricket is not just a sport in India but is also a game that unites us all as one in celebrating the achievements of our nation. CSD Sahara Cricket Academy at Nabikot Nandana, Bakshi Ka Talab, on Sitapur Road in Lucknow, under..VIEW</span>
            <div><a class="btn btn-primary" href="/about" role="button">view more details</a></div>
        </div>
        </div>
</div>


<div class="text-center">
    <div class="row">
      <div class="col">
      <div  class="msg_ctr">
          <div class ="abt_cntr">
        <h2>About us</h2>
        <p style="text-align:middle;">Sahara India Pariwar is bringing the opportunity to learn, master and excel in a sport that has been called by many as the religion of the nation. Cricket is not just a sport in India but is also a game that unites us all as one in celebrating the achievements of our nation. CSD Sahara Cricket Academy at Nabikot Nandana, Bakshi Ka Talab, on Sitapur Road in Lucknow, under..VIEW</p>
          </div>
    </div>

        <a class="btn btn-primary" href="/about" role="button">view more details</a>
           </div>
      <div class="col">
             <div class="carousel-item active">
                <img class="d-block w-100" src="/cricket_images/career.jfif" alt="First slide" height= "400px" width= "50%">
               </div>
        </div>
    </div>
</div>



<div class="position-static">...</div>
<div class="position-relative">...</div>
<div class="position-absolute">...</div>
<div class="position-fixed">...</div>
<div class="position-sticky">...</div>
@endsection
