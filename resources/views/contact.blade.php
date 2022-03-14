@extends('main')
@section('content')
    <!-- CONTACT -->
    <section class="contact section-padding">
      <div class="container">
           <div class="row">

                <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                  <h1 class="mb-4">Hey there, Let's <strong>talk</strong> about <strong>creative</strong> projects</h1>

                  <p>or email us at <a href="mailto:hello@company.com">hello@company.com</a></p>
                  <p>Please follow our <a rel="nofollow" href="https://templatemo.com/contact">contact page</a> to <strong>setup</strong> the contact form.</p>
                
 {{-- Tabel --}}
 <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10">
  <thead style="color:white" bgcolor="black">
      <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Message</th>
      </tr>
  </thead>

  <tbody>

      @foreach ($contact as $c)
          <tr>
              <td>{{ $c->id }}</td>
              <td>{{ $c->nama }}</td>
              <td>{{ $c->email }}</td>
              <td>{{ $c->message }}</td>
          </tr>
      @endforeach

  </tbody>
</table>

                </div>               

                <div class="col-lg-8 mx-auto col-md-10 col-12">
                
                <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
                
                  <form action="#" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                    <div class="row">
                      <div class="col-lg-6 col-12">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                      </div>

                      <div class="col-lg-6 col-12">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      </div>

                      <div class="col-lg-12 col-12">
                        <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                      </div>

                      <div class="col-lg-5 mx-auto col-7">
                        <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                      </div>
                    </div>

                  </form>
                </div>

           </div>
      </div>
 </section>

@endsection
     