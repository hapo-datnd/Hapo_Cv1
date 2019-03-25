<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/22/2019
 * Time: 11:12 PM
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
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
@section('center-header')
    <div class="row m-0 justify-content-center align-content-center w-75">
        @csrf
        <input id="title" class="input-group-text m-auto w-50" value="{{$cv->title}}">
        <a href="{{route('cvs.edit',$cv->id)}}"><button type="button" id="btnSaveSubmit" class="btn-outline-success btn">Edit</button></a>
    </div>
@endsection
@section('content')
@include('cv.cv_layouts_show.header')
<div class="content flex flex-column">
    @include('cv.cv_layouts_show.professional')
    @include('cv.cv_layouts_show.skills')
    @include('cv.cv_layouts_show.experience')
    @include('cv.cv_layouts_show.portfolio')
</div>
<footer class="flex-column flex">
    @include('cv.cv_layouts_show.footer-top')
    <div class="footer-bottom flex-row flex justify-content-center align-items-center">
        <p class="p1">2019 Flatos.com All right reserved.</p>
    </div>
</footer>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="{{ asset('css/slick/slick.js') }}"></script>
<script src="{{ asset('js/js.js') }}"></script>
<script>
    function setAttributeToModal(id) {
        let $name = $('#projectName'+id);
        $('#headerModal').html($name.val());
        $('#nameProjectModal').val($name.val());
        $('#customerProjectModal').val($('#customer'+id).val());
        $('#timeStartProjectModal').val($('#timeStart'+id).val());
        $('#timeEndProjectModal').val($('#timeEnd'+id).val());
        $('#descriptionProjectModal').val($('#description'+id).val());
        $('#positionProjectModal').val($('#position'+id).val());
        $('#responsibilityProjectModal').val($('#responsibility'+id).val());
        $('#technologyProjectModal').val($('#technology'+id).val());
        $('#teamSizeModal').val($('#teamSize'+id).val());
        $('#colorModal').val($('#color'+id).val());
        let $feature = $('#feature'+id);
        if ($feature.val() === '1') {
            $("#featureProjectModal").val('1');
        }
        if ($feature.val() === '0') {
            $("#featureProjectModal").val('0');
        }
        let $sizeDisplay = $('#size'+id);
        if ($sizeDisplay.val() === '1') {
            $("#sizeDisplayModal").val('1');
        }
        if ($sizeDisplay.val() === '2') {
            $("#sizeDisplayModal").val('2');
        }
        $('#idProjectNow').val(id);

    }

    function setAttributeToForm(id) {
        $('#projectName'+id).val($('#nameProjectModal').val());
        $('#customer'+id).val($('#customerProjectModal').val());
        $('#timeStart'+id).val($('#timeStartProjectModal').val());
        $('#timeEnd'+id).val($('#timeEndProjectModal').val());
        $('#description'+id).val($('#descriptionProjectModal').val());
        $('#position'+id).val($('#positionProjectModal').val());
        $('#responsibility'+id).val($('#responsibilityProjectModal').val());
        $('#technology'+id).val($('#technologyProjectModal').val());
        $('#teamSize'+id).val($('#teamSizeModal').val());
        $('#feature'+id).val($('#featureProjectModal').val());

        let $sizeDisplay1 = $("#sizeDisplayModal");
        $('#size'+id).val($sizeDisplay1.val());

        let $project = $('#project'+id);
        if ($sizeDisplay1.val() === '1') {
            $project.removeClass('item2');
            $project.removeClass('item1');
            $project.removeClass('show-box-1');
            $project.removeClass('show-box-2');
            $project.addClass('item1');
            $project.addClass('show-box-1');
        }
        if ($sizeDisplay1.val() === '2') {
            $project.removeClass('item1');
            $project.removeClass('item2');
            $project.removeClass('show-box-1');
            $project.removeClass('show-box-2');
            $project.addClass('item2');
            $project.addClass('show-box-2');
        }

        let $colorModal = $('#colorModal').val();
        $('#color'+id).val($colorModal);
        $project.css('background-color',$colorModal);
        alert('Save success!')
    }

    let numberProject = countGraphic("sumProject","show-box");

    function selectProjectByFeature() {
        let feature = [];
        let idProject = [];
        for (let i =0; i < numberProject; i++) {
            idProject[i] = $('.get-project')[i].id;
            let $project = $(`#${idProject[i]}`);
            let idFeature = $('.get-feature')[i].id;
            feature[i] = ($('#'+idFeature).val());
            if(feature[i] === '0') {
                $project.removeClass('d-none');
                $project.addClass('d-none');
            }

            if(feature[i] === '1') {
                $project.removeClass('d-none');
            }
        }
    }

    function selectAllProject() {
        let idProject = [];
        for (let i =0; i < numberProject; i++) {
            idProject[i] = $('.get-project')[i].id;
            let $project = $(`#${idProject[i]}`);
            $project.removeClass('d-none');
        }
    }

    function selectByProjectYear(year) {
        let idProject = [];
        let yearNow = year;
        let timeStart = [];
        let timeEnd = [];
        let yearStart = [];
        let yearEnd = [];
        const characterOfYear = 4;
        for (let i =0; i < numberProject; i++) {
            idProject[i] = $('.get-project')[i].id;
            let $project = $(`#${idProject[i]}`);
            let idTimeStart = $('.get-time-start')[i].id;
            let idTimeEnd = $('.get-time-end')[i].id;
            timeStart[i] = ($('#'+idTimeStart).val());
            timeEnd[i] = ($('#'+idTimeEnd).val());
            yearStart[i] = Number(timeStart[i].substr(0,characterOfYear));
            yearEnd[i] = Number(timeEnd[i].substr(0,characterOfYear));

            if ((yearNow < yearStart[i])||(yearNow > yearEnd[i])) {
                $project.removeClass('d-none');
                $project.addClass('d-none');

            }

            if ((yearNow >= yearStart[i])&&(yearNow <= yearEnd[i])) {
                $project.removeClass('d-none');

            }
        }
    }

</script>
@endsection
