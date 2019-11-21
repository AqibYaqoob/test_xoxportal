<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<div id="footer" style="background-color:#ECECEC">
    <div class="footer">
        <div class="container-fluid py-50 px-5">
            <div class="row">
                {{ menu('about_us','web.menu.footer.about_us') }}
                {{ menu('Shop & Learn','web.menu.footer.shop_and_learn') }}
                {{ menu('support','web.menu.footer.support') }}
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h6 class="mb-4 bold">Connect With Us</h6>
                    <div class="connect-icons my-4">
                        <a class="link" href="{{setting('site.facebook_link')}}"><i class="fab fa-facebook-f" style="padding-left: 13px;padding-top: 10px"></i></a>
                        <a class="link" href="{{setting('site.instagram')}}"><i class="fab fa-instagram" style="padding-left: 13px;padding-top: 10px" ></i></a>
                        <a class="link" href="{{setting('site.twitter')}}"><i class="fab fa-twitter" style="padding-left: 13px;padding-top: 10px" ></i></a>
                        <a class="link" href="{{setting('site.wechat')}}"><i class="fab fa-weixin" style="padding-left: 13px;padding-top: 10px" ></i></a>
                    </div>
                    <div class="d-flex flex-column flex-xl-row text-left connect-us-img">
                        <div class="mb-3">
                            <img style="height: 120px;" src="{{asset('images/sebenarnya-my.jpg')}}" />
                        </div>
                        <div class="mb-3">
                            <img style="height: 80px;" src="{{asset('images/cfm.png')}}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-2 px-5" style="background-color: #CBCBCB">
    <small>Copyright &copy; 2019 XOX Com Sdn Bhd (709922-X) XOX MOBILE Sdn Bhd (951655-H) XOX AJL License Number (AJL 932178).
        All Right Reserved</small>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="{{ url('js/bootstrap.min.js')}}"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="{{ url('js/swiper.min.js') }}"></script>        
<!-- Initialize Swiper -->
@yield('js')
<script>
     var swiper = new Swiper('.new-container-mobile', {
        slidesPerView: 1,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    for (i = 0; i < x.length; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 0; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                // Ajax Request to get Images
                if(s.className == 'plans'){
                  var postUrl = "{!! url('api/dataroaming/image') !!}";
                  $.ajax({
                     type:'POST',
                     url:postUrl,
                     data:{id:s.options[i].value},
                     success:function(response){
                        if(response.status){
                          var imageSrc = response.img_src;
                          $('.plan_images').html('<img class="img-fluid" src="'+ response.data.image+'">');
                        }
                     }
                  });
                }
                y = this.parentNode.getElementsByClassName("same-as-selected");
                for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 150) {
                $("#header").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
            $("#header").removeClass("active");
            }
        });
    });
    $(document).ready(function (){
        $("#plan-select li").click(function (){
            $('html, body').animate({
                scrollTop: $("#section-howto").offset().top
            }, 500);
        });
        $(document).on('change', '.country_option', function(){
            var postUrl = "{!! url('api/country/detail') !!}";
            $.ajax({
               type:'POST',
               url:postUrl,
               data:{id:$(this).val()},
               success:function(response){
                  if(response.status){
                    $('.input-box__input-text').val(response.data.country_code);
                  }
               }
            });
        });
        /**
         *
         * Change Header
         *
         */
        if(window.location.pathname == '/'){
          $('.dynamic_header_content').removeClass("header-2");
          $('.dynamic_header_content').addClass("header-1");
        }
        else{
          $('.dynamic_header_content').removeClass("header-1");
          $('.dynamic_header_content').addClass("header-2"); 
        }
        $(function() {
          $(window).on("scroll", function() {
              if($(window).scrollTop() > 150) {
                  $(".sub-header-2").addClass("fixed-top");
              } else {
                  //remove the background property so it comes transparent again (defined in your css)
              $(".sub-header-2").removeClass("fixed-top");
              }
          });
        });
      /**
       *
       * Select Dropdown Options
       *
       */
      $(".custom-select-new").each(function() {
        var classes = $(this).attr("class"),
            id      = $(this).attr("id"),
            name    = $(this).attr("name");
        var template =  '<div class="' + classes + '">';
            template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
            template += '<div class="custom-options">';
            $(this).find("option").each(function() {
            template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
            });
          template += '</div></div>';
          
          $(this).wrap('<div class="custom-select-wrapper"></div>');
          $(this).hide();
          $(this).after(template);
      });
      $(".custom-option:first-of-type").hover(function() {
          $(this).parents(".custom-options").addClass("option-hover");
      }, function() {
          $(this).parents(".custom-options").removeClass("option-hover");
      });
      $(".custom-select-trigger").on("click", function() {
          $('html').one('click',function() {
          $(".custom-select-new").removeClass("opened");
          });
          $(this).parents(".custom-select-new").toggleClass("opened");
          event.stopPropagation();
      });
      $(".custom-option").on("click", function() {
          $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
          $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
          $(this).addClass("selection");
          $(this).parents(".custom-select-new").removeClass("opened");
          $(this).parents(".custom-select-new").find(".custom-select-trigger").text($(this).text());
      });    
    });

</script>
</body>
</html>
