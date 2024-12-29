<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>

    <style>
        /* Reset some basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc; /* light gray background */
            padding: 2rem 1rem;
        }

        .app {
            min-width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mail__wrapper {
            max-width: 32rem; /* max width 512px */
            margin: 0 auto;
        }

        .mail__content {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .content__header {
            text-align: center;
            border-bottom: 1px solid #e5e7eb; /* light gray */
            padding-bottom: 1rem;
        }


        .content__header img {
            max-width: 200px;
            display: block;
            margin: 1rem auto;
        }

        .content__header h1 {
            font-size: 2rem;
            font-weight: 600;
            color: #2d3748; /* dark gray */
            margin-top: 1rem;
        }

        .content__body {
            padding-top: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .content__body p {
            color: #4a5568; /* gray-700 */
            font-size: 1rem;
            line-height: 1.5;
        }

        .content__body a {
            display: inline-block;
            background-color: #ec7a1c; /* red-500 */
            color: white;
            font-size: 0.875rem; /* small text */
            font-weight: 600;
            border-radius: 0.375rem;
            padding: 0.75rem 1.5rem;
            text-align: center;
            width: 100%;
            margin: 2rem 0;
            transition: background-color 0.3s;
        }

        .content__body a:hover {
            background-color: #c53030; /* red-600 */
        }

        .content__footer {
            margin-top: 2rem;
            text-align: center;
            color: #2d3748; /* dark gray */
        }

        .content__footer h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .content__footer p {
            font-size: 0.875rem;
        }

        .mail__meta {
            text-align: center;
            font-size: 0.875rem;
            color: #4a5568; /* gray-600 */
            margin-top: 2rem;
        }

        .meta__social {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .meta__social a {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2d3748; /* dark gray */
            color: white;
            border-radius: 9999px; /* round */
            width: 2rem;
            height: 2rem;
            margin-right: 1rem;
            transition: background-color 0.3s;
        }

        .meta__social a:hover {
            background-color: #4a5568; /* gray-700 */
        }

        .meta__help a {
            color: #3182ce; /* blue-600 */
            text-decoration: none;
        }

        .meta__help a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="app">

        <div class="mail__wrapper">
      
          <div class="mail__content">
      
            <div class="content__header">
              
              <h2>E-mail Confirmation <br> Malaz Solutions</h2>
              <!-- Menambahkan gambar (imageUrl) di sini -->
              <div class="my-4">
                  <img src="{{ $imageUrl }}" alt="Logo Aplikasi" class="max-w-[200px] mx-auto">
              </div>
      
            </div>
      
            <div class="content__body">
              <p>
                Hey, <br><br>Klik tombol di bawah untuk memverifikasi alamat email Anda dan mulai menggunakan aplikasi kami.
              </p>
              
              <!-- Button for email confirmation -->
              <a href="{{ $url }}">KONFIRMASI EMAIL ADDRESS</a>
              
              <p>
                Demi Keamanan Akun anda, apabila tidak merasa melakukan pendaftaran tolong abaikan <br><br>Salam Hangat
              </p>
            </div>
      
            <div class="content__footer">
              <h3>Thanks for using The App!</h3>
              <p>www.malazsolution.id</p>
            </div>
      
          </div>
      
          <div class="mail__meta">
      
            <div class="meta__social">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-twitter"></a>
            </div>
      
            <div class="meta__help">
              <p class="leading-loose">
                Questions or concerns? <a href="mailto:help@theapp.io">help@theapp.io</a>
                <br> Want to quit getting updates? <a href="#">Unsubscribe</a>
              </p>
            </div>
      
          </div>
      
        </div>
      
    </div>
</body>
</html>
