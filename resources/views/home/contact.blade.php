@extends('master.master')
@section('content')
  <header>
    <h1>Contact Us</h1>
  </header>
  <section>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </section>

  <section>
    <div class="col-lg">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.345511354345!2d119.87275468300882!3d-0.8820804999999912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bed0676cef417%3A0xd7bb942ffdc70a95!2sRevive%20Distro!5e0!3m2!1sen!2sid!4v1706159480413!5m2!1sen!2sid" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection
