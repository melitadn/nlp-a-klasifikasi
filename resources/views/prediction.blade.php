@extends('layout.app')

@section('content')
<section id="about" class="home-section text-center">
  <!-- Section: services -->
  <section id="contact" class="home-section text-center bg-gray">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Prediction Form</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10">
          <div class="boxed-grey">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form align="center" id="register" class="form-horizontal" action="{{url('predict.store')}}">
              <meta name="csrf-token" content="{{ csrf_token() }}" />
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">

                <div class="col-md-9">
                  <div class="form-group">
                    <label for="exampleSpam">
                                Lyrics Text</label>
                    <textarea type="text" class="form-control" name="text_spam" id="Text_spam" placeholder="Text Example" data-rule="minlen:10" data-msg="Please enter at least 8 chars of Text" /></textarea>
                    <div class="validation"></div>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-md-6">
                  <label for="examplePredict" name="result">Result</label>
                  <label for="examplePredict" id="predictData" class="form-control">
                    <input class="form-group" type="hidden" name="predictDataTemp" id="predictDataRes"/>
                  </label>
                </div>
 
                <div class="col-md-12">
                  <button type="button" class="btn btn-skin pull-right" id="predict">
                            predict</button>
                </div>
              </div>

                           
              <script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    $('#predict').click(function(){
                      $('#predictData').empty();
                      var text=$('#Text_spam').val();
                      
                      /*$.get('predict',function(data){
                        $('#predictData').append(data);
                        console.log(data);
                      });*/
                      $.ajax({
                        type: "POST",
                        url:"https://nlp-a.herokuapp.com/input/task",
                        data:'{"text":"'+text+'"}',
                        contentType: 'application/json; charset=utf-8',
                        dataType: "json",
                        success:function(data){
                          console.log(data);
                          var dataTemp=data['message'];
                          $('#predictData').append(dataTemp);
                          $('#predictDataRes').val(dataTemp);
                        }
                      });
                    });
                  });
                </script>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: services -->




  <!-- Section: contact -->
  <section id="contact" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Get in touch</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="boxed-grey">

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form id="contact-form" action="" method="post" role="form" class="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                                Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <label for="email">
                                Email Address</label>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subject">
                                Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                                Message</label>
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="widget-contact">
            <h5>Main Office</h5>

            <address>
				  <strong>Squas Design, Inc.</strong><br>
				  Tower 795 Folsom Ave, Beautiful Suite 600<br>
				  San Francisco, CA 94107<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>

            <address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">email.name@example.com</a>
				</address>
            <address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
				</address>

          </div>
        </div>
      </div>

    </div>
  </section>
@endsection