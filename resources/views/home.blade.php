@extends('layouts.app')

    @section('main')
       <section class="sec-cards">
            <div class="container">
                <div class="current">
                    <h4>Current series</h4>
                </div>
                <div class="cards">
                    @foreach ($comics as $i => $comic)
                    <a  class="card" href="{{route('single', ['id' => $i])}}">
                    <div>
                        <div class="square">
                        <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <span>{{$comic['series']}}</span>
                    </div>
                    </a>
                    @endforeach
                </div>
                <div class="load">
                    <h4>load more</h4>
                </div>
            </div>
            <div class="icon-main">
                    <div class="container">
                        <div class="img">
                            <img src="/images/buy-comics-digital-comics.png" alt="">
                            <span>digital comics</span>
                        </div>
                        <div class="img">
                            <img src="/images/buy-comics-merchandise.png" alt="">
                            <span>dc merchandise</span>
                        </div>
                        <div class="img">
                            <img src="/images/buy-comics-subscriptions.png" alt="">
                            <span>subscription</span>
                        </div>
                        <div class="img">
                            <img src="/images/buy-comics-shop-locator.png" alt="">
                            <span>comic shop locator</span>
                        </div>
                        <div class="img">
                            <img src="/images/buy-dc-power-visa.svg" alt="">
                            <span>dc power visa</span>
                        </div>
                    </div>
                </div>
       </section>
    @endsection