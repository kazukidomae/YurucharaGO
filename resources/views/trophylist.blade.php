@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="{{ asset('js/trophy.js') }}"></script>
    {{--<div class="rate">--}}
        {{--<h1 class="rate--param">XXX%</h1>--}}
        {{--<p class="rate--comp">completed.</p>--}}
    {{--</div>--}}

    <article class="inner">
      <!--属性トロフィー-->
      <div class="type">
        <p class="type__title">Attribute</p>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Nature</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oAttribute["Nature"]->AttributeCount) ? $oAttribute["Nature"]->AttributeCount:0/$mAttribute["Nature"]->AttributeCount)*100;
            ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Food</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oAttribute["Food"]->AttributeCount) ? $oAttribute["Food"]->AttributeCount:0/$mAttribute["Food"]->AttributeCount)*100;
            ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Building</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oAttribute["Building"]->AttributeCount) ? $oAttribute["Building"]->AttributeCount:0/$mAttribute["Building"]->AttributeCount)*100;
          ?>">
          </div>
        </section>
        <section class="trophy">
            <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
            <h2 class="trophy__name">Culture</h2>
            <div class="circle" data-percent="<?php
//            echo (isset($oAttribute["Culture"]->AttributeCount) ? $oAttribute["Culture"]->AttributeCount:0/$mAttribute["Culture"]->AttributeCount)*100;
            ?>">
            </div>
        </section>
        <section class="trophy">
            <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
            <h2 class="trophy__name">Rare</h2>
            <div class="circle" data-percent="<?php
//            echo (isset($oAttribute["Rare"]->AttributeCount) ? $oAttribute["Rare"]->AttributeCount:0/$mAttribute["Rare"]->AttributeCount)*100;
            ?>">
            </div>
        </section>
      </div>
      <!--地方トロフィー-->
      <div class="type">
        <p class="type__title">Region</p>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Hokkaido</h2>
          <div class="circle" data-percent="<?php
//          echo (isset($oRegion["Hokkaido"]->RegionCount) ? $oRegion["Hokkaido"]->RegionCount:0/$mRegion["Hokkaido"]->RegionCount)*100;
          ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Tohoku</h2>
          <div class="circle" data-percent="<?php
//          echo (isset($oRegion["Tohoku"]->RegionCount) ? $oRegion["Tohoku"]->RegionCount:0/$mRegion["Tohoku"]->RegionCount)*100;
          ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Kanto</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oRegion["Kanto"]->RegionCount) ? $oRegion["Kanto"]->RegionCount:0/$mRegion["Kanto"]->RegionCount)*100;
          ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Chubu</h2>
          <div class="circle" data-percent="<?php
//          echo (isset($oRegion["Chubu"]->RegionCount) ? $oRegion["Chubu"]->RegionCount:0/$mRegion["Chubu"]->RegionCount)*100;
          ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Kinki</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oRegion["Kinki"]->RegionCount) ? $oRegion["Kinki"]->RegionCount:0/$mRegion["Kinki"]->RegionCount)*100;
          ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Chugoku</h2>
          <div class="circle" data-percent="<?php
//          echo (isset($oRegion["Chugoku"]->RegionCount) ? $oRegion["Chugoku"]->RegionCount:0/$mRegion["Chugoku"]->RegionCount)*100;
          ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Shikoku</h2>
          <div class="circle" data-percent="<?php
//          echo (isset($oRegion["Shikoku"]->RegionCount) ? $oRegion["Shikoku"]->RegionCount:0/$mRegion["Shikoku"]->RegionCount)*100;
          ?>">
          </div>
        </section>
        <section class="trophy">
          <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
          <h2 class="trophy__name">Kyushu</h2>
          <div class="circle" data-percent="<?php
          echo (isset($oRegion["Kyushu"]->RegionCount) ? $oRegion["Kyushu"]->RegionCount:0/$mRegion["Kyushu"]->RegionCount)*100;
            ?>">
          </div>
        </section>
      </div>
    </article>
@endsection
