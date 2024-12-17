<div class="dropdown mr-4">
    <button class="btn btn-bd-1 dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
                {{ __('select a language')}}
            </button>
    <div class="dropdown-menu" aria-labelledby="triggerId">

        @foreach (config('app.available_locales') as $locale_name => $available_locale )
            
                <a class="dropdown-item" href="lang/{{$available_locale}}">{{__($locale_name)}}</a> 
            
  
        @endforeach
    </div>
   </div>