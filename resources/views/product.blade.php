@extends('layouts.frontend')

@section('content')

  <main>
    <!-- See our projects -->
    <div class="see-our-projects">
      <div class="projects-wrapper">
        @if (isset($prod))
          @foreach ($prod as $product)
            <div class="">
              <div class="project-logo">
                <img src="assets/img/icon/go-sm-logo-color.svg" alt="">
              </div>
              <p class="project-title">{{ $product->name }}</p>
              <p class="project-description">{{ $product->description }}</p>
              <p><strike>${{ $product->price }}</strike>    ${{ $product->sale_price }}</p>
            </div>
            <button-component product-id="{{ $product->id }}" user-id="{{ auth()->user()->id ?? 0}}"></button-component>
          @endforeach
        @endif
      </div>
    </div>
  </main>

@endsection
      