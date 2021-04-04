@extends('layouts.app')

@section('statusContact')
    {{ $status }}
@endsection

@section('content')

    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Contact Us</h4>
                            <h2><i><u>iStudy<u></i></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <center>
            <div class="find-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <br>
                                <h2>Our Location on Maps</h2>
                            </div>
                        </div>
        </center>
        <center>
            <div class="col-md-8">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126438.28548094454!2d112.56174236012433!3d-7.978639465290342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1617449909910!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
    </div>
    </div>
    </div>
    </center>

    </style>

    <div class="container">
        <div class="contact-form-box">

            <div class="section-heading">
                <br>
                <h2>Kritik Dan Saran.</h2>
            </div>
    
            <br />
    
            <form name="contact-form" id="contactForm">
    
                <div class="floating-label-form-group">
    
                    <label>Name</label>
    
                    <input type="text" class="form-control" placeholder="Name" id="ContactForm1_contact-form-name" name="name"
                        value="" />
                </div>
    
                <div class="floating-label-form-group">
    
                    <label>Email Address</label>
    
                    <input type="text" class="form-control" placeholder="Email Address" id="ContactForm1_contact-form-email"
                        name="email" value="" />
                </div>
    
                <div class="floating-label-form-group">
    
                    <label>Message</label>
    
                    <textarea rows="5" class="form-control" name="email-message" placeholder="Message"
                        id="ContactForm1_contact-form-email-message"></textarea>
    
                </div>
    
                <center><input id="ContactForm1_contact-form-submit" type="button" class="btn btn-default" value="Kirim" />
                </center>
    
                <div class="clear"></div>
    
                <div style="max-width: 60%; text-align: left; width: 60%;">
    
                    <div id="ContactForm1_contact-form-error-message"> </div>
    
                    <div id="ContactForm1_contact-form-success-message"> </div>
    
                </div>
    
            </form>
    
        </div>
    </div>
    

    <script src="https://www.blogger.com/static/v1/widgets/2271878333-widgets.js" type="text/javascript"></script>

    <script type="text/javascript">
        if (typeof(BLOG_attachCsiOnload) != 'undefined' && BLOG_attachCsiOnload != null) {
            window['blogger_templates_experiment_id'] = "templatesV1";
            window['blogger_blog_id'] = '1877745665889604279';
            BLOG_attachCsiOnload('');
        }
        _WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d1877745665889604279', '//masigun.com/',
            '1877745665889604279');

        _WidgetManager._RegisterWidget("_ContactFormView", new _WidgetInfo("ContactForm1", "footer1", null, document
            .getElementById("ContactForm1"), {
                "contactFormMessageSendingMsg": "Sending...",
                "contactFormMessageSentMsg": "<div class='contact_layout'><div class='contact_message'><b>Your message has been sent</b>.<br/>Jika tidak ada halangan dan kesibukan lainnya, admin akan langsung merespon pesan yang Anda kirimkan.</div></div><br/>",
                "contactFormMessageNotSentMsg": "Message could not be sent. Please try again later.",
                "contactFormInvalidEmailMsg": "A valid email address is required.",
                "contactFormEmptyMessageMsg": "Message field cannot be empty.",
                "title": "Contact Form",
                "blogId": "1877745665889604279",
                "contactFormNameMsg": "Name",
                "contactFormEmailMsg": "Email",
                "contactFormMessageMsg": "Message",
                "contactFormSendMsg": "Send",
                "submitUrl": "https://www.blogger.com/contact-form.do"
            }, "displayModeFull"));

    </script>
@endsection
