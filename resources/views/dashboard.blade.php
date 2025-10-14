@extends('layout.main')
@section('content')

{{-- CARD TITLE --}}
<div class="container py-5">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>


  {{-- BUTTON TITLE --}}
  <div class="container py-5">
    <button type="button" class="btn btn-primary">Primary</button>
  </div>


  {{-- FORM --}}
  <div class="container">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            WHAT IS YOLO?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            YOLO means <strong>“You Only Live Once.” </strong> It’s a simple reminder to enjoy life and make the most out of every moment. People use it when they do something fun, brave, or spontaneous, like trying something new, going on an adventure, or taking a risk. YOLO reminds us not to be afraid to live our lives and to appreciate every opportunity that comes our way, because we only live once.
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              WHO IS YOLO?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong> YOLO </strong> is a fun and energetic group made up of <strong> Juan Miguel Reyes, Ianne Zhane Barbolino, Cyris Gale Urbano,</strong> and <strong> Bonna Mae Fajardo. </strong> Together, they bring laughter, creativity, and unforgettable moments wherever they go. Juan Miguel is the cool and dependable one who always makes sure everyone’s in sync. Ianne is the bright and cheerful soul who keeps the group’s energy alive. Cyris Gale is the witty and spontaneous one, always full of surprises and good vibes. And Bonna Mae is the caring and thoughtful friend who ties everyone together with her warmth. Each of them has their own unique personality, but when they’re together, they live by their name YOLO, because you only live once, so make it count! 💫
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              HOW TO APPLY?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Joining YOLO is all about bringing good vibes, teamwork, and positivity! To apply, you just need to show that you’re fun, friendly, and ready to make great memories with the group. Be yourself, confident, energetic, and open to trying new things. You can reach out to any YOLO member like <strong> Juan Miguel, Ianne, Cyris Gale, or Bonna Mae </strong> to express your interest in joining. There’s no strict process, just a genuine heart, a lively spirit, and the courage to live by the group’s motto: <string> You Only Live Once! ✨ </strong>
            </div>
          </div>
        </div>
      </div>


      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            JOIN NOW!
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Be part of the fun and excitement with <strong> YOLO!</strong> Make new memories, meet amazing people, and live life to the fullest. Don’t wait for the moment — create it! 💫
          </div>
        </div>
      </div>
    </div>


    {{-- EMAIL ADDRESS --}}
    <div class="container py-5">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" style="color: #fefefeff;">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label" style="color: #fefefeff;">Confirm Email</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
      </div>
@endSection