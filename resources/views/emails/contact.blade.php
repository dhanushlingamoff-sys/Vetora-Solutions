<h3>New Contact Form Submission</h3>

<p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
<p><strong>Phone:</strong> {{ $data['full_phone'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Business:</strong> {{ $data['business'] }}</p>
<p><strong>Message:</strong> {{ $data['message'] ?? '' }}</p>

<p>
    <strong>WhatsApp Updates:</strong>
    {{ isset($data['whatsapp_updates']) ? 'Yes' : 'No' }}
</p>