
  <div id="showcase">
    <div class="container showcase">
        <div class="full-width text-center showcase-caption mt-30">
    			<h4>Find Tutor,Get Tuition</h4>
              <h1>Hometutor.com</h1>
                  <p>A single place to find qualityful tutor and searching for parfect tuition.</p>
                    <div class="showcase-button">
                       @if(session()->get('userrole')=='guardian')
                      <a  class="button-style showcase-btn" href="{{route('pages.registrationGS')}}">
                        Find Tutor
                      </a>
                      
                       @elseif(session()->get('userrole')=='tutor')
                      <a href="{{route('pages.registrationTU')}}" class="button-style showcase-btn">
                        Find Tution
                      </a>
                      @else
                       <a  class="button-style showcase-btn" href="{{route('pages.registrationGS')}}">
                        Find Tutor
                      </a>
                       <a href="{{route('pages.registrationTU')}}" class="button-style showcase-btn">
                        Find Tution
                      </a>
                      @endif

                </div>
    		</div>
      </div>
  </div>