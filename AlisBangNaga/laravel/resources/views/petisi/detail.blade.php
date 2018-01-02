@section('js')
    <script>
        jQuery(document).ready(function($) {
            $('.popup').click(function(event) {
                var width  = 575,
                    height = 400,
                    left   = ($(window).width()  - width)  / 2,
                    top    = ($(window).height() - height) / 2,
                    url    = this.href,
                    opts   = 'status=1' +
                             ',width='  + width  +
                             ',height=' + height +
                             ',top='    + top    +
                             ',left='   + left;
                
                window.open(url, 'twitter', opts);
             
                return false;
            });
        });
    </script>
@stop

@extends('templates.default')

@section('konten')
    <style>
        .facebook, .twitter, .google, .linkedin, .pinterest {
            float: left;
            position:relative;
            margin-left:5px;
        }
        .img-ukuran {
            width: 800px;
            height: 400px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $petisi->judul }}
                    <small>by <a href="{{ route('profile.index', ['username' => $petisi->user->username]) }}">{{ $petisi->user->getNameOrUsername() }}</a></small>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <p><i class="fa fa-clock-o fa-lg"></i> Posted on {{ $petisi->created_at->diffForHumans() }}</p>

                <hr>

                <img class="img-responsive img-hover img-ukuran" src="{{ asset('image/petisi/'.$petisi->gambar) }}" alt="{{ $petisi->gambar }}">

                <hr>
                <font style="text-align: justify;">
                    <?php echo $petisi->body;?>
                </font>
            </div>

            <div class="col-md-4">
                <div class="well">
                    <h3>{{ $petisi->likes->count() }} Pendukung</h3>
                    <h4>Tanda Tangani Petisi Ini</h4>
                    <ul class="list-inline">
                        <li>
                            <a href="{{ route('petisi.like', ['petisiId' => $petisi->id, 'userId' => Auth::user()->id]) }}">
                                <button class="btn btn-success"><i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i> Tanda Tangani</button>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="well">
                    <h3>Berbagi ke Social Media</h3>
                    <div class="social-share">
                        <div class="facebook">
                            <a id="button" onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]={{ $petisi->judul }}&amp;p[summary]=<?php echo $petisi->body;?>&amp;p[url]={{ route('petisi.detail', ['petisiID' => $petisi->id]) }}&amp;&p[images][0]={{ $petisi->gambar }}', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)">
                            <img src="{{ asset('image/sosmed/f.jpg') }}"/></a>  
                        </div>

                        <div class="twitter">
                            <a class="twitter popup" href="http://twitter.com/share?source=sharethiscom&text={{ $petisi->judul }}&url={{ route('petisi.detail', ['petisiID' => $petisi->id]) }}&via=vickyxs"><img src="{{ asset('image/sosmed/tw.jpg') }}" /></a>
                        </div>

                        <div class="google">
                            <a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url={{ route('petisi.detail', ['petisiID' => $petisi->id]) }} ','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="{{ asset('image/sosmed/g.jpg') }}" /></a>
                        </div>

                        <div class="linkedin">
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ route('petisi.detail', ['petisiID' => $petisi->id]) }} &title={{ $petisi->judul }}&summary=<?php echo $petisi->body;?>&source=seroendeng.com" class="popup"rel="nofollow"><img src="{{ asset('image/sosmed/in.jpg') }}" /></a>
                        </div>

                        <div class="pinterest">
                            <a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'><img src="{{ asset('image/sosmed/pin.jpg') }}" /></a>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>

                {{-- <div class="well">
                    <h3>Petisi Terbaru</h3>
                    @foreach($petisis as $petisi)    
                        <div class="list-group">
                            <a href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}" class="list-group-item">{{ $petisi->judul }}</a>
                        </div>
                    @endforeach
                </div> --}}

                {{-- <div class="well">
                    <h3>Petisi Terpopuler</h3>
                    @foreach($petisis as $petisi)    
                        <div class="list-group">
                            <a href="{{ route('petisi.detail', ['petisiID' => $petisi->id]) }}" class="list-group-item">{{ $petisi->judul }}</a>
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </div>
    </div>
@stop