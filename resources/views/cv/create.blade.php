<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/13/2019
 * Time: 10:15 AM
 */
?>
@extends('layouts.app')
@section('head')
    <meta charset="utf-8">
    <title>HapoCV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-4.2.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css_cv/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css_cv/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css_cv/responsive.css')}}">

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
@section('center-header')
    <div class="row m-0 justify-content-center align-content-center w-75">
        @csrf
        <input id="title" class="input-group-text m-auto w-50" value="title-CV">
        <button type="button" id="btnSaveSubmit" class="btn-outline-success btn">Save</button>
    </div>
@endsection
@section('content')
    @include('cv.cv_layouts_create.header')
    <div class="content flex flex-column">
        @include('cv.cv_layouts_create.professional')
        @include('cv.cv_layouts_create.skills')
        @include('cv.cv_layouts_create.experience')
        @include('cv.cv_layouts_create.portfolio')
    </div>
    <footer class="flex-column flex">
        @include('cv.cv_layouts.footer-top')
        <div class="footer-bottom flex-row flex justify-content-center align-items-center">
            <p class="p1">2019 Flatos.com All right reserved.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="{{ asset('css/slick/slick.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    <script>
        $(document).ready(function(){

            let name = $('#first_name').html()+' '+$('#last_name').html();
            $('#name').html(name);

            $('#first_name').blur(function () {
                let name = $('#first_name').html()+' '+$('#last_name').html();
                $('#name').html(name);
            });

            $('#last_name').blur(function () {
                let name = $('#first_name').html()+' '+$('#last_name').html();
                $('#name').html(name);
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            $('#btnSaveSubmit').click(function(e){

                let percentSkillPro = [];
                let nameSkillPro = [];

                let numberSkillPro = countGraphic("skillSum","skill-1");
                for (let i = 0; i < numberSkillPro; i++) {
                    let idPercentSkillPro = $('.get-percent-pro-skill')[i].id;
                    let idNameSkillPro = $('.skill-1-p')[i].id;
                    percentSkillPro[i] = ($('#'+idPercentSkillPro).html());
                    nameSkillPro[i] = ($('#'+idNameSkillPro).html());
                }

                let percentSkillPer = [];
                let nameSkillPer = [];

                let numberSkillPer = countGraphic("personal-skill","person-skill");
                for (let i = 0; i < numberSkillPer; i++) {
                    let idPercentSkillPer = $('.get-percent-per-skill')[i].id;
                    let idNameSkillPer = $('.get-name-per-skill')[i].id;
                    percentSkillPer[i] = ($('#'+idPercentSkillPer).html());
                    nameSkillPer[i] = ($('#'+idNameSkillPer).html());
                }



                e.preventDefault();
                $.ajax({
                    url: "{{route('cvs.store')}}",
                    method: 'post',
                    data: {
                        title: $('#title').val(),
                        first_name: $('#first_name').html(),
                        last_name: $('#last_name').html(),
                        position: $('#position').html(),
                        date_of_birth: $('#date_of_birth').html(),
                        phone: $('#phone').html(),
                        email: $('#email').html(),
                        facebook: $('#facebook').html(),
                        skype: $('#skype').html(),
                        chat_work: $('#chat_work').html(),
                        address: $('#address').html(),
                        summary: $('#summary').html(),
                        professional_skill_title: $('#professional_skill_title').html(),
                        personal_skill_title: $('#personal_skill_title').html(),
                        work_experience_title: $('#work_experience_title').html(),
                        education_title: $('#education_title').html(),
                        name_skill_pro: nameSkillPro,
                        percent_skill_pro: percentSkillPro,
                        name_skill_per: nameSkillPer,
                        percent_skill_per: percentSkillPer,
                        image: 'ava.png',
                        image_mini: 'ava.png',
                    },
                    success: function(result){
                        console.log(result);
                    }});
            });
        });
    </script>
@endsection
