@component('mail::message')

# 👨🏻‍💻 Your user account credentials

Here are your account credentials for **SnapWave**:

---

**👤 Name:** {{ $name }}  
**📧 Email:** {{ $email }}  
**🔑 Password:** {{ $password }}

---

@component('mail::button', ['url' => 'https://snapwave.lk/login'])
Visit SnapWave !
@endcomponent

We recommend that you change your password after logging in for the first time.

Best regards,  
**Team SnapWave**
@endcomponent