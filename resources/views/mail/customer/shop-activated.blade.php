@component('mail::message')
# Congratulations

Your shop is now activated

@component('mail::button', ['url' => route('shops.show', "shop->id")])
Visit Your Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
