@extends('layouts.app')

@section('content')
<div class="rate">
  <h1 class="rate--param">XXX%</h1>
  <p class="rate--comp">completed.</p>
</div>

<article class="inner">
  <!--１段目-->
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <!--２段目-->
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <!--３段目-->
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <!--４段目-->
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">トロフィー名</h2>
  </section>
</article>
@endsection
