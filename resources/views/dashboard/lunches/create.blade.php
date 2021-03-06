@extends('main')

@section('title', 'Create Lunch Deals')

@section('section')

  <section class="hero">
    <div class="hero-body has-text-centered">
      <h1 class="title">
        Add New Lunch Deal(s)
      </h1>

      <div class="field is-grouped is-grouped-centered">
        <p class="control">
          <a href="#" class="button is-primary is-small" id="automatic">
            <span class="icon">
              <i class="fas fa-magic"></i>
            </span>
            Automatically
          </a>
        </p>

        <p class="control">
          <a href="#" class="button is-primary is-small" id="manual">
            <span class="icon">
              <i class="fas fa-pencil-alt"></i>
            </span>
            Manually
          </a>
        </p>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="col-xs-12 lunch-container">
      {!! Form::open(['route' => ['lunch.store', $restaurantId], 'files' => true]) !!}
        <div class="manual-lunch-container is-hidden">

        </div> <!-- .manual-lunch-container -->

        <div class="automatic-lunch-container">
          <div class="row">

            <div class="col-md-4 auto-lunch-cont">
              <div class="field">
                {{ Form::label('dataurl', 'Website Data URL', ['class' => 'label']) }}

                <div class="control">
                  {{ Form::text('dataurl', null, ['class' => 'input', 'id' => 'dataurl']) }}
                </div><!--.control -->
              </div> <!-- .field -->

              <div class="field">
                <a href="#" class="button is-primary" id="fetch">
                  <span class="icon left">

                  </span>
                  Fetch
                </a>
              </div> <!-- .field -->

              {{-- <div class="field">
                <a href="#" class="button is-primary" id="xpath">
                  XPath
                </a>
              </div> <!-- .field --> --}}

              <div class="lunch-deals">
                {{-- <div class="field">
                  {{ Form::label('title[]', 'Lunch Title', ['class' => 'label']) }}

                  <div class="control">
                    {{ Form::text('title[]', null, ['class' => 'input field-title']) }}
                  </div> <!-- .control -->
                </div> <!-- .field -->

                <div class="file has-name">
                  <label class="file-label">
                    <input type="file" name="image[]" class="file-input" id="logo-file">

                    <span class="file-cta">
                      <span class="file-icon">
                        <i class="fas fa-upload"></i>
                      </span>

                      <span class="file-label">Choose an image...</span>
                    </span>

                    <span class="file-name" id="file-name"></span>
                  </label>
                </div> <!-- .file has-name -->

                <div class="field">
                  {{ Form::label('price[]', 'Meal Price', ['class' => 'label']) }}

                  <div class="control">
                    {{ Form::number('price[]', null, ['class' => 'input field-price', 'step' => '0.01']) }}
                  </div> <!-- .control -->
                </div> <!-- .field --> --}}

                <div class="field">
                  {{ Form::label('weekday[]', 'Week Day', ['class' => 'label']) }}

                  <div class="control">
                    <div class="select">
                      {{-- {{ Form::text('a', date('l') == "Saturday" || date('l') == "Sunday" ? "Monday" : date('l'), ['class' => 'input']) }} --}}
                      {{ Form::select('weekday[]', [
                        'Monday' => 'Monday',
                        'Tuesday' => 'Tuesday',
                        'Wednesday' => 'Wednesday',
                        'Thursday' => 'Thursday',
                        'Friday' => 'Friday',
                      ], date('l') == "Saturday" || date('l') == "Sunday" ? "Monday" : date('l')) }}
                    </div>

                  </div> <!-- .control -->
                </div> <!-- .field -->

                {{ Form::hidden('count_deals', null, ['id' => 'count-deals']) }}
                {{-- {{ Form::hidden('photo_url[]', null, ['id' => 'photo-url']) }} --}}

                {{-- <h2>XPath</h2> --}}
                {{-- {{ Form::text('title_xpath[]', null, ['id' => 'title-xpath']) }}
                {{ Form::text('image_xpath[]', null, ['id' => 'image-xpath']) }}
                {{ Form::text('price_xpath[]', null, ['id' => 'price-xpath']) }} --}}
                {{-- {{ Form::text('imgcount[]', null, ['id' => 'imgcount']) }} --}}

              </div> <!-- .lunch-deals -->
            </div> <!-- .col-md-4 auto-lunch-cont -->

            <div class="col-md-8">
              <div class="opa-results">

              </div>

              <div class="results" style="margin-top: 30px;"> <!-- background: yellow; -->

              </div> <!-- .results -->
            </div> <!-- .col-md-8 -->

            <div class="html-content">

            </div> <!-- .html-content -->
          </div> <!-- .row -->
        </div> <!-- .automatic-lunch-container -->

        <div class="field">
          <a href="#" id="add-more" class="button is-primary is-small is-hidden">
            <span class="icon">
              <i class="fas fa-plus"></i>
            </span>
            Add Another Deal
          </a>
        </div> <!-- .field -->

        {{-- {{ Form::text('fetch_count', null, ['id' => 'fetch_count']) }} --}}

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            {{ Form::submit('Add New Deal', ['class' => 'button is-success']) }}
          </p>

          <p class="control">
            <a href="{{ route('dashboard.edit', $restaurantId) }}" class="button is-light">Cancel</a>
          </p>
        </div> <!-- .field is-grouped is-grouped-centered -->

      {!! Form::close() !!}

    </div> <!-- .col-xs-12 lunch-container-->
  </div> <!-- .row -->

  {{-- <section class="section">
    <div class="fetch-container" style="background: pink; padding:20px;">
      <div class="kazkas" style="background: red;">
        <h2 style="color: white;">Opa</h2>
      </div>

      <div class="kazkas2" style="background: green;">
        <h3 style="color: white;">Obuolys</h3>
      </div>
    </div> <!-- .fetch-container -->
  </section> --}}

