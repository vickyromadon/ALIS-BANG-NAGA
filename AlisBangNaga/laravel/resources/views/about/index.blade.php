@extends('templates.default')

@section('konten')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tentang Kami</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Tentang Alis Bang Naga</h2>
                <font style="text-align: justify;">
                	<p>
                		Website ini adalah sebuah aplikasi yang memberikan kesempatan kepada mahasiswa seluruh Indonesia untuk menyampaikan petisi secara online dan mendapat dukungan demi negara Indonesia yang lebih baik.
                	</p>
                	<p>
                		Dalam menulis petisi, harus disebutkan dengan jelas kepada siapa petisi ditujukan karena tidak semua petisi harus ditangani langsung oleh pemerintah pusat, namun juga bisa ditanggapi oleh pemerintah daerah atau orang-orang terkait saja. Mahasiswa yang menulis petisi akan mengetahui berapa jumlah pendukung dan siapa-siapa saja pendukung atas petisi yang disampaikan.
                	</p>
                	<p>
                		Jika suatu petisi telah ditanggapi oleh pemerintah, maka petisi tersebut dinyatakan telah mendapat kemenangan. Dengan adanya aplikasi ini pemerintah pun akan lebih mudah mengetahui dan menyelesaikan permasalahan-permasalahan yang dihadapi oleh masyarakat di daerah tertentu secara khusus dan masyarakat Indonesia secara umum.
                	</p>
                </font>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Tim Kami</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-circle img-hover" width="150" height="100" src="{{ asset('image/ourteam/rizki.jpg') }}" alt="">
                    <div class="caption">
                        <h3>Rizki Nugraha Pratama Sitepu<br>
                            <small>Programmer</small>
                        </h3>
                        <p>Mobile and Web Developer</p>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/vickycrewtkj"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/VickyXs"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-circle img-hover" width="150" height="100" src="{{ asset('image/ourteam/diana.jpg') }}" alt="">
                    <div class="caption">
                        <h3>Diana Kardofa<br>
                            <small>Graphic Design</small>
                        </h3>
                        <p>Designer and Illustrator</p>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/diana.kardofa"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-circle img-hover" width="150" height="100" src="{{ asset('image/ourteam/fabi.jpg') }}" alt="">
                    <div class="caption">
                        <h3>Fabiola Altines Tambunan<br>
                            <small>Data Processing</small>
                        </h3>
                        <p>Risk Management</p>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/fabiolaaltines.tambunan"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Didukung Oleh</h2>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-8" style="margin: 0 auto;text-align: center;">
                <img class="img-square img-hover" width="300" height="150" src="{{ asset('image/sponsored/change.png') }}" alt="">
                <h3>Change.org</h3>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-8" style="margin: 0 auto;text-align: center;">
                <img class="img-square img-hover" width="300" height="150" src="{{ asset('image/sponsored/petisionline.jpg') }}" alt="">
            	<h3>PetisiOnline.net</h3>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-8" style="margin: 0 auto;text-align: center;">
                <img class="img-square img-hover" width="300" height="150" src="{{ asset('image/sponsored/bem.jpg') }}" alt="">
            	<h3>Badan Eksekutif Mahasiswa Nusantara</h3>
            </div>
        </div>
    </div>
@stop