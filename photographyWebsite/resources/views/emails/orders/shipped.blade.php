@component('mail::message')
#Order Successful

Your order has been verified and successful.<br>
Company Name:{{$order->companyName}}<br>
Package Name:{{$order->packageName}}<br>
Price:{{$order->price}}<br>
We hope you get an excellent service from your order.
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
Seek Wedding Photographer
@endcomponent
