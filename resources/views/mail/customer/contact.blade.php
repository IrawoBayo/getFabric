@component('mail::message')
# Enquiry

<body>
	<h2>Hello Admin</h2>
	<p>You have received an email from : {{$data['name']}}</p>
	<p>Here are the details:</p>
	<p>Name: {{$data['name']}}</p>
	<p>Email: {{$data['email']}}</p>
	<p>Telephone: {{$data['telephone']}}</p>
	<p>Subject: {{$data['subject']}}</p>
	<p>Message: {{$data['message']}}</p>
</body>



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
