@extends('landing.index')

@section('content')
    

        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
          <div class="w3-quarter">
            <img src="img/hg1.jpg" alt="Sandwich" style="width:100%">
            <h3>Hunger Games and Cathing Fire</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum</p>
          </div>
          <div class="w3-quarter">
            <img src="img/hg2.jpg" alt="Steak" style="width:100%">
            <h3>Hunger Games and The Mockingjay</h3>
            <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
          <div class="w3-quarter">
            <img src="img/hg1.jpg" alt="Cherries" style="width:100%">
            <h3>Hunger Games and Cathing Fire</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <p>What else?</p>
          </div>
          <div class="w3-quarter">
            <img src="img/hg2.jpg" alt="Pasta and Wine" style="width:100%">
            <h3>Hunger Games and The Mockingjay</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
        </div>
        
        <!-- Second Photo Grid-->
        {{-- <div class="w3-row-padding w3-padding-16 w3-center">
          <div class="w3-quarter">
            <img src="img/hr6.jpg" alt="Popsicle" style="width:100%">
            <h3>Harry Potter and the Order of the Phoenix</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
          <div class="w3-quarter">
            <img src="img/hr7.jpg" alt="Salmon" style="width:100%">
            <h3>Harry Potter and the Half-Blood Prince</h3>
            <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
          <div class="w3-quarter">
            <img src="img/hr8.jpg" alt="Sandwich" style="width:100%">
            <h3>Harry Potter and the Deathly Hallows - Part 1</h3>
            <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
          <div class="w3-quarter">
            <img src="img/hr9.jpg" alt="Croissant" style="width:100%">
            <h3>Harry Potter and the Deathly Hallows - Part 2</h3>
            <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
        </div> --}}
  
        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
          <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
            <a href="/homepage" class="w3-bar-item w3-button w3-hover-black">1</a>
            <a href="#" class="w3-bar-item w3-black w3-button">2</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
          </div>
        </div>
      <!-- End page content -->
      </div>
@endsection