@endsection

@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(e) {
      // var content = document.querySelectorAll(".fetch-container");

      // $('#xpath').on('click', function(e) {
      //   e.preventDefault();
      //   console.log('pressed');
      //   // var dataurl = $('#dataurl').val();
      //   var dataurl = $('#dataurl').val();
      //   // $('.iframe').attr('src', dataurl);
      //   // var iframe = $('.iframe').contents();
      //   // console.log(iframe.find('.weekday').html());
      //
      //   $('#document').on('click', function(evt) {
      //     evt.preventDefault();
      //     var awesome = getElementXPath(evt.target);
      //     console.log(awesome);
      //     alert('Lol');
      //   });
      //
      //   // $('.html-content').append(dataurl);
      //
      //   var token = '{{ Session::token() }}';
      //   var url = '{{ route('fetch.store', $restaurantId) }}';
      //   var restaurantId = {{ $restaurantId }};
      //
      //   $.ajax({
      //       method: 'POST',
      //       url: url,
      //       data: {dataurl: dataurl, restaurantId: restaurantId, _token: token}
      //   })
      //   .done(function (msg) {
      //       // console.log(msg['message']);
      //       // $('.iframe').attr('src', dataurl);
      //
      //       // $('.html-content').append('<h1>' + msg['message']['message'] + '</h1>');
      //       console.log(msg['message']);
      //       $('.html-content').append('<p>' + msg['message'] + '</p>');
      //   });
      // });


      // foreach(x as var node) {
      //   // var op = getXPathForElement(node);
      //   $('.results').append(node);
      // }
      // var amazing = getElementXPath(evt.target);
      // $('.fetch-container').on('click', function(evt) {
      //   // alert(evt.target.nodeName + ' ' + evt.target.nodeValue);
      //   var amazing = getElementXPath(evt.target);
      //   var cont = content[0];
      //     // console.log(cont);
      //   // for (var i = 0; i < content.length; i++) {
      //       // $('.results').append(cont.childNodes);
      //   // }
      //   // console.log(getPathTo(evt.target));
      //   // alert(getElementXPath(evt.target));
      //   console.log('selected');
      //   // var list = $(this).map(function() {
      //   //   console.log(evt.target.childNodes[0].nodeValue);
      //   //   return evt.target.childNodes[0].nodeValue;
      //   // });
      //   var list = evt.target.childNodes[0].nodeValue;
      //   console.log(list);
      //   // var p = document.createElement('<p>' + list + '</p>');
      //   $('.html-content').append("<p>" + list + "</p>");
      //   // $("<p>" + list + "</p>").appendTo($('.html-content'));
      //
      //
      // });

      function getElementXPath(element) {
        return "//" + $(element).parents().addBack().map(function () {
          var $this = $(this);
          var tagName = this.nodeName;

          if($this.siblings(tagName).length > 0) {
            tagName += "[" + ($this.prevAll(tagName).length + 1) + "]";
          }

          return tagName;
        }).get().join("/").toLowerCase();
      }

      // MANUAL
      // var x = 1;
      var x = 0;
      var fetch_count = 1;
      {{ $fetch_count = 1 }}


      $('.lunch-container #fetch_count').val(fetch_count);

      var lunchfields = '<div class="field">{{ Form::label('title[]', 'Lunch Title', ['class' => 'label']) }}<div class="control">{{ Form::text('title[]', null, ['class' => 'input field-title']) }}</div></div>';
          lunchfields += '<div class="file has-name"><label class="file-label"><input type="file" name="image[]" class="file-input" id="logo-file"><span class="file-cta"><span class="file-icon"><i class="fas fa-upload"></i></span><span class="file-label">Choose an image...</span></span><span class="file-name" id="file-name"></span></label></div>';
          lunchfields += '<div class="field">{{ Form::label('price[]', 'Meal Price', ['class' => 'label']) }}<div class="control">{{ Form::number('price[]', null, ['class' => 'input field-price', 'step' => '0.01']) }}</div></div>';

          weekdayfield = '<div class="field">{{ Form::label('weekday[]', 'Week Day', ['class' => 'label']) }}<div class="control"><div class="select">{{ Form::select('weekday[]', ["Monday" => "Monday", "Tuesday" => "Tuesday", "Wednesday" => "Wednesday", "Thursday" => "Thursday", "Friday" => "Friday"], date("l") == "Saturday" || date("l") == "Sunday" ? "Monday" : date("l")) }}</div></div></div>';

      var removebutton = '<a href="#" class="remove-meal button is-danger is-small"><span class="icon"><i class="fas fa-trash-alt"></i></span>Remove Deal</a>';

      $('.lunch-deals #count-deals').val(x);

      $(".lunch-container").on('click', '#add-more', function(e) {
        e.preventDefault();
        x++;
        {{ $fetch_count++ }}

        var lunchdeal = lunchfields;
            lunchdeal += weekdayfield;
            lunchdeal += removebutton;

        $('.lunch-deals').append('<div><h2 class="subtitle is-5">' + x + ' meal</h2>' + lunchdeal + '</div>');

        $('.lunch-deals #count-deals').val(x);
      });

      $('.lunch-container').on('click', '.remove-meal', function(e) {
        e.preventDefault();

        $(this).parent('div').remove();

        x--;
        $('.lunch-deals #count-deals').val(x);
      });

      // END OF MANUAL

      // var file = document.getElementById("logo-file");
      // file.onchange = function(){
      //   if(file.files.length > 0) {
      //     document.getElementById('file-name').innerHTML = file.files[0].name;
      //   }
      // };

      var content = '<div class="lunch-deals">';
          content += lunchfields;
          content += weekdayfield;
          content += '{{ Form::hidden('count_deals', 1, ['id' => 'count-deals']) }}</div>';
          // content += '{{ Form::hidden('photo_url[]', null, ['id' => 'photo-url']) }}</div>';

      $('#manual').on('click', function(e) {
        e.preventDefault();

        if ($('.automatic-lunch-container').hasClass('is-hidden') != true) {
          $('.automatic-lunch-container').addClass('is-hidden');
          $('.manual-lunch-container').removeClass('is-hidden');

          $('.automatic-lunch-container #dataurl').val('NODATA');

          $('#add-more').removeClass('is-hidden');

          if ($('.manual-lunch-container .lunch-deals').length == 0) {
            $('.manual-lunch-container').prepend(content);
            $('.automatic-lunch-container .lunch-deals').remove();
            x = 1;
          }
        }
      });

      $('#automatic').on('click', function(e) {
        e.preventDefault();

        var auto_content = '<div class="lunch-deals">';
            auto_content += weekdayfield;
            auto_content += '{{ Form::hidden('count_deals', 1, ['id' => 'count-deals']) }}</div>';
            // auto_content += '<h2>XPath</h2>{{ Form::text('title_xpath[]', null, ['id' => 'title-xpath']) }}{{ Form::text('image_xpath[]', null, ['id' => 'image-xpath']) }}{{ Form::text('price_xpath[]', null, ['id' => 'price-xpath']) }}';

        if ($('.manual-lunch-container').hasClass('is-hidden') != true) {
          $('.manual-lunch-container').addClass('is-hidden');
          $('.automatic-lunch-container').removeClass('is-hidden');

          $('.automatic-lunch-container #dataurl').val('');

          $('#add-more').addClass('is-hidden');

          if ($('.automatic-lunch-container .lunch-deals').length == 0) {
            $('.automatic-lunch-container .auto-lunch-cont').append(auto_content);
            $('.manual-lunch-container .lunch-deals').remove();
            x = 1;
          }
        }
      });

      // Fetch
      $('#fetch').on('click', function(e) {
        e.preventDefault();

        var dataurl = $('#dataurl').val();
        var token = '{{ Session::token() }}';
        var url = '{{ route('fetch.index', $restaurantId) }}';
        var restaurantId = {{ $restaurantId }};

        $.ajax({
          method: 'POST',
          url: url,
          data: {dataurl: dataurl, restaurantId: restaurantId, _token: token},
          beforeSend: function () {
            // $('#fetch').children('span').children().remove();
            $('#fetch').children('span').append('<i class="fas fa-spinner rotate"></i>');

          }
        })
        .done(function (msg) {
          // var obj = JSON.parse(msg);

          var lunchwrap = '<div class="col-xs-12 col-sm-6 margin-bottom"><div class="card">';
              lunchwrap += '<div class="card-image new-image"><button class="delete-deal button is-danger is-rounded"><span class="icon"><i class="fas fa-times"></i></span></button><figure class="image is-4by3"><img src=""></figure></div>';
              lunchwrap += '{{ Form::hidden('photo_url[]', null, ['class' => 'photo-url new-photo-url']) }}';
              lunchwrap += '<div class="card-content"><div class="content"><div class="field">{{ Form::label('title[]', 'Lunch Title', ['class' => 'label']) }}<div class="control">{{ Form::textarea('title[]', null, ['class' => 'input field-title new-title', 'style' => 'height: 60px;']) }}</div></div></div>';
              lunchwrap += '<div class="content-weekday"></div>';
              lunchwrap += '<div class="field">{{ Form::label('price[]', 'Meal Price', ['class' => 'label']) }}<div class="control">{{ Form::number('price[]', null, ['class' => 'input field-price new-price', 'step' => '0.01']) }}</div></div>';
              lunchwrap += '{{ Form::hidden('image_xpath[]', null, ['class' => 'image-xpath new-image-xpath']) }}';
              lunchwrap += '{{ Form::hidden('title_xpath[]', null, ['class' => 'title-xpath new-title-xpath']) }}';
              lunchwrap += '{{ Form::hidden('price_xpath[]', null, ['class' => 'price-xpath new-price-xpath']) }}';
              lunchwrap += '</div></div></div>';

          var wrapper = document.createElement('div');

          wrapper.innerHTML = msg['content'];
          console.log(wrapper);
          var images = wrapper.getElementsByTagName('img');
          var specimg = [];
          var vaikai = [];
          var field_price;
          var fixed_title;
          var xpath;
          var xpath_image = [];
          var temp_xpath_image;
          var temp_image;
          console.log(images);
          for (var i = 0; i < images.length; i++) {
            $(images[i]).filter(function () {
              console.log(images[i].src);
              if (images[i].src.match(/^https:\/\/www/)) {
                specimg.push($(images[i]));
                temp_xpath_image = getElementXPath($(images[i])).split('/');
                temp_xpath_image[2] = "html/body";
                temp_image = temp_xpath_image.join('/');

                xpath_image.push(temp_image);


                // xpath_image.push();
                // console.log(awesome);
                // console.log('praeina');
              } else if (images[i].src.match(/^http:\/\/www/)) {
                specimg.push($(images[i]));
                console.log("http");
                temp_xpath_image = getElementXPath($(images[i])).split('/');
                temp_xpath_image[2] = "html/body";
                temp_image = temp_xpath_image.join('/');

                xpath_image.push(temp_image);
                // console.log('praeina');
              }
            });
          }
          console.log(xpath_image[0]);

          // console.log(specimg);
          // var father = [];

          // for (var i = 0; i < images.length; i++) {
            // $('.opa-results').append('<ul></ul>');
            // console.log(images.length);
          for (var i = 0; i < specimg.length; i++) {
            var father = $(wrapper).find(specimg[i]).parent('div');
            console.log('Pirmas foras');


            if ($(father).siblings('div') == 1) {
              var grandpa = $(father).parent('div');
              console.log('neturi');

              // $('.opa-results ul .father').remove();
              // $('.opa-results ul').append('<li class="grandpa">div grandpa</li><li class="father">div  father</li>');

              if ($(grandpa).length == 1) {
                var grandpa2 = $(grandpa).parent('div');

                // $('.opa-results ul').prepend('<li>div grandpa2</li>');

                if ($(grandpa2).length == 1) {
                  var grandpa3 = $(grandpa2).parent('div');

                  // $('.opa-results ul').prepend('<li>div grandpa3</li>');
                }
              }
            } else {
              var brolis = $(father).siblings('div');
              // console.log($(brolis).children().length);
              console.log('Pirmas ifo elsas');

              if ($(brolis).children().length >= 1) {
                console.log('Brolis ' + i + ' ' + brolis);
                console.log($(brolis).children().length);

                // for (var j = 0; j < $(brolis).children().length; j++) {
                // foreach
                $('.opa-results').append(lunchwrap);
                  vaikai = $(brolis).children();

                  $(vaikai).each(function (count = 0) {
                    // console.log('antras foras' + j);
                    // console.log($(vaikai[count]).text());

                    if ($(vaikai[count]).text().trim() != '') {
                      console.log('sukuria');

                      if (/\d/.test($(vaikai[count]).text())) {
                        temp_xpath_data = getElementXPath($(vaikai[count])).split('/');
                        temp_xpath_data[2] = "html/body";
                        xpath = temp_xpath_data.join('/');

                        // console.log('praeina');
                        field_price = $(vaikai[count]).text().replace(/[^0-9.]/g, '');
                        console.log(field_price);
                        $('.opa-results .new-image img').attr('src', $(wrapper).find(specimg[i]).attr('src'));
                        $('.opa-results .new-photo-url').val($(wrapper).find(specimg[i]).attr('src'));
                        $('.opa-results .new-image-xpath').val(xpath_image[i]);
                        console.log(xpath_image[i]);

                        $('.opa-results .new-price').val(field_price);
                        $('.opa-results .new-price-xpath').val(xpath);

                        $('.opa-results .card-image').removeClass('new-image');
                        $('.opa-results .photo-url').removeClass('new-photo-url');
                        $('.opa-results .image-xpath').removeClass('new-image-xpath');

                        $('.opa-results .field-price').removeClass('new-price');
                        $('.opa-results .price-xpath').removeClass('new-price-xpath');
                        count++;
                        x++;
                        $('.lunch-deals #count-deals').val(x);

                        // $('.opa-results ul').prepend('Kaina ' + $(vaikai[i]).text());
                      // } else if ($(vaikai[j]).text().trim() == '') {
                      } else {
                        // console.log('title');
                        temp_xpath_data = getElementXPath($(vaikai[count])).split('/');
                        temp_xpath_data[2] = "html/body";
                        xpath = temp_xpath_data.join('/');

                        fixed_title = $(vaikai[count]).text().trim().replace(/\"/g, "'");
                        // fixed_title = title;

                        // console.log(fixed_title);

                        // xpath_image.push(temp_xpath);

                        $('.opa-results .new-title').val(fixed_title);
                        $('.opa-results .new-title-xpath').val(xpath);

                        $('.opa-results .field-title').removeClass('new-title');
                        $('.opa-results .title-xpath').removeClass('new-title-xpath');

                        // var awesome = getElementXPath($(vaikai[count]));
                        //
                        // console.log(xpath);

                        count++;


                        // $('.opa-results ul').prepend('Kazkas kito ' + $(vaikai[i]).text());

                      }

                    }
                  });

                  // console.log($(vaikai[i]).text());

                // }
              }




              // console.log($(brolis[0]).children());

              // console.log($(father).siblings('div'));
            }



            // $('.opa-results ul').append('<li class="father">div</li>');


          }

          $('.delete-deal').on('click', function () {
            $(this).parent().parent().parent().remove();

            x--;
            $('.lunch-deals #count-deals').val(x);
          });


            // alert($(wrapper).find(images[7]).attr('src'));



            // console.log($(wrapper).find(images[7]).parent('div'));
          // }


          // console.log(images);

          $('#fetch').children('span').children().remove();
          $('#fetch').children('span').append('<i class="fas fa-check-circle"></i>');

          // $('.results').append(msg['content']);
          // var imgcount = 0;
          $('.results').on('click', function(evt) {
            evt.preventDefault();

            var awesome = getElementXPath(evt.target);
            console.log(evt.target);

            $(evt.target).css({"border":"2px solid #ff3860", "box-shadow":"0px 0px 20px 5px #ff3860"});

            var correct = awesome.replace('//html/body/section/div/div/div/form/div[2]/div/div[2]/div', '//html/body/');



            if(evt.target.nodeName === 'IMG') {
              var list = evt.target.src;
              // $('.html-content').append("<img></img>");
              // $('.html-content img').attr('src', list);
              $('#file-name').text(list);
              $('#photo-url').val(list);

              $('#image-xpath').val(correct);
              // imgcount++;
              //
              // $('#imgcount').val(imgcount);


            } else if(/\d/.test(evt.target.childNodes[0].nodeValue)) {
              var list = evt.target.childNodes[0].nodeValue;
              $('#price-xpath').val(correct);
              // alert($.trim(list.replace(/[^a-z0-9.]/gi, '')));
              $('.lunch-deals .field-price').val($.trim(list.replace(/[^a-z0-9.]/gi, '')));
            } else {
              var list = evt.target.childNodes[0].nodeValue;
              // fetch_count++;
              // {{ $fetch_count++ }}
              $('#title-xpath').val(correct);
              // console.log($('.lunch-deals .field-title').length);
              if ($('.lunch-deals .field-title').length > 1) {
                $('.lunch-deals .field-title').childNodes[$('.lunch-deals .field-title').length].val($.trim(list));
                console.log('daugiau nei vienas');
              } else {
                console.log('vienas');
                $('.lunch-deals .field-title').val($.trim(list));
              }

            }
          });
        });
      });
    });
  </script>
@endsection
