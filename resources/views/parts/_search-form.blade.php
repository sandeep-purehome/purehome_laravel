<form action="{{ url('/listing/search') }}" method="get">
	 {!! Form::token(); !!}
  	<div class="input-group">
		
		<div class="input-group-addon btn-info"><i class="fa fa-location-arrow"></i></div>
      	<input type="text" data-provide="typeahead" class="form-control typeahead input-lg" name="search_term" spellcheck="false" autocomplete="off" id="search_term" value="{{ $search_term or "" }}" placeholder="Enter Location, Community, Property Name">
      	<span class="input-group-btn">
			<button class="btn btn-warning btn-lg" type="submit">SEARCH</button>
		</span>
		
	</div>
	@unless (Request::is('/'))

	<div class="input-group" style="margin-top: 15px;">
		<select class="form-control" name="bedrooms" id="bedrooms" >
		  <option selected></option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		</select>
	</div>

	<div class="input-group" style="margin-top: 15px;">
		<select class="form-control" name="bathrooms" id="bathrooms" >
		  <option selected></option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		</select>
	</div>

	@endunless

</form>