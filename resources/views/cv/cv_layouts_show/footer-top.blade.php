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
                                    <div class="ava-footer flex flex-column-reverse" id="ava-footer{{$reference->id}}" style="background-image: url({{asset('storage/avatarFooter/'.$reference->image)}})">
                                    </div>
                                    <div class="quote flex flex-row">
                                        <div class="quote-1-1">
                                            <span class="quote-1">“</span><span id="contentSlide{{$reference->id}}" class="get-content-slide p2">{{$reference->content}}</span>
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
            </div>
        </div>
    </div>
</div>
