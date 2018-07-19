@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="{{ asset('js/trophy.js') }}"></script>
    {{--<div class="rate">--}}
        {{--<h1 class="rate--param">XXX%</h1>--}}
        {{--<p class="rate--comp">completed.</p>--}}
    {{--</div>--}}

    <article class="inner">
      <!--属性トロフィー-->
      <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Nature</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oAttribute["Nature"]->AttributeCount) ? $oAttribute["Nature"]->AttributeCount:0/isset($mAttribute["Nature"]->AttributeCount) ? $mAttribute["Nature"]->AttributeCount:0)*100;
            ?>">
          </div>
      </section>
      <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Food</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oAttribute["Food"]->AttributeCount) ? $oAttribute["Food"]->AttributeCount:0/isset($mAttribute["Food"]->AttributeCount) ? $mAttribute["Food"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
      <section class="trophy">
          <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Building</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oAttribute["Building"]->AttributeCount) ? $oAttribute["Building"]->AttributeCount:0/isset($mAttribute["Building"]->AttributeCount) ? $mAttribute["Building"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
        <section class="trophy">
            <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
            <h2 class="trophy__name">Culture</h2>
            <div class="circle" data-percent="<?php
            //echo (isset($oAttribute["Culture"]->AttributeCount) ? $oAttribute["Culture"]->AttributeCount:0/isset($mAttribute["Culture"]->AttributeCount) ? $mAttribute["Culture"]->AttributeCount:0)*100;
            ?>">
            </div>
        </section>
        <section class="trophy">
            <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
            <h2 class="trophy__name">Rare</h2>
            <div class="circle" data-percent="<?php
            //echo (isset($oAttribute["Rare"]->AttributeCount) ? $oAttribute["Rare"]->AttributeCount:0/isset($mAttribute["Rare"]->AttributeCount) ? $mAttribute["Rare"]->AttributeCount:0)*100;
            ?>">
            </div>
        </section>

      <!--地方トロフィー-->
      <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Hokkaido</h2>
          <div class="circle" data-percent="<?php
          //echo (isset($oAttribute["Hokkaido"]->AttributeCount) ? $oAttribute["Hokkaido"]->AttributeCount:0/isset($mAttribute["Hokkaido"]->AttributeCount) ? $mAttribute["Hokkaido"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
      <section class="trophy">
        <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Tohoku</h2>
          <div class="circle" data-percent="<?php
          //echo (isset($oAttribute["Tohoku"]->AttributeCount) ? $oAttribute["Tohoku"]->AttributeCount:0/isset($mAttribute["Tohoku"]->AttributeCount) ? $mAttribute["Tohoku"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
      <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Kanto</h2>
          <div class="circle" data-percent="<?php
          //echo (isset($oAttribute["Kanto"]->AttributeCount) ? $oAttribute["Kanto"]->AttributeCount:0/isset($mAttribute["Kanto"]->AttributeCount) ? $mAttribute["Kanto"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
      <section class="trophy">
        <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Chubu</h2>
          <div class="circle" data-percent="<?php
          //echo (isset($oAttribute["Chubu"]->AttributeCount) ? $oAttribute["Chubu"]->AttributeCount:0/isset($mAttribute["Chubu"]->AttributeCount) ? $mAttribute["Chubu"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
      <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Kinki</h2>
          <div class="circle" data-percent="<?php
          //echo (isset($oAttribute["Kinki"]->AttributeCount) ? $oAttribute["Kinki"]->AttributeCount:0/isset($mAttribute["Kinki"]->AttributeCount) ? $mAttribute["Kinki"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
      <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Chugoku</h2>
          <div class="circle" data-percent="<?php
          //echo (isset($oAttribute["Chugoku"]->AttributeCount) ? $oAttribute["Chugoku"]->AttributeCount:0/isset($mAttribute["Chugoku"]->AttributeCount) ? $mAttribute["Chugoku"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
      <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Shikoku</h2>
          <div class="circle" data-percent="<?php
          //echo (isset($oAttribute["Shikoku"]->AttributeCount) ? $oAttribute["Shikoku"]->AttributeCount:0/isset($mAttribute["Shikoku"]->AttributeCount) ? $mAttribute["Shikoku"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
      <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Kyushu</h2>
          <div class="circle" data-percent="<?php
          //echo (isset($oAttribute["Kyushu"]->AttributeCount) ? $oAttribute["Kyushu"]->AttributeCount:0/isset($mAttribute["Kyushu"]->AttributeCount) ? $mAttribute["Kyushu"]->AttributeCount:0)*100;
          ?>">
          </div>
      </section>
    </article>
@endsection
