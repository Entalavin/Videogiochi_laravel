@extends('layouts.app')

@section('title', 'Home Videogames')

@section('content')
<div>
    <h1 class="text-center" style="padding-top: 50px; padding-bottom: 50px"><i class="fa-solid fa-gamepad"></i> WELCOME! <i class="fa-solid fa-ghost"></i></h1>
    <p class="px-5">
        Pueri er traffik herbae kilos impellit ex quo indecim anno habet ergo ne scripseritis falsa verba sus deus in meum dm ne foedaverits cum vestris stupidis verbis turpes meretrices culi nigri traffik trapis rex est kilos impellit nos repperini qui expergiscintur mane et repperini faciunt non facimus intelligisne hoc est trap veritati omnes canti quem scribemus sunt nostra vita intellegisne gallagher traffikque agimus vita in film se traffik captus est intellegisne quod kilos habebat non scitis quantum carebor esse cui traffik trappando omnes dies sue domi intellegisne non scitis quantum carebor er traffik et omnia quae egimus et risos et omnia res in quibus omnes vos derisimus. Pueri er traffik herbae kilos impellit ex quo indecim anno habet ergo ne scripseritis falsa verba sus deus in meum dm ne foedaverits cum vestris stupidis verbis turpes meretrices culi nigri traffik trapis rex est kilos impellit nos repperini qui expergiscintur mane et repperini faciunt non facimus intelligisne hoc est trap veritati omnes canti quem scribemus sunt nostra vita intellegisne gallagher traffikque agimus vita in film se traffik captus est intellegisne quod kilos habebat non scitis quantum carebor esse cui traffik trappando omnes dies sue domi intellegisne non scitis quantum carebor er traffik et omnia quae egimus et risos et omnia res in quibus omnes vos derisimus
    </p>
    <hr class="border border-danger border-2 opacity-50">
    <h1 class="text-center" style="padding-top: 50px; padding-bottom: 50px">I migliori 6</h1>
    {{-- @dd($videogames); --}}

    <div class="container">
        <div class="row mt-4 px-1">
          <div class="col-md-6 col-lg-2 mb-5 px-4" data-bs-toggle="modal" data-bs-target="#oritbf">
            <div class="best5-images">
              <img src="img/ori-and-the-blind-forest.jpg" alt="oritbf">
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mb-5 px-4" data-bs-toggle="modal" data-bs-target="#uncharted">
            <div class="best5-images">
              <img src="img/1719737668_Nathan_Drake_Collection_cover_art.png" alt="uncharted">
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mb-5 px-4" data-bs-toggle="modal" data-bs-target="#astroneer">
            <div class="best5-images">
              <img src="img/1719680925_astroneer-cover.jpg" alt="astroneer">
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mb-5 px-4" data-bs-toggle="modal" data-bs-target="#lorelai">
            <div class="best5-images">
              <img src="img/1719680918_Lorelei_and_the_Laser_Eyes-cover.jpg" alt="lorelai">
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mb-5 px-4" data-bs-toggle="modal" data-bs-target="#atrio">
            <div class="best5-images">
              <img src="img/1719680895_atrio-cover.jpg" alt="atrio">
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mb-5 px-4" data-bs-toggle="modal" data-bs-target="#tunic">
            <div class="best5-images">
              <img src="img/1719680886_Tunic-cover.jpg" alt="tunic">
            </div>
          </div>
        </div>  
    </div>

    <hr class="border border-danger border-2 opacity-50">
    <p class="px-5">
        Pueri er traffik herbae kilos impellit ex quo indecim anno habet ergo ne scripseritis falsa verba sus deus in meum dm ne foedaverits cum vestris stupidis verbis turpes meretrices culi nigri traffik trapis rex est kilos impellit nos repperini qui expergiscintur mane et repperini faciunt non facimus intelligisne hoc est trap veritati omnes canti quem scribemus sunt nostra vita intellegisne gallagher traffikque agimus vita in film se traffik captus est intellegisne quod kilos habebat non scitis quantum carebor esse cui traffik trappando omnes dies sue domi intellegisne non scitis quantum carebor er traffik et omnia quae egimus et risos et omnia res in quibus omnes vos derisimus. Pueri er traffik herbae kilos impellit ex quo indecim anno habet ergo ne scripseritis falsa verba sus deus in meum dm ne foedaverits cum vestris stupidis verbis turpes meretrices culi nigri traffik trapis rex est kilos impellit nos repperini qui expergiscintur mane et repperini faciunt non facimus intelligisne hoc est trap veritati omnes canti quem scribemus sunt nostra vita intellegisne gallagher traffikque agimus vita in film se traffik captus est intellegisne quod kilos habebat non scitis quantum carebor esse cui traffik trappando omnes dies sue domi intellegisne non scitis quantum carebor er traffik et omnia quae egimus et risos et omnia res in quibus omnes vos derisimus
    </p>
</div>
{{-- modali --}}
{{-- 1 --}}
<div class="modal fade" id="oritbf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Ori and the blind forest</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Sviluppato da: Moon Studios</h2>
        <h2>Publisher: Xbox Game Studios</h2> <br>
        <h3 class="text-center starreview"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>
{{-- 2 --}}
<div class="modal fade" id="uncharted" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Uncharted: The Nathan Drake Collection</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Sviluppato da: Moon Studios</h2>
        <h2>Publisher: Xbox Game Studios</h2> <br>
        <h3 class="text-center starreview"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>
{{-- 3 --}}
<div class="modal fade" id="astroneer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Astroneer</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Sviluppato da: Moon Studios</h2>
        <h2>Publisher: Xbox Game Studios</h2> <br>
        <h3 class="text-center starreview"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>
{{-- 4 --}}
<div class="modal fade" id="lorelai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Lorelai and the laser eyes</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Sviluppato da: Moon Studios</h2>
        <h2>Publisher: Xbox Game Studios</h2> <br>
        <h3 class="text-center starreview"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>
{{-- 5 --}}
<div class="modal fade" id="atrio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Atrio: The Dark Wild</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Sviluppato da: Moon Studios</h2>
        <h2>Publisher: Xbox Game Studios</h2> <br>
        <h3 class="text-center starreview"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>
{{-- 6 --}}
<div class="modal fade" id="tunic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel">Tunic</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Sviluppato da: Moon Studios</h2>
        <h2>Publisher: Xbox Game Studios</h2> <br>
        <h3 class="text-center starreview"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>

@endsection