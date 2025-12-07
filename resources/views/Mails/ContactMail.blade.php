@component('mail::message')
@if ($mailStatus == 'System')
# 📩 New Contact Message Received

A new contact message has been submitted through the **SnapWave** website.

---

**👤 Name:** {{ $name }}  
**📧 Email:** {{ $email }}  
**📞 Contact Number:** <a href="tel:{{ $contact }}">{{ $contact }}</a><br>
**📆 Date:**  {{ $date }}

@if (!empty($message))
**💬 Message:**  
{{ $message }}
@endif

---

@component('mail::button', ['url' => 'mailto:' . $email])
Reply to {{ $name }}
@endcomponent

Thanks,  
**SnapWave System**

@else
# 📋 Copy of Your Message to SnapWave

Hello {{ $name }},

This is a confirmation that your message has been successfully sent to the **SpeakCraft** team. Below is a copy of what you submitted:

---

**📆 Date:**  {{ $date }}

@if (!empty($message))
**💬 Your Message:**  
{{ $message }}
@endif

**📞 Contact Number:** {{ $contact }}  
**📧 Email:** {{ $email }}

---

@component('mail::button', ['url' => 'https://snapwave.lk/'])
Visit SnapWave !
@endcomponent

We will get back to you as soon as possible.  
Thank you for reaching out to us.

Best regards,  
**Team SnapWave**
@endif
@endcomponent