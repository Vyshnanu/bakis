@extends('main')

@section('title', 'Edit Lunch Deal')

@section('section')

  <section class="hero">
    <div class="hero-body has-text-centered">
      <h1 class="title">
        Edit Lunch Deal
      </h1>
    </div>
  </section>

  <div class="row">
    <div class="col-xs-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3">
      {!! Form::model($lunch, ['route' => ['lunch.update', $lunch->restaurant_id, $lunch->id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="field">
          {{ Form::label('title', 'Lunch Title', ['class' => 'label']) }}

          <div class="control">
            {{ Form::text('title', null, ['class' => 'input']) }}
          </div>
        </div>

        <div class="file has-name">
          <label class="file-label">
            <input type="file" name="image" class="file-input" id="logo-file">

            <span class="file-cta">
              <span class="file-icon">
                <i class="fas fa-upload"></i>
              </span>

              <span class="file-label">Choose an image...</span>
            </span>

            <span class="file-name" id="file-name">{{ $lunch->image }}</span>
          </label>
        </div>

        <div class="field">
          {{ Form::label('price', 'Meal Price', ['class' => 'label']) }}

          <div class="control">
            {{ Form::number('price', null, ['class' => 'input', 'step' => '0.01']) }}
          </div>
        </div>

        <div class="field">
          {{ Form::label('weekday', 'Week Day', ['class' => 'label']) }}

          <div class="control">
            <div class="select">
              {{-- {{ Form::text('a', date('l') == "Saturday" || date('l') == "Sunday" ? "Monday" : date('l'), ['class' => 'input']) }} --}}
              {{ Form::select('weekday', [
                'Monday' => 'Monday',
                'Tuesday' => 'Tuesday',
                'Wednesday' => 'Wednesday',
                'Thursday' => 'Thursday',
                'Friday' => 'Friday',
              ], $lunch->weekday) }}
            </div>
          </div>
        </div>

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            {{ Form::submit('Add New Deal', ['class' => 'button is-success']) }}
          </p>

          <p class="control">
            <a href="{{ route('dashboard.edit', $lunch->restaurant_id) }}" class="button is-light">Cancel</a>
          </p>
        </div>

      {!! Form::close() !!}
    </div>
  </div>

@endsection

@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(e) {
      var file = document.getElementById("logo-file");
      file.onchange = function(){
        if(file.files.length > 0) {
          document.getElementById('file-name').innerHTML = file.files[0].name;
        }
      };
    });
  </script>
@endsection
