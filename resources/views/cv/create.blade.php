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
        @include('cv.cv_layouts_create.footer-top')
        <div class="footer-bottom flex-row flex justify-content-center align-items-center">
            <p class="p1">2019 Flatos.com All right reserved.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="{{ asset('css/slick/slick.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    <script>

        function setAttributeToModal(id) {
            $('#header-modal').html($('#project-name'+id).val());
            $('#name-project-modal').val($('#project-name'+id).val());
            $('#customer-project-modal').val($('#customer'+id).val());
            $('#time-start-project-modal').val($('#time-start'+id).val());
            $('#time-end-project-modal').val($('#time-end'+id).val());
            $('#description-project-modal').val($('#description'+id).val());
            $('#position-project-modal').val($('#position'+id).val());
            $('#responsibility-project-modal').val($('#responsibility'+id).val());
            $('#technology-project-modal').val($('#technology'+id).val());
            $('#team-size-modal').val($('#team-size'+id).val());
            if ($('#feature'+id).val() === '1') {
                $("#feature-project-modal").val('1');
            }
            if ($('#feature'+id).val() === '0') {
                $("#feature-project-modal").val('0');
            }
            $('#idProjectNow').val(id);

        }

        function setAttributeToForm(id) {
            $('#project-name'+id).val($('#name-project-modal').val());
            $('#customer'+id).val($('#customer-project-modal').val());
            $('#time-start'+id).val($('#time-start-project-modal').val());
            $('#time-end'+id).val($('#time-end-project-modal').val());
            $('#description'+id).val($('#description-project-modal').val());
            $('#position'+id).val($('#position-project-modal').val());
            $('#responsibility'+id).val($('#responsibility-project-modal').val());
            $('#technology'+id).val($('#technology-project-modal').val());
            $('#team-size'+id).val($('#team-size-modal').val());
            $('#feature'+id).val($('#feature-project-modal').val());
            alert('Save success!')
        }


        $(document).ready(function(){

            $("#inputGroupFile01").change(function(event) {
                readURL(this,'#avatar-cv-mini');
                readURL(this,'#avatar-cv');

            });

            function readURL(input, id) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let url = 'url(' + e.target.result + ')';
                        $(id).css('background-image', url);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(document).on('change','.input-group-file',function () {
                let idAvaFooter = $(this).parent().parent().attr('id');
                alert(idAvaFooter);
                readURL(this,'#'+idAvaFooter);
            });

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
                let skillPros = [];

                let numberSkillPro = countGraphic("skillSum","skill-1");
                for (let i = 0; i < numberSkillPro; i++) {
                    let idPercentSkillPro = $('.get-percent-pro-skill')[i].id;
                    let idNameSkillPro = $('.skill-1-p')[i].id;
                    percentSkillPro[i] = ($('#'+idPercentSkillPro).html());
                    nameSkillPro[i] = ($('#'+idNameSkillPro).html());
                    let skillPro = {
                        name: nameSkillPro[i],
                        percent: percentSkillPro[i],
                    }
                    skillPros.push(skillPro);
                }

                let percentSkillPer = [];
                let nameSkillPer = [];
                let skillPers = [];

                let numberSkillPer = countGraphic("personal-skill","person-skill");
                for (let i = 0; i < numberSkillPer; i++) {
                    let idPercentSkillPer = $('.get-percent-per-skill')[i].id;
                    let idNameSkillPer = $('.get-name-per-skill')[i].id;
                    percentSkillPer[i] = ($('#'+idPercentSkillPer).html());
                    nameSkillPer[i] = ($('#'+idNameSkillPer).html());
                    let skillPer = {
                        name: nameSkillPer[i],
                        percent: percentSkillPer[i],
                    }
                    skillPers.push(skillPer);
                }

                let workStartTime = [];
                let workEndTime = [];
                let companyName = [];
                let workPosition = [];
                let workContent = [];
                let workExperiences = [];

                let numberWorkExp = countGraphic("main-2-left","main-3");
                for (let i =0; i < numberWorkExp; i++) {
                    let idWorkStartTime = $('.get-start-time-work')[i].id;
                    let idWorkEndTime = $('.get-end-time-work')[i].id;
                    let idCompanyName = $('.get-company-name')[i].id;
                    let idWorkPosition = $('.get-company-position')[i].id;
                    let idWorkContent = $('.get-work-content')[i].id;

                    workStartTime[i] = ($('#'+idWorkStartTime).html());
                    workEndTime[i] = ($('#'+idWorkEndTime).html());
                    companyName[i] = ($('#'+idCompanyName).html());
                    workPosition[i] = ($('#'+idWorkPosition).html());
                    workContent[i] = ($('#'+idWorkContent).html());

                    let workExperience = {
                        start_time: workStartTime[i],
                        end_time: workEndTime[i],
                        position: workPosition[i],
                        work_content: workContent[i],
                        company_name: companyName[i],
                    }

                    workExperiences.push(workExperience);
                }

                let eduStartTime = [];
                let eduEndTime = [];
                let eduName = [];
                let eduPosition = [];
                let eduAchievement = [];
                let eduExperiences = [];

                let numberEduExp = countGraphic("main-2-right","main-3");
                for (let i =0; i < numberEduExp; i++) {
                    let idEduStartTime = $('.get-start-time-edu')[i].id;
                    let idEduEndTime = $('.get-end-time-edu')[i].id;
                    let idEduName = $('.get-edu-name')[i].id;
                    let idEduPosition = $('.get-edu-position')[i].id;
                    let idAchievement = $('.get-achievement')[i].id;

                    eduStartTime[i] = ($('#'+idEduStartTime).html());
                    eduEndTime[i] = ($('#'+idEduEndTime).html());
                    eduName[i] = ($('#'+idEduName).html());
                    eduPosition[i] = ($('#'+idEduPosition).html());
                    eduAchievement[i] = ($('#'+idAchievement).html());

                    let eduExperience = {
                        start_time: eduStartTime[i],
                        end_time: eduEndTime[i],
                        position: eduPosition[i],
                        achievement: eduAchievement[i],
                        school_name: eduName[i],
                    }

                    eduExperiences.push(eduExperience);
                }

                let projectName = [];
                let customer = [];
                let timeStart = [];
                let timeEnd = [];
                let position = [];
                let description = [];
                let responsibility = [];
                let technology = [];
                let teamSize = [];
                let feature = [];
                let portfolios = [];

                let numberProject = countGraphic("sumProject","show-box");
                for (let i =0; i < numberProject; i++) {
                    let idProjectName = $('.get-project-name')[i].id;
                    let idCustomer = $('.get-customer')[i].id;
                    let idTimeStart = $('.get-time-start')[i].id;
                    let idTimeEnd = $('.get-time-end')[i].id;
                    let idPosition = $('.get-position')[i].id;
                    let idDescription = $('.get-description')[i].id;
                    let idResponsibility = $('.get-responsibility')[i].id;
                    let idTechnology = $('.get-technology')[i].id;
                    let idTeamSize = $('.get-team-size')[i].id;
                    let idFeature = $('.get-feature')[i].id;

                    projectName[i] = ($('#'+idProjectName).val());
                    customer[i] = ($('#'+idCustomer).val());
                    timeStart[i] = ($('#'+idTimeStart).val());
                    timeEnd[i] = ($('#'+idTimeEnd).val());
                    position[i] = ($('#'+idPosition).val());
                    description[i] = ($('#'+idDescription).val());
                    responsibility[i] = ($('#'+idResponsibility).val());
                    technology[i] = ($('#'+idTechnology).val());
                    teamSize[i] = ($('#'+idTeamSize).val());
                    feature[i] = ($('#'+idFeature).val());

                    let portfolio = {
                        name: projectName[i],
                        customer: customer[i],
                        start_time: timeStart[i],
                        end_time: timeEnd[i],
                        position: position[i],
                        description: description[i],
                        responsibilities: responsibility[i],
                        technologies: technology[i],
                        team_size: teamSize[i],
                        is_feature: feature[i],
                    }

                    portfolios.push(portfolio);
                }

                let contentSlide = [];
                let idInput = [];
                let imageSlide = [];

                let numberSlide = countGraphic("slick","get-content-slide");
                alert(numberSlide);
                for (let i =0; i < numberSlide; i++) {
                    let idContentSlide = $('.get-content-slide')[i].id;
                    contentSlide[i] = ($('#'+idContentSlide).html());
                    idInput[i]  = $('.input-group-file')[i].id;
                }

                let avaName ='';

                if ($("#inputGroupFile01").val()) {
                    let filename = $("#inputGroupFile01").val();
                    avaName = filename.substring(filename.lastIndexOf('\\')+1);
                } else {
                    avaName = 'ava.png'
                }



                let formData = new FormData();
                let image = $("#inputGroupFile01")[0].files[0];
                for (let i =0; i < idInput.length; i++) {
                    formData.append('image_slide[]',$('#'+idInput[i])[0].files[0]);
                }
                formData.append('file',image);
                formData.append('_token', '{{csrf_token()}}');
                formData.append('title', $('#title').val());
                formData.append('first_name', $('#first_name').html());
                formData.append('position', $('#position').html());
                formData.append('last_name', $('#last_name').html());
                formData.append('date_of_birth',$('#date_of_birth').html());
                formData.append('phone',$('#phone').html());
                formData.append('email', $('#email').html());
                formData.append('facebook', $('#facebook').html());
                formData.append('skype', $('#skype').html());
                formData.append('chat_work', $('#chat_work').html());
                formData.append('address', $('#address').html());
                formData.append('summary', $('#summary').html());
                formData.append('professional_skill_title', $('#professional_skill_title').html());
                formData.append('personal_skill_title', $('#personal_skill_title').html());
                formData.append('work_experience_title', $('#work_experience_title').html());
                formData.append('education_title', $('#education_title').html());
                formData.append('skill_pros', JSON.stringify(skillPros));
                formData.append('skill_pers', JSON.stringify(skillPers));
                formData.append('work_experiences', JSON.stringify(workExperiences));
                formData.append('edu_experiences', JSON.stringify(eduExperiences));
                formData.append('portfolios', JSON.stringify(portfolios));
                formData.append('image', avaName);
                formData.append('image_mini', avaName);
                formData.append('content_slide', JSON.stringify(contentSlide));

                $.ajax({
                    url: "{{route('cvs.store')}}",
                    data: formData,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function(result){
                        console.log(result);
                    }
                });

            });
        });
    </script>
@endsection
