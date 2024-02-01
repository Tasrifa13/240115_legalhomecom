@extends('master.master')
@section('content')
<!DOCTYPE htnl>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,user-scalable=no">
  <title>CSS Reponsive Contact From Google Map</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <style>
    {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      margin-bottom: 30px;
    }
    body
    {
      margin-top: 40px;
      margin-bottom: 40px;
      height: 100vh;
      align-items: center;
      bockground-color: #8e2de2;
    }
    .contact-in
    {
      width: 80%;
      height: auto;
      margin: auto;
      display: flex;
      flex-wrap: wrap;
      padding: 10px;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0px 0px 10px 0px #666;
      margin-bottom: 40px;
      margin-top: 40px;
    }
    .contact-map iframe
    {
      width: 90%;
      height: 100%
    }
    .contact-map 
    {
      width: 90%;
      height: auto;
      flex: 50%;
    }
    .contact-from
    {
      width: 100%;
      height: auto;
      flex: 50%;
    }
    .contact-from h2
    {
      text-align: center;
      margin-bottom: 10px;
    }
    .contact-from-txt
    {
      width: 100%;
      height: 40px;
      color: #000;
      border: 1px solid #bcbcbc;
      border-radius: 50px;
      outline: none;
      margin-bottom: 20px;
      padding: 15px;
    }
    .contact-from-txt::placehoholder
    {
      color: #aaa;
    }
    .contact-from-textarea
    {
      width: 100%;
      height: 130px;
      color: #000;
      border: 1px solid #bcbcbc;
      border-radius: 5px;
      outline: none;
      margin-bottom: 10px;
      padding: 15px;
      font-family: 'poppins',sens-serif;
    }
    .contact-from-txt::placehoholder
    {
      color: #aaa;
    }

    .contact-from-btn
    {
      width: 50%;
      border:none;
      outline: none; I
      border-radius: 5px;
      background: #8e2de2;
      color: #fff;
      text-transform: uppercase;
      padding: 10px 0;
      cursor: pointer;
      font-size: 18px;
      justify-content: space-around;
    }
  </style>
</head>
<body>
  <div class="contact-in">
    <div class="contact-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.333690872703!2d119.87430417377061!3d-0.893038899098316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bedd9e19db635%3A0xbdc233f33d0a62cf!2sNew%20Central%20Stationery%20%26%20Cosmetics!5e0!3m2!1sid!2sid!4v1706494671512!5m2!1sid!2sid" width="200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-from">
      <h2>Contact us</h2>
      <form>
        <input type="text" placeholder="name" class="contact-from-txt"/>
        <input type="text" placeholder="email" class="contact-from-txt"/>
        <textarea placeholder="message" class= "contact-from-textarea"></textarea>
        <!-- <input type="submit" name="sumbit" class="contact-from-btn"/> -->
        <div class="text-center"><button type="submit">Kirim</button></div>
      </form>
    </div>
    </div>
</body>
<html>
@endsection