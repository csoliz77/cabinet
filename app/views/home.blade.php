@extends('templates.master')

@section('content')

<div class="boxwrap">

    <div class="home-box">
        <a href="{{URL::to('/furniture') }}">
            {{ HTML::image('assets/imgs/f_coffee_table.jpg', 'Furniture') }}
        </a>
    </div>


    <div class="home-box">
        <a href="{{ URL::to('/furniture') }}">
            {{ HTML::image('assets/imgs/furniture_text.jpg', 'Furniture') }}
        </a>
    </div>

    <div class="home-box">
        <a href="{{ URL::to('/furniture') }}">
            {{ HTML::image('assets/imgs/f_jewelery_box.jpg', 'Furniture') }}
        </a>
    </div>

    <div class="home-box">
        <a href="{{ URL::to('/cabinetry') }}">
            {{ HTML::image('assets/imgs/f_armoire.jpg', 'Cabinetry') }}
        </a>
    </div>

    <div class="home-box">
        <a href="{{ URL::to('/cabinetry') }}">
            {{ HTML::image('assets/imgs/cabinetry_text.jpg', 'Cabinetry') }}
        </a>
    </div>

    <div class="home-box">
        <a href="{{ URL::to('/cabinetry') }}">
            {{ HTML::image('assets/imgs/f_wall_unit.jpg', 'Cabinetry') }}
        </a>
    </div>

    <div class="home-box">
        <a href="{{ URL::to('/kitchen') }}">
            {{ HTML::image('assets/imgs/f_kitchen_cabinet.jpg', 'Kitchen &amp; Bath') }}
        </a>
    </div>

    <div class="home-box">
        <a href="{{ URL::to('/kitchen') }}">
            {{ HTML::image('assets/imgs/kitchen_text.jpg', 'Kitchen &amp; Bath') }}
        </a>
    </div>

    <div class="home-box">
        <a href="{{ URL::to('/kitchen') }}">
            {{ HTML::image('assets/imgs/f_vanity_bathroom.jpg', 'Kitchen &amp; Bath') }}
        </a>
    </div>
</div>
@stop
