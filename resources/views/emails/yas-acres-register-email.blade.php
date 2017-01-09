Mail from Yas Acres Register


Name 	: {{ $data['name'] }} 
Email 	: {{ $data['email'] }}

@if($data['villa'] || $data['townhouse'] || $data['duplex'] || $data['bedrooms'])

Interested in : 

@if($data['villa'])
{{ ucfirst($data['villa']) }} 	
@endif
@if($data['villa'])
{{ ucfirst($data['townhouse']) }} 
@endif
@if($data['villa'])
{{ ucfirst($data['duplex']) }}
@endif
@if($data['bedrooms'])
No of Bedrooms : {{ $data['bedrooms'] }}
@endif

@endif


Message : 

{{ $data['message'] }}