<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>System Unavailable</title>
     <style>
          body {
               margin: 0;
               padding: 0;
               background-color: #0f172a;
               /* Dark slate background */
               font-family: 'Inter', system-ui, -apple-system, sans-serif;
               color: #f8fafc;
               display: flex;
               align-items: center;
               justify-content: center;
               height: 100vh;
               overflow: hidden;
          }

          .container {
               text-align: center;
               max-width: 600px;
               padding: 2rem;
               background-color: #1e293b;
               border-radius: 12px;
               box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
               border-top: 4px solid #ef4444;
               /* Red accent */
          }

          h1 {
               font-size: 2.5rem;
               margin-bottom: 1rem;
               color: #ef4444;
          }

          p {
               font-size: 1.125rem;
               line-height: 1.6;
               color: #cbd5e1;
               margin-bottom: 2rem;
          }

          .icon {
               font-size: 4rem;
               margin-bottom: 1rem;
               color: #ef4444;
          }

          .footer {
               margin-top: 2rem;
               font-size: 0.875rem;
               color: #64748b;
          }
     </style>
</head>

<body>

     <div class="container">
          <div class="icon">⚠️</div>
          <h1>System Suspended</h1>
          <p>This system is temporarily unavailable. Please contact the provider.</p>

          <div class="footer">
               &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
          </div>
     </div>

</body>

</html>