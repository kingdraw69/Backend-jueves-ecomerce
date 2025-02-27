<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
            }
            body {
                margin: 0;
            }
            a {
                background-color: transparent;
            }
            [hidden] {
                display: none;
            }
            html {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                line-height: 1.5;
            }
            *,:after,:before {
                box-sizing: border-box;
                border: 0 solid #e2e8f0;
            }
            a {
                color: inherit;
                text-decoration: inherit;
            }
            svg, video {
                display: block;
                vertical-align: middle;
            }
            video {
                max-width: 100%;
                height: auto;
            }

            /* Promo Banner */
            .promo-banner {
                background-color: #FF7F32; /* Naranja */
                color: white;
                padding: 50px 0;
                text-align: center;
            }

            .promo-banner h1 {
                font-size: 3rem;
                font-weight: bold;
            }

            /* Category Box */
            .category-box {
                background-color: white;
                color: #FF7F32; /* Naranja */
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: 20px;
                transition: transform 0.3s ease;
            }

            .category-box:hover {
                transform: scale(1.05);
            }

            /* Container for Categories */
            .container-categories {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 20px;
            }
        </style>
    </head>
    <body>

        <!-- Banner Promocional -->
        <div class="promo-banner">
            <h1>¡Ofertas Exclusivas!</h1>
            <p>Descubre nuestras categorías y encuentra lo mejor para ti</p>
        </div>

        <!-- Imagen Promocional -->
        <div>
            <img src="https://www.unab.edu.co/sites/default/files/BANNER-U_2.png" width="100%" alt="Laravel Logo">
        </div>

        <!-- Categorías -->
        <div class="container container-categories">
            <div class="category-box">
                <h3>Electrónica</h3>
                <p>Los mejores gadgets al mejor precio.</p>
            </div>
            <div class="category-box">
                <h3>Moda</h3>
                <p>Últimas tendencias en ropa y accesorios.</p>
            </div>
            <div class="category-box">
                <h3>Hogar</h3>
                <p>Todo para mejorar tu casa.</p>
            </div>
            <div class="category-box">
                <h3>Tecnología</h3>
                <p>Encuentra los productos más innovadores.</p>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
