<?php
/**
 * Created by PhpStorm.
 * User: Dat
 * Date: 3/5/2019
 * Time: 3:07 PM
 */
?>
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-12 flex flex-column">
                <h2><span class="before">referen</span><span class="behind">ces</span></h2>
                <div class="slide-bottom">
                    <div class="slick">
                        @if($cv->references)
                            @foreach($cv->references as $reference)
                                <div class="slide position-relative" id="number-slide{{$reference->id}}">
                                    <button type="button" onclick="deleteSlideButton({{$reference->id}})" class="position-absolute button-delete-slide"><i class="m-0 fas fa-minus"></i></button>
                                    <div class="ava-footer flex flex-column-reverse" id="ava-footer{{$reference->id}}" style="background-image: url({{asset('storage/avatarFooter/'.$reference->image)}})">
                                        <form id="" action="" method="post" class="bottom-ava-footer flex position-relative" enctype="multipart/form-data">
                                            @csrf
                                            <i  class="fas fa-camera position-absolute"></i>
                                            <input name="my-ava-footer{{$reference->id}}" class="custom-file-input input-group-file" id="inputFile{{$reference->id}}" type="file">
                                        </form>
                                    </div>
                                    <div class="quote flex flex-row">
                                        <div class="quote-1-1">
                                            <span class="quote-1">“</span><span onblur="validateInfoExp(this.id, 0, 150)" contenteditable="true" id="contentSlide{{$reference->id}}" class="get-content-slide p2">{{$reference->content}}</span>
                                            <span class="quote-2">”</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <span class="prev"><i class="fas fa-chevron-left"></i></span>
                    <span class="next"><i class="fas fa-chevron-right"></i></span>
                </div>
                <div class="panigation flex-column flex justify-content-center align-items-center">
                    <button type="button" onclick="addSlideEditButton()" class="flex-row flex justify-content-center align-items-center">
                        Add references
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
