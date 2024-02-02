@extends('user.layouts.app')
@section('meta_title','game')

@include('user.includes.navbar')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>




<div class="elementor-widget-container" style="background-color: #540000; margin-left:px; margin-right: 0px; border-radius:;">
    <div class="form-container" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; background-color:#540000;margin-left:10px;">
  
<div id="trx_sc_title_460236106" class="sc_title sc_title_default">
    <div class="elementor-element elementor-element-4d86e9a elementor-widget__width-auto sc_fly_static elementor-widget elementor-widget-shortcode animated fadeInRight" data-id="4d86e9a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="shortcode.default">
    <span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default" style="color:#FFE4B5;">Welcome YOU</span>
    <span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default" ></span><h1 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
    <span class="sc_item_title_text"></span></h1><span class="sc_item_title_text" style="font-size: 50px; font-family: 'Lora Serif', serif; color:yellow;">Stay Connected</span>
    <div class="sc_item_descr sc_title_descr sc_align_center" style="color:white; background-color: #540000;">
        <p>Stay connected with your Gaushala Pariwar, Please submit your information & give your precious suggestions below:</p>
    </div>
</div>

    <div class="sc_item_descr sc_title_descr sc_align_center"><p></p>
</div></div	>	
</div>
<div class="elementor-element elementor-element-4d86e9a elementor-widget__width-auto sc_fly_static elementor-widget elementor-widget-shortcode animated fadeInLeft" data-id="4d86e9a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="shortcode.default">
<div class="elementor-widget-container">
<div class="elementor-shortcode">


    @if (session('success'))
    <div class="alert alert-success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session('success') }}
    </div>
@endif

                <form  action="feedback.store"  id="gform_10" method="post"> 
                    @csrf
                <div class="form-row">
                    <label for="name">Enter your name</label>

                    <input type="text" id="name" name="name">
                   
                </div>
        
                <div class="form-row">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email">
                    
                </div>
                <div class="form-row">
                <label for="contact_number">Contact Number</label>
                    <input type="tel" id="contact_number" name="contact_number">
                </div>
        
                <div class="form-row">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address">
                    
                </div>
                <div class="form-row">
                <label for="city">City</label>
                    <input type="text" id="city" name="city">
                </div>
        
                <div class="form-row">
                  
                </div>
        
                <div class="form-row">
                    <label for="feedback">Any Message</label>
                    <input type="text" id="feedback" name="feedback" style="height: 60px;">
                </div>
             
            
            <div class="gform_footer top_label" style="text-align: center;">
                <input type="submit" id="gform_submit_button_10" class="gform_button button" value="Submit" 
                style="color: #ffffff; background-color: #db4242; font-size: 1.5em; width: 150px; height: 70px; margin: 0 auto; border-radius: 15px;">
                
        </div>
       
        
        </form>
        
        
<br>
<!-- Add the reCAPTCHA script with async defer attributes -->
<!-- Add the reCAPTCHA v3 script with async defer attributes -->
<script src="https://www.google.com/recaptcha/api.js?render=your-site-key" async defer></script>

</div>
<p style="display: none !important;"><label>Δ<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100" class="fill_inited"></textarea></label><input type="hidden" id="ak_js_2" name="ak_js" value="1694153248958"><script>document.getElementById( "ak_js_2" ).setAttribute( "value", ( new Date() ).getTime() );</script></p></form>
</div></div>
</div>
</div>
</div>
</div>
<div class="common-container">
<div class="elementor-widget-wrap elementor-element-populated" style="background-color: #FED8B1; color:black; background-repeat: no-repeat; background-position: center center;height:400px;">
    <div class="et_pb_module et_pb_text et_pb_text_51 et_pb_text_align_right et_pb_bg_layout_light"style="font-family: 'Architects Daughter', 'handwriting' !important; font-size: 70px !important; color: #6d2a08 !important; text-align: center !important; font-weight: bold !important; line-height: 1em; margin: 0; padding: 0; border: 0; outline: 0;    animation: blink 2s infinite; /* 2s is the duration, you can adjust it as needed */
    text-decoration: none; ">
                    <div class="et_pb_text" 
                        <h3 class="blink-text">Get in touch</h3>
                    </div>
                </div>
    <div class="elementor-element elementor-element-flex-container sc_fly_static elementor-widget elementor-widget-flex-container" data-id="flex-container" data-element_type="widget" data-widget_type="flex-container.default">
        <div class="elementor-widget-container elementor-flex-container elementor-column-gap-no" style="margin-left: 70px; font-size:25px;00px;">
            <div class="elementor-flex-widget">
                <br>
                <br>
                <p style="text-align:center; font-weight:280px;" ><strong>Shree Hari Pinjara Pol Gaushala, Gochar Bhumi Gangashahar</strong><br>P.O. Gangashahar, Bikaner<br>Rajasthan – 334401, India</p>
            </div>
        </div>

        <div class="elementor-widget-container elementor-flex-container elementor-column-gap-no">
        
    </div>

    <div class="elementor-element elementor-element-aef3171 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="aef3171" data-element_type="widget" data-widget_type="spacer.default">
        <div class="elementor-widget-container">
            <div class="elementor-spacer">
                <div class="elementor-spacer-inner"></div>
            </div>
        </div>
    </div>
    
    </div>
    
    <div class="elementor-element elementor-element-aaab171 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width sc_fly_static elementor-widget elementor-widget-icon-list" data-id="aaab171" data-element_type="widget" data-widget_type="icon-list.default">
        <div class="elementor-widget-container">
            {{-- <ul class="elementor-icon-list-items"> --}}
               
                <li class="elementor-icon-list-item" style="text-align: center;">
                    <span class="elementor-icon-list-icon">
                        <i aria-hidden="true" class="fas fa-phone"></i>
                    </span>
                    <span class="elementor-icon-list-text" style="font-size: 20px; ">Call Us: 9829110071, 8209944063, 9214590811</span>


                </li>

                <li class="elementor-icon-list-item" style="text-align: center;">
                    {{-- <span class="elementor-icon-list-icon"> --}}
                        <i class="bi bi-envelope flex-shrink-0" style="margin-left: 0;"></i>
                    </span>
                    <span class="elementor-icon-list-text" style="font-size:20px;">Mail Us : shreeharippg@gmail.com</span>
                </li>

            </ul>
        </div>
    </div>
