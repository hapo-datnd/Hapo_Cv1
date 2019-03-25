<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/5/2019
 * Time: 3:03 PM
 */
?>
<div class="content-4">

    <div class="container">
        <div class="row">
            <h2 class="col-12"><span class="before">portf</span><span class="behind">olio</span></h2>
            <div class="menu col-12">
                <ul>
                    <li><button type="button" onclick="selectAllProject()">all</button></li>
                    <li><button type="button" onclick="selectProjectByFeature()">feature</button></li>
                    @if(count($cv->portfolios))
                        @foreach($cv->portfolios as $portfolio)
                            <?php
                            $year_start[] = (int)substr($portfolio->start_time,0,4);
                            $year_end[] = (int)substr($portfolio->end_time,0,4);
                            $years = array_unique(array_merge($year_start, $year_end));
                            sort($years)
                            ?>
                        @endforeach
                        @foreach($years as $year)
                            <li><button type="button" onclick="selectByProjectYear({{$year}})">{{$year}}</button></li>
                        @endforeach
                    @endif
                    <li><button><i class="fas fa-angle-double-right"></i></button></li>
                </ul>
            </div>
            <div class="col-12 sumProject grid-container">
                @if(count($cv->portfolios))
                    @foreach($cv->portfolios as $portfolio)
                        <div  id="project{{$portfolio->id}}" style="background: {{$portfolio->color_display}}" class="grid-item position-relative item{{$portfolio->size_display}} show-box show-box-{{$portfolio->size_display}} box-1-1 flex justify-content-center align-items-center flex-row">
                            <form class="d-none" action="">
                                <input name="project-name" aria-label="project"  type="text" id="projectName{{$portfolio->id}}" class="get-id-final-project get-project-name" value="{{$portfolio->name}}">
                                <input name="customer" aria-label="project" type="text" id="customer{{$portfolio->id}}" class="get-customer" value="{{$portfolio->customer}}">
                                <input name="time-start" aria-label="project" type="date" id="timeStart{{$portfolio->id}}" class="get-time-start" value="{{$portfolio->start_time}}">
                                <input name="time-end" aria-label="project" type="date" id="timeEnd{{$portfolio->id}}" class="get-time-end" value="{{$portfolio->end_time}}">
                                <input name="description" aria-label="project" type="text" id="description{{$portfolio->id}}" class="get-description" value="{{$portfolio->description}}">
                                <input name="position" aria-label="project" type="text" id="position{{$portfolio->id}}" class="get-position" value="{{$portfolio->position}}">
                                <input name="responsibility" aria-label="project" type="text" id="responsibility{{$portfolio->id}}" class="get-responsibility" value="{{$portfolio->responsibilities}}">
                                <input name="technology" aria-label="project" type="text" id="technology{{$portfolio->id}}" class="get-technology" value="{{$portfolio->technologies}}">
                                <input name="team-size" aria-label="project" type="number" id="teamSize{{$portfolio->id}}" class="get-team-size" value="{{$portfolio->team_size}}">
                                <input  aria-label="project" id="feature{{$portfolio->id}}" name="feature" class="get-feature" value="{{$portfolio->is_feature}}">
                                <input name="color" type="color" aria-label="project" class="get-color-display" id="color{{$portfolio->id}}" value='{{$portfolio->color_display}}'>
                                <input  aria-label="project" id="size{{$portfolio->id}}" name="size" class="get-size-display" value="{{$portfolio->size_display}}">
                            </form>
                            <button type="button" onclick="deleteProjectButton({{$portfolio->id}})" class="position-absolute button-delete-project"><i class="m-0 fas fa-minus"></i></button>
                            <img onclick="setAttributeToModal({{$portfolio->id}})" data-toggle="modal" data-target="#myModal" alt="Project" src="{{asset('image/project.png')}}">
                        </div>
                    @endforeach
                @endif
                <div class="grid-item item3 show-box-1 flex justify-content-center align-items-center flex-column">
                    <button type="button" onclick="addButton5()" class="flex-row flex justify-content-center align-items-center">
                        Add project
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <h1 id="headerModal">Project-Name</h1>
                        <form>
                            <div class="form-group col-md-12">
                                <label for="name-project-modal">Name-project</label>
                                <input type="text" class="form-control" onblur="validateInfoModal(this.id, 0, 32)" id="nameProjectModal" placeholder="Name-project">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="customer-project-modal">Customer</label>
                                <input type="text" class="form-control" onblur="validateInfoModal(this.id, 0, 32)" id="customerProjectModal" placeholder="Customer">
                            </div>
                            <div class="form-group flex">
                                <div class="form-group col-md-6 mb-0">
                                    <label for="time-end-project-modal">Time Start</label>
                                    <input type="date" class="form-control" id="timeStartProjectModal" placeholder="Time Start">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="time-start-project-modal">Time End</label>
                                    <input type="date" class="form-control" id="timeEndProjectModal"  placeholder="Time End">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="description-project-modal">Description</label>
                                <input type="text" class="form-control" onblur="validateInfoModal(this.id, 0, 100)" id="descriptionProjectModal" placeholder="Description">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="position-project-modal">Position</label>
                                <input type="text" class="form-control" onblur="validateInfoModal(this.id, 0, 32)" id="positionProjectModal" placeholder="Position">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="responsibility-project-modal">Responsibility</label>
                                <input type="text" class="form-control" onblur="validateInfoModal(this.id, 0, 32)" id="responsibilityProjectModal" placeholder="Responsibility">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="technology-project-modal">Technology</label>
                                <input type="text" class="form-control" onblur="validateInfoModal(this.id, 0, 32)" id="technologyProjectModal" placeholder="Technology">
                            </div>
                            <div class="form-group flex">
                                <div class="form-group col-md-6 mb-0">
                                    <label for="team-size-modal">Team Size</label>
                                    <input type="number" onblur="validateTeamSize(this.id, 1, 100)" class="form-control" id="teamSizeModal" placeholder="Team Size">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="feature-project-modal">Feature select</label>
                                    <select class="form-control" id="featureProjectModal">
                                        <option id="featureModal" value="1">Feature</option>
                                        <option id="noneFeatureModal" value="0">None Feature</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group flex">
                                <div class="form-group col-md-6 mb-0">
                                    <label for="feature-project-modal">Size Display</label>
                                    <select class="form-control" id="sizeDisplayModal">
                                        <option id="size1Modal" value="1">Size 1</option>
                                        <option id="size2Modal" value="2">Size 2</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="feature-project-modal">Color Display</label>
                                    <input class="form-control" id="colorModal" type="color">
                                </div>
                            </div>
                            <input type="number" class="d-none" value="" id="idProjectNow">
                            <div class="form-group col-md-12 flex justify-content-center align-content-center">
                                <button type="button" class="btn col-md-6  btn-outline-success" onclick="setAttributeToForm($('#idProjectNow').val())">Save</button>
                                <button type="button" class="btn col-md-6  btn-outline-dark" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
