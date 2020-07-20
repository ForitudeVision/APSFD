@extends('users.layouts.layout')

@section('content')

<div class="bradcam_area breadcam_bg_4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
              
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.629476425927!2d1.1697258147689364!3d6.18032319552568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159fecff058ef%3A0xf613497ee100784a!2sAPSFD%20-%20TOGO!5e0!3m2!1sfr!2stg!4v1592751818423!5m2!1sfr!2stg" width="1100" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Nous ecrire</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Entrer votre nom">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Entrer le sujet">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Adidogomé</h3>
                        <p>Carrefour Lapampa, entre la Poste (SPT) et <br/>
                        Beneficial Life Insurance (BLI)</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                    <h3> <a href="tel: (+228)  22 25 50 75">(+228)  22 25 50 75</a></h3><br>
                        <h3> <a href="tel: (+228)  22 25 50 55">(+228)  22 25 50 55 </a></h3><br>
                        <h3> <a href="tel: (+228)  70 42 90 76">(+228) 70 42 90 76 </a></h3><br>
                        <h3>08 BP 80753</h3>
                        <p>Ouvert de Lundi à Vendredi<br/> de 7h30 - 12h 30 et<br/> 14h30 - 17h30</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                       <h3>info@apsfd.tg</h3>
                        <p>Envoyez-nous votre requête à tout moment!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

@endsection