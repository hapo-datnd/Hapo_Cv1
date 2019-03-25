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
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
@section('center-header')
    <div class="row m-0 justify-content-center align-content-center w-75">
        @csrf
        <input id="title" class="input-group-text m-auto w-50" value="title-CV">
        <button type="button" id="btnSaveSubmit" class="btn-outline-success btn">Save</button>
    </div>
@endsection
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            {{$err}}<br>
        @endforeach
    </div>
@endif
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
    @include('cv.validate')
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{ asset('css/slick/slick.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    <script>

        function validateInfo(id, lengthMin, lengthMax) {
            let info = '';
            switch (id) {
                case 'position':
                    info = 'Position';
                    break;
                case 'phone':
                    info = 'Phone';
                    break;
                case 'email':
                    info = 'Email';
                    break;
                case 'facebook':
                    info = 'Facebook';
                    break;
                case 'skype':
                    info = 'skype';
                    break;
                case 'chatWork':
                    info = 'Chat Work';
                    break;
                case 'address':
                    info = 'Address';
                    break;
            }
            let $value = $(`#${id}`).val();
            if ($value.trim().length <= lengthMin) {
                alert(`${info} is required!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
            if ($value.trim().length > lengthMax) {
                alert(`${info} is too long!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
        }

        function validatetextInfo(id, lengthMin, lengthMax) {
            let title = '';
            switch (id) {
                case 'summary':
                    title = 'Summary';
                    break;
                case 'professionalSkillTitle':
                    title = 'Professional Skill Title';
                    break;
                case 'personalSkillTitle':
                    title = 'Personal Skill Title';
                    break;
                case 'workExperienceTitle':
                    title = 'Work Experience Title';
                    break;
                case 'educationTitle':
                    title = 'Education Title';
                    break;
            }
            let $value = $(`#${id}`).text();
            if ($value.trim().length <= lengthMin) {
                alert(`${title} is required!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
            if ($value.trim().length > lengthMax) {
                alert(`${title} is too long!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
        }

        function validateTeamSize(id, Min, Max) {
            let $value = $(`#${id}`).val();
            if ($value < Min) {
                alert(`Team size must more than 0!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
            if ($value > Max) {
                alert(`Team size is too big!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
        }

        function validateInfoModal(id, lengthMin, lengthMax) {

            let titleModal = '';
            switch (id) {
                case 'nameProjectModal':
                    titleModal = 'Project name';
                    break;
                case 'customerProjectModal':
                    titleModal = 'Customer';
                    break;
                case 'descriptionProjectModal':
                    titleModal = 'Project description';
                    break;
                case 'positionProjectModal':
                    titleModal = 'Project position';
                    break;
                case 'responsibilityProjectModal':
                    titleModal = 'Project responsibility';
                    break;
                case 'technologyProjectModal':
                    titleModal = 'Project technology';
                    break;
            }

            let $value = $(`#${id}`).val();
            if ($value.trim().length <= lengthMin) {
                alert(`${titleModal} is required!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
            if ($value.trim().length > lengthMax) {
                alert(`${titleModal} is too long!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
        }

        function validateInfoExp(id, lengthMin, lengthMax) {
            const numberCharacterShortest = 11;
            let value = id.substring(0,numberCharacterShortest);
            let titleExp = '';
            switch (value) {
                case 'companyName':
                    titleExp = 'Company name';
                    break;
                case 'companyPosi':
                    titleExp = 'Company position';
                    break;
                case 'workContent':
                    titleExp = 'Work content';
                    break;
                case 'educationNa':
                    titleExp = 'Education name';
                    break;
                case 'educationPo':
                    titleExp = 'Education position';
                    break;
                case 'achievement':
                    titleExp = 'Education achievement';
                    break;
                case 'contentSlid':
                    titleExp = 'Slide content';
                    break;
            }

            let $value = $(`#${id}`).text();
            if ($value.trim().length <= lengthMin) {
                alert(`${titleExp} is required!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
            if ($value.trim().length > lengthMax) {
                alert(`${titleExp} is too long!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
        }

        function validateTimeExperience(id) {
            let $time = $(`#${id}`).text();
            if ($time.trim().length <= 0) {
                alert('Time is required!');
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
            let numberYear = Number($time);

            if (isNaN(numberYear)) {
                alert('You must type a number!');
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
        }



        function validateNameProSkill(id) {

            let alertSkill = 'Name skill';

            let $value = $(`#${id}`).text();
            if ($value.trim().length <= 0) {
                alert(`${alertSkill} is required!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
            if ($value.trim().length > 15) {
                alert(`${alertSkill} is too long!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }

            let nameSkillPro = '';
            let nameSkillproNow = $(`#${id}`).text();
            let numberSameName = 0;

            let numberSkillPro = countGraphic("skillSum","skill-1");
            for (let i = 0; i < numberSkillPro; i++) {
                let idNameSkillPro = $('.skill-1-p')[i].id;
                nameSkillPro = ($('#'+idNameSkillPro).text());
                if (nameSkillPro === nameSkillproNow) {
                    numberSameName = numberSameName+1;
                }
            }
            if (numberSameName > 1) {
                alert('You must type different name skill!');
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
        }

        function validateNamePerSkill(id) {

            let alertSkill = 'Name skill';

            let $value = $(`#${id}`).text();
            if ($value.trim().length <= 0) {
                alert(`${alertSkill} is required!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
            if ($value.trim().length > 15) {
                alert(`${alertSkill} is too long!`);
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }

            let nameSkillPer = '';
            let nameSkillPerNow = $(`#${id}`).text();
            let numberSameName = 0;

            let numberSkillPer = countGraphic("personal-skill","person-skill");
            for (let i = 0; i < numberSkillPer; i++) {
                let idNameSkillPer = $('.get-name-per-skill')[i].id;
                nameSkillPer = ($('#'+idNameSkillPer).text());
                if (nameSkillPer === nameSkillPerNow) {
                    numberSameName = numberSameName+1;
                }
            }
            if (numberSameName > 1) {
                alert('You must type different name skill!');
                setTimeout(function () {
                    $(`#${id}`).focus();
                });
            }
        }

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


        $(document).ready(function(){



            $("#inputGroupFile01").change(function(event) {
                let check = validateAndReadURL(this,'#avatarCvMini');
                if(check === true){
                    readURL(this,'#avatar-cv');
                }
            });

            function validateAndReadURL(input, id) {
                if (input.files && input.files[0]) {
                    let fileInput = $("#inputGroupFile01");
                    let filePath = fileInput.val();
                    let allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                    if (!allowedExtensions.exec(filePath)) {
                        alert('Please upload file have type: .jpeg/.jpg/.png only.');
                        fileInput.val('');
                        return false;
                    } else {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            let url = 'url(' + e.target.result + ')';
                            $(id).css('background-image', url);
                        };
                        reader.readAsDataURL(input.files[0]);
                        return true;
                    }

                }
            }

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
                let fileInput = $(this);
                let filePath = fileInput.val();
                let allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                if (!allowedExtensions.exec(filePath)) {
                    alert('Please upload file have type: .jpeg/.jpg/.png only.');
                    fileInput.val('');
                    return false;
                } else {
                    let idAvaFooter = $(this).parent().parent().attr('id');
                    readURL(this,'#'+idAvaFooter);
                }

            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let formData = new FormData();



            $('#btnSaveSubmit').click(function(e){

                let percentSkillPro = [];
                let nameSkillPro = [];

                let numberSkillPro = countGraphic("skillSum","skill-1");
                for (let i = 0; i < numberSkillPro; i++) {
                    let idPercentSkillPro = $('.get-percent-pro-skill')[i].id;
                    let idNameSkillPro = $('.skill-1-p')[i].id;
                    percentSkillPro[i] = Number(($('#'+idPercentSkillPro).text()));
                    nameSkillPro[i] = ($('#'+idNameSkillPro).text());
                    formData.append(`skill_pros[${i}][name]`, nameSkillPro[i]);
                    formData.append(`skill_pros[${i}][percent]`, percentSkillPro[i]);
                }

                let percentSkillPer = [];
                let nameSkillPer = [];

                let numberSkillPer = countGraphic("personal-skill","person-skill");
                for (let i = 0; i < numberSkillPer; i++) {
                    let idPercentSkillPer = $('.get-percent-per-skill')[i].id;
                    let idNameSkillPer = $('.get-name-per-skill')[i].id;
                    percentSkillPer[i] = Number(($('#'+idPercentSkillPer).text()));
                    nameSkillPer[i] = ($('#'+idNameSkillPer).text());
                    formData.append(`skill_pers[${i}][name]`, nameSkillPer[i]);
                    formData.append(`skill_pers[${i}][percent]`, percentSkillPer[i]);
                }

                let workStartTime = [];
                let workEndTime = [];
                let companyName = [];
                let workPosition = [];
                let workContent = [];

                let numberWorkExp = countGraphic("main-2-left","main-3");
                for (let i =0; i < numberWorkExp; i++) {
                    let idWorkStartTime = $('.get-start-time-work')[i].id;
                    let idWorkEndTime = $('.get-end-time-work')[i].id;
                    let idCompanyName = $('.get-company-name')[i].id;
                    let idWorkPosition = $('.get-company-position')[i].id;
                    let idWorkContent = $('.get-work-content')[i].id;

                    workStartTime[i] = Number(($('#'+idWorkStartTime).text()));
                    workEndTime[i] = Number(($('#'+idWorkEndTime).text()));
                    companyName[i] = ($('#'+idCompanyName).text());
                    workPosition[i] = ($('#'+idWorkPosition).text());
                    workContent[i] = ($('#'+idWorkContent).text());

                    formData.append(`work_experiences[${i}][start_time]`, workStartTime[i]);
                    formData.append(`work_experiences[${i}][end_time]`, workEndTime[i]);
                    formData.append(`work_experiences[${i}][position]`, workPosition[i]);
                    formData.append(`work_experiences[${i}][work_content]`, workContent[i]);
                    formData.append(`work_experiences[${i}][company_name]`, companyName[i]);

                }

                let eduStartTime = [];
                let eduEndTime = [];
                let eduName = [];
                let eduPosition = [];
                let eduAchievement = [];

                let numberEduExp = countGraphic("main-2-right","main-3");
                for (let i =0; i < numberEduExp; i++) {
                    let idEduStartTime = $('.get-start-time-edu')[i].id;
                    let idEduEndTime = $('.get-end-time-edu')[i].id;
                    let idEduName = $('.get-edu-name')[i].id;
                    let idEduPosition = $('.get-edu-position')[i].id;
                    let idAchievement = $('.get-achievement')[i].id;

                    eduStartTime[i] = Number(($('#'+idEduStartTime).text()));
                    eduEndTime[i] = Number(($('#'+idEduEndTime).text()));
                    eduName[i] = ($('#'+idEduName).text());
                    eduPosition[i] = ($('#'+idEduPosition).text());
                    eduAchievement[i] = ($('#'+idAchievement).text());

                    formData.append(`edu_experiences[${i}][start_time]`, eduStartTime[i]);
                    formData.append(`edu_experiences[${i}][end_time]`, eduEndTime[i]);
                    formData.append(`edu_experiences[${i}][position]`, eduPosition[i]);
                    formData.append(`edu_experiences[${i}][achievement]`, eduAchievement[i]);
                    formData.append(`edu_experiences[${i}][school_name]`, eduName[i]);

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
                let colorDisplay = [];
                let sizeDisplay = [];

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
                    let idColorDisplay = $('.get-color-display')[i].id;
                    let idSizeDisplay = $('.get-size-display')[i].id;

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
                    colorDisplay[i] = ($('#'+idColorDisplay).val());
                    sizeDisplay[i] = ($('#'+idSizeDisplay).val());

                    formData.append(`portfolios[${i}][name]`, projectName[i]);
                    formData.append(`portfolios[${i}][customer]`, customer[i]);
                    formData.append(`portfolios[${i}][start_time]`, timeStart[i]);
                    formData.append(`portfolios[${i}][end_time]`, timeEnd[i]);
                    formData.append(`portfolios[${i}][position]`, position[i]);
                    formData.append(`portfolios[${i}][description]`, description[i]);
                    formData.append(`portfolios[${i}][responsibilities]`, responsibility[i]);
                    formData.append(`portfolios[${i}][technologies]`, technology[i]);
                    formData.append(`portfolios[${i}][team_size]`, teamSize[i]);
                    formData.append(`portfolios[${i}][is_feature]`, feature[i]);
                    formData.append(`portfolios[${i}][color_display]`, colorDisplay[i]);
                    formData.append(`portfolios[${i}][size_display]`, sizeDisplay[i]);

                }

                let contentSlide = [];
                let idInput = [];

                let numberSlide = countGraphic("slick","get-content-slide");
                for (let i =0; i < numberSlide; i++) {
                    let idContentSlide = $('.get-content-slide')[i].id;
                    contentSlide[i] = ($('#'+idContentSlide).html());
                    formData.append(`content_slide[${i}]`, contentSlide[i]);
                    idInput[i]  = $('.input-group-file')[i].id;
                }

                for (let i =0; i < idInput.length; i++) {
                    formData.append('image_slide[]',$('#'+idInput[i])[0].files[0]);
                }

                let image = $("#inputGroupFile01")[0].files[0];
                formData.append('file',image);
                formData.append('_token', '{{csrf_token()}}');
                formData.append('title', $('#title').val());
                formData.append('first_name', $('#firstName').val());
                formData.append('position', $('#position').val());
                formData.append('last_name', $('#lastName').val());
                formData.append('date_of_birth',$('#dateOfBirth').val());
                formData.append('phone',$('#phone').val());
                formData.append('email', $('#email').val());
                formData.append('facebook', $('#facebook').val());
                formData.append('skype', $('#skype').val());
                formData.append('chat_work', $('#chatWork').val());
                formData.append('address', $('#address').val());
                formData.append('summary', $('#summary').text());
                formData.append('professional_skill_title', $('#professionalSkillTitle').text());
                formData.append('personal_skill_title', $('#personalSkillTitle').text());
                formData.append('work_experience_title', $('#workExperienceTitle').text());
                formData.append('education_title', $('#educationTitle').text());

                $.ajax({
                    url: "{{route('cvs.store')}}",
                    data: formData,
                    type: 'post',
                    contentType: false,
                    processData: false,
                    success: function(result){
                        window.location = '{{route('home')}}'
                    },
                    error: function (data) {
                        let errForm = [];
                        if( data.status === 422 ) {
                            let errs = data.responseJSON.errors;
                            $.each(errs, function (key, value) {
                                errForm.push(value[0]);
                            })
                        }
                        alert(errForm[0]);
                    }
                });

            });
        });
    </script>
@endsection
