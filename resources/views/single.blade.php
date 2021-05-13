@extends('layouts.app')

    @section('main')
       <section class="details">
           <div class="blue">
                <div class="container">
                    <div class="thumb-card">
                        <span class="comicB">comic book</span>
                        <img src="{{$comic['thumb']}}" alt="">
                        <span class="viewG">view gallery</span>
                    </div>
                   
                </div>
           </div>
           <div class="description">
               <div class="container">
                   <div class="left">
                   <h3>{{$comic['title']}}</h3>
                   <div class="green">
                       <div class="left">
                           <span><span class="opacity">U.S.Price:</span> {{$comic['price']}}</span>
                           <span class="opacity">AVAILABLE</span>
                       </div>
                       <div class="right">
                           <span class="opacity">Check Availability<i class="fas fa-sort-down"></i></span>
                       </div>
                   </div>
                   <p>{{$comic['description']}}</p>
                   </div>
                   <div class="right">
                       <span>advertisiment</span>
                       <img src="/images/superman.jpg" alt="">
                   </div>
               </div>
           </div>
         
           <div class="cast">
               <div class="container">
                   <div class="left">
                        <div class="col-95">
                            <span class="tit">Talent</span>
                        </div>
                        <div class="col-95 artist">
                            <div class="leftArt">
                                Art By:
                            </div>
                            <div class="rightArt">
                            @foreach($comic['artists'] as $artist )
                            <a class="artist" href="">{{$artist}},</a>
                            @endforeach
                            </div>
                        </div>
                    
                        <div class="col-95 artist">
                            <div class="leftArt">
                                Written by:
                            </div>
                            <div class="rightArt">
                            @foreach($comic['writers'] as $writer )
                            <a class="artist" href="">{{$writer}},</a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="col-95">
                            <span class="tit">Specs</span>
                        </div>
                        <div class="col-95 artist">
                            <div class="leftArt">
                                Series:
                            </div>
                            <div class="rightArt">
                           
                            <a class="series" href="">{{$comic['series']}}</a>
                            
                            </div>
                        </div>
                        <div class="col-95 artist">
                            <div class="leftArt">
                                U.S.Price:
                            </div>
                            <div class="rightArt">
                           
                            <span class="series" href="">{{$comic['price']}}</span>
                            
                            </div>
                        </div>
                        <div class="col-95 artist">
                            <div class="leftArt">
                                On Sale Date:
                            </div>
                            <div class="rightArt">
                           
                            <span class="series" href="">{{$comic['sale_date']}}</span>
                            
                            </div>
                        </div>
                   </div>
               </div>
           </div>
           <div class="icon-cast">
               <div class="container">
                   <div class="ico">
                       <span>digital comics</span>
                       <img src="/images/buy-comics-digital-comics.png" alt="">
                   </div>
                   <div class="ico">
                        <span>shop dc</span>
                        <img src="/images/buy-comics-merchandise.png" alt="">
                   </div>
                   <div class="ico">
                        <span>comic shop locator</span>
                        <img src="/images/buy-comics-shop-locator.png" alt="">
                   </div>
                   <div class="ico">
                        <span>subscriptions</span>
                        <img src="/images/buy-comics-subscriptions.png" alt="">
                   </div>
               </div>
           </div>
       </section>
    
    @endsection