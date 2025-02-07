
@include('includes.header-portfolio')
        <!--
        ===================
           Home
        ===================
        -->
        <section class="mh-home image-bg home-2-img" id="mh-home">
            <div class="img-foverlay img-color-overlay">
                <div class="container">
                    <div class="row section-separator xs-column-reverse vertical-middle-content home-padding">
                        <div class="col-sm-6">
                            <div class="mh-header-info">
                                
                                <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    @if ($user->mensaje == null)
                                    <span>Mensaje no disponible</span>
                                    @else
                                    <span>{{ $user->mensaje }}</span>
                                    @endif
                                </div>
                                
                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->uppercase }}</h2>
                                
                                <ul>
                                    <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->title_job }}</h4>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">{{ $user->email }}</a></li>
                                    @if ($user->tel == null)
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:{{ $user->tel }}">Telefono no disponible</a></li>
                                    @else
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:{{ $user->tel }}">{{ $user->tel }}</a></li>
                                    @endif
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>{{ $user->address }}</address></li>
                                </ul>
                                
                                <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                
                                

                                @foreach($user->redes as $red)
                                    @if ($red->name == 'facebook')
                                        <li><a href="{{ $red->name }}"><i class="fa fa-facebook"></i></a></li>
                                    @endif
                                    @if ($red->name == 'twitter')
                                        <li><a href="{{ $red->name }}"><i class="fa fa-twitter"></i></a></li>
                                    @endif
                                    @if ($red->name == 'github')
                                        <li><a href="{{ $red->name }}"><i class="fa fa-github"></i></a></li>
                                    @endif
                                    @if ($red->name == 'instagram')
                                        <li><a href="{{ $red->name }}"><i class="fa fa-instagram"></i></a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <div class="img-border">
                                    @if ($user->image)
                                        <img src="{{ $user->get_image }}" alt="{{ $user->name }}" class="img-fluid">
                                    @else    
                                        <img src="{{ asset('assets/images/hero.png') }}" alt=""  class="img-fluid">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           ABOUT
        ===================
        -->
        <section class="mh-about" id="mh-about">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            @if ($user->about_image)
                                <img src="{{ $user->get_foto }}" alt="{{ $user->about }}" class="img-fluid">
                            @else

                                <img src="{{ asset('assets/images/ab-img.png') }}" alt="" class="img-fluid">
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-inner">
                            @if ($user->about_title == null)
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">Titulo de la sección "About"</h2>
                            @else
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">{{ $user->about_title }}</h2>
                            @endif
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->about }}</p>
                            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    @foreach($user->skill as $skill)
                                    <li><span>{{ $skill->name }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">{{ $user->about_button }}<i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           SERVICE
        ===================
        -->
        <section class="mh-service">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        @if ($user->what_title == null)
                        <h2>Titulo de la sección "What i do"</h2>
                        @else
                        <h2>{{ $user->what_title }}</h2>
                        @endif
                    </div>
                    
                    <div class="col-sm-4">
                    @foreach($user->whatido as $whatido)
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <i class="fa fa-bullseye purple-color"></i>
                            
                            <h3>{{ $whatido->subtitulo }}</h3>
                            <p>{{ $whatido->descripcion }} </p>
                            
                        </div>
                        @endforeach
                    </div>
                    
                    
                </div>   
            </div>
        </section>
        
        <!--
        ===================
          FEATURE PROJECTS
        ===================
        -->
        <section class="mh-featured-project image-bg featured-img-one">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="section-title col-sm-12">
                            <h3>Featured Projects</h3>
                        </div>
                        
                        <div class="col-sm-12">
                            
                            <div class="mh-single-project-slide-by-side row">
                                <!-- Project Items -->
                                @foreach($user->featuredProjects as $featuredProjects)
                                <div class="col-sm-12 mh-featured-item">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                                <img src="{{ asset('assets/images/p-2.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-5">
                                        
                                            <div class="mh-featured-project-content">
                                            
                                                <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">{{ $featuredProjects->categoria }}</h4>
                                                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">{{ $featuredProjects->titulo }}</h2>
                                                <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">{{ $featuredProjects->puesto }}</span>
                                                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">{{ $featuredProjects->descripcion }}</p>
                                            
                                                <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                                <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                                    <blockquote>
                                    					<q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>{{ $user->name }}</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>{{ $user->name }}</cite>
                                    				</blockquote>
                                    				<blockquote>
                                    					<q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                    					<cite>{{ $user->name }}</cite>
                                    				</blockquote>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                               
                                <!-- Project Items -->
                                
                                <!-- Project Items -->
                                @endforeach
                            </div>
                            
                        </div>
                        
                    </div> <!-- End: .row -->
                </div>
            </div>
        </section>  
        
        <!--
        ===================
           SKILLS
        ===================
        -->
        <section class="mh-skills" id="mh-skills">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="section-title text-center col-sm-12">
                            <!--<h2>Skills</h2>-->
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-skills-inner">
                                <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    @if ($user->techskill_title == null)
                                    <h3>Titulo de la sección "Technical Skills"</h3>
                                    @else
                                    <h3>{{ $user->techskill_title }}</h3>
                                    @endif
                                    <div class="each-skills">
                                        @foreach($user->skill as $skill)
                                        <div class="candidatos">
                                            
                                            <div class="parcial">
                                                <div class="info">
                                                    <div class="nome">{{ $skill->name }}</div>
                                                    <div class="percentagem-num">{{ $skill->percent }}%</div>
                                                </div>
                                                <div class="progressBar">
                                                    <div class="percentagem" style="width:{{ $skill->percent }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                       
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                @if ($user->profskill_title == null)
                                <h3>Titulo de la sección "Professional Skills"</h3>
                                @else
                                <h3>{{ $user->profskill_title }}</h3>
                                @endif
                                @foreach($user->profskill as $profskill)
                                <ul class="mh-professional-progress">
                                
                                    <li>
                                        <div class="mh-progress mh-progress-circle" data-progress="{{ $profskill->percent }}"></div>
                                        <div class="pr-skill-name">{{ $profskill->name }}</div>
                                    </li>
                                      
                                </ul>
                                @endforeach 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           EXPERIENCES
        ===================
        -->
        <section class="mh-experince image-bg featured-img-one" id="mh-experience">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-education">
                                @if ($user->education_title == null)
                                <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Titulo de la sección "Educación"</h3>
                                @else

                                <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->education_title }}</h3>
                                @endif
                                <div class="mh-education-deatils">
                                    @foreach($user->education as $education)
                                        <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                            <h4>{{ $education->degree }}<a href="#">{{ $education->school_name }}</a></h4>
                                            <div class="mh-eduyear">{{ $education->start_date }} - {{ $education->finish_date }}</div>
                                            <p>{{ $education->description }}</p>
                                        </div>
                                    @endforeach
                               
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-work">
                                @if ($user->work_title == null)
                                <h3>Titulo de la sección "Work"</h3>
                                @else
                                <h3>{{ $user->work_title }}</h3>
                                @endif
                                <div class="mh-experience-deatils">
                                    <!-- Education Institutes-->
                                    @foreach($user->work as $work)
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <h4>{{ $work->work_name }} <a href="#">{{ $work->lugar }}</a></h4>
                                        <div class="mh-eduyear">{{ $work->start_date }} - {{ $work->finish_date }}</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>{{ $work->tareas }}</li>
                                            
                                        </ul>
                                    </div>                                
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
        
        <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>Recent Portfolio</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>All Categories</span></li>
                                <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Web Design</span></li>
                                <li data-filter=".branding" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Branding</span></li>
                                <li data-filter=".mockup" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Mockups</span></li>
                                <li data-filter=".ui" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Photography</span></li>
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="portfolioContainer row">
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g1.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui mockup">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g2.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g2.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g3.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g3.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g5.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g5.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g4.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g4.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g6.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g6.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g8.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g8.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g9.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g9.png') }}" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ asset('assets/images/portfolio/g7.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="{{ asset('assets/images/portfolio/g7.jpg') }}" data-fancybox="gallery"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>
            <div class="mh-portfolio-modal" id="mh">
                <div class="container">
                    <div class="row mh-portfolio-modal-inner">
                        <div class="col-sm-5">
                            <h2>Wrap - A campanion plugin</h2>
                            <p>Wrap is a clean and elegant Multipurpose Landing Page Template. 
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                            All variations are organized separately so you can use / customize the template very easily.</p>       
                            
                            <p>It is a clean and elegant Multipurpose Landing Page Template. 
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                            All variations are organized separately so you can use / customize the template very easily.</p>      
                            <div class="mh-about-tag">
                                <ul>
                                    <li><span>php</span></li>
                                    <li><span>html</span></li>
                                    <li><span>css</span></li>
                                    <li><span>php</span></li>
                                    <li><span>wordpress</span></li>
                                    <li><span>React</span></li>
                                    <li><span>Javascript</span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-fill">Live Demo</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="mh-portfolio-modal-img">
                                <img src="{{ asset('assets/images/pr-0.jif') }}" alt="" class="img-fluid">
                                <p>All variations are organized separately so you can use / customize the template very easily.</p>    
                                <img src="{{ asset('assets/images/pr-1.jif') }}" alt="" class="img-fluid">
                                <p>All variations are organized separately so you can use / customize the template very easily.</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           QUATES
        ===================
        -->
        <section class="mh-quates image-bg home-2-img">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="each-quates col-sm-12 col-md-6">
                            <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Interested to Work?</h3>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Mirum est notare quam littera gothica.
                            quam nunc putamus parum claram,</p>
                            <a href="#mh-contact" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           PRICING
        ===================
        -->
        <section class="mh-pricing" id="mh-pricing">
            <div class="">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Pricing Table</h3>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <i class="fa fa-calendar"></i>
                                <h4>Full-time work</h4>
                                <p>I am available for full time</p>
                                <h5>$1500</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>  
                        </div>                    
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <i class="fa fa-file"></i>
                                <h4>Fixed Price Project</h4>
                                <p>I am available for fixed roles</p>
                                <h5>$500</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>  
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <i class="fa fa-hourglass"></i>
                                <h4>Hourley work</h4>
                                <p>I am available for Hourley projets</p>
                                <h5>$50</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           BLOG
        ===================
        -->
        <section class="mh-blog image-bg featured-img-two" id="mh-blog">
            <div class="img-color-overlay">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Featured Posts</h3>
                        </div>
                        @foreach($user->post as $post)
                        <div class="col-sm-12 col-md-4">
                        
                             <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <img src="{{ asset('assets/images/b-3.png') }}" alt="" class="img-fluid">
                                
                                <div class="blog-inner">
                                   
                                    <h2><a href="blog-single.html">{{ $post->titulo }}</a></h2>
                                    <div class="mh-blog-post-info">
                                        <ul>
                                            <li><strong>Post On</strong><a href="#">{{ $post->fecha }}</a></li>
                                            <li><strong>By</strong><a href="#">{{ $post->autor }}</a></li>
                                        </ul>
                                    </div>
                                    <p>{{ $post->descripcion }}</p>
                                    <a href="blog-single.html">Read More</a>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        @endforeach
                        
                </div>
            </div>
        </section> 
        
        <!--
        ===================
           Testimonial
        ===================
        -->
        <section class="mh-testimonial" id="mh-testimonial">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Client Reviews</h3>
                        </div>
                        <div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>                    
                            
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>                    
                            
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
@include('includes.footer-portfolio')