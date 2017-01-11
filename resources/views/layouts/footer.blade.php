<footer>
    <div class="container">
        <div class="col-lg-5 col-md-5 col-sm-5 ftr-about">
            <p>About QuickMerch</p>
            <span>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma.  In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. In his igitur partibus duabus nihil erat, quod. </span>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 ftr-links">
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('page/about_us')}}">About</a></li>
                <li><a href="{{url('page/features')}}">Features</a></li>
                <li><a href="{{url('page/prices')}}">Prices</a></li>
                <li><a href="{{url('auth/login')}}">Login</a></li>
                <li><a href="{{url('auth/signup')}}">Sign up</a></li>
                <li><a href="{{url('page/term_condition')}}">Terms & Condition</a></li>
                <li><a href="{{url('page/privacy_policy')}}">Privacy Polices</a></li>
            </ul>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 ftr-links">
            <ul>
                <?php
                if(!empty($socialslinks))
                {
                    foreach($socialslinks as $links)
                    { 
                        echo '<li><a href="'.$links->link_url.'">'.$links->link_text.'</a></li>';
                    }
                }
                ?>
            </ul>
        </div>

        <!-- <div class="col-lg-3 col-md-3 col-sm-3 ftr-newsleter">
            <p>Subscribe to News Letter</p>
            <input type="text" placeholder="Enter your name">
            <input type="text" placeholder="Enter your e-mail Id">
            <a href="#">Subscribe NOW</a>
        </div> -->
         <input type="hidden" id="checkerror" value="{{$errors->first('subscriber_name')}}{{$errors->first('subscriber_email')}}">
        <div class="col-lg-3 col-md-3 col-sm-3 ftr-newsleter">
            <p>Subscribe to News Letter</p>
             <form class="form-horizontal" role="form" method="POST" action="{{ url('subscribe') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="text" id="vname"placeholder="Enter your name" value="{{ old('subscriber_name') }}" name="subscriber_name">
                   @if($errors->any() && $errors->has('subscriber_name'))
                                <h4 class="error">{{$errors->first('subscriber_name')}}</h4>
                                @endif
                  <input type="text" placeholder="Enter your email Id" value="{{ old('subscriber_email') }}" name="subscriber_email">
                   @if($errors->any() && $errors->has('subscriber_email'))
                                <h4 class="error">{{$errors->first('subscriber_email')}}</h4>
                                @endif
                  <!--<a href="#">Subscribe NOW</a>-->
             <button type="submit" class="btn btn-primary">Subscribe NOW</button>
              </form>
        </div>

    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="{{ url('/lib/js/bootstrap.min.js') }}"></script>

<script>

$(document).ready(function ($) {
    $('#country').change(function () {
        $.get("{{ url('api/dropdown')}}",
                {option: $(this).val()},
        function (data) {
            var model = $('#state');
            model.empty();

            $.each(data, function (index, element) {
                model.append("<option value='" + element.id + "'>" + element.state + "</option>");
            });
        });
    });
    
    $('#reset_password').click(function(){
        $(this).attr('disabled','disabled');
    });
     $('#reset_password').removeAttr('disabled');

     if($('#checkerror').val() != '')
     {
         $('#vname').focus();
     }
});

</script>

</body>
</html>