</div>
</div>
@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection
<style>
     label {
        display: block; /* Make labels block-level elements */
        margin-bottom: 5px;
        color:pink; /* Add a margin below the label */
    }

    .alert {
    padding: 15px;
    background-color:rgb(24, 202, 24); /* Change this to your desired background color */
    color:black;
    margin-bottom: 15px;
    position: relative;
    width :200px;
    margin-left: 50%;
    margin-right: 50%;
}

/* Close button styles */
.closebtn {
    position: absolute;
    top: 0;
    right: 10px;
    padding: 5px;
    cursor: pointer;
    font-size: 20px;
}

.closebtn:hover {
    color: black; /* Change this to your desired close button color on hover */
}

  
     body {
            font-family: Arial, sans-serif;
        }

        form {
            width: 800px;
            margin: 0 auto;
        }
        .common-container{
            margin-bottom:-48px;
        }
        

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .form-row label {
            flex: 1;
        }

        .form-row input[type="text"],
        .form-row input[type="email"],
        .form-row input[type="tel"],
        .form-row input[type="long description"] {
            flex: 2;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 10px;
            font-size: 14px;
            height:40px;
            background-color:khaki;
            
        }

    
        .form-row:nth-child(3),
        .form-row:nth-child(4) {
            margin-bottom: 20px;
        }
header {
    background-color: #3b5998;
    color: white;
    text-align: center;
    padding: 20px 0;
}

h1 {
    margin: 0;
}


.contact-info {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #6b195a;; 
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); 
    color: white; /* Text color */
    opacity: 0.9; /* Opacity to make it slightly transparent */
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out; /* Smooth opacity and transform transitions on hover */
    transform-origin: center; /* Set the transform origin to the center for a better scale effect */
}

/* Hover effect */
.contact-info:hover {
    opacity: 1; /* Restore full opacity on hover */
    transform: scale(1.02); /* Slight scale-up effect on hover */
}

.contact-info p {
    margin: 10px 0; 
    font-size: 18px; 
    line-height: 1.5; 
}

.contact-info a {
    color: #ff6600; /* Link color */
    text-decoration: none;
    transition: color 0.3s ease-in-out; /* Smooth color transition on hover */
}

.contact-info a:hover {
    color: #ff3300; /* Change link color on hover */
}

.scheme_dark .sc_item_subtitle {
    color: #fd8f8f;
}
.scheme_default .sc_item_subtitle {
    color: #fd8f8f;
}
.sc_item_subtitle {
    font-family: "Montserrat",sans-serif;
    font-size: 13px;
    font-weight: 600;
    font-style: normal;
    line-height: 1.2em;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 6px;
}



html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, input, textarea, button, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, address, section, video, audio {
    font-family: inherit;
    font-size: 100%;
    line-height: inherit;
    font-weight: inherit;
    font-style: inherit;
    border: 0;
    outline: 0;
    -ms-word-wrap: break-word;
    word-wrap: break-word;
}
.root {
            --e-global-color-1e92692: #AC0B35DD;
            --e-global-color-1627a54: #BB2E53DD;
        }

        .elementor-25104 .elementor-element.elementor-element-620f28d > .elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }
        .etc_pb_text_inner{
        font-family: 'Architects Daughter','handwriting' !important;;
    font-size: 60px!important;
    color: #6d2a08!important;
    text-align: center!important;
    font-weight: bold!important;
    padding-bottom: 10px!important;
    line-height: 1em;
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
}


@keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 1; }
}


.blink-text {
   
    animation: blink 2s infinite; /* 2s is the duration, you can adjust it as needed */
    text-decoration: none; /* Remove the underline */
}
</style>
<script>
   
    window.addEventListener('load', function() {
        loadCaptcha();
    });

    function loadCaptcha() {
        
        grecaptcha.render('captcha-container', {
            'sitekey': '{{ config('captcha.sitekey') }}',
        });
    }
</script>