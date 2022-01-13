<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grupo Voalle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('storage/images/favicon.png') }}" type="image/x-icon" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g transform="translate(0.000000,155.000000) scale(0.100000,-0.100000)" fill="#fffeff">
                            <path d="M814 1214 c-92 -180 -171 -339 -176 -353 -8 -23 5 -53 102 -238 62
                            -117 115 -213 118 -213 7 1 582 1112 582 1124 0 3 -103 6 -229 6 l-230 0 -167
                            -326z"/>
                            <path d="M10 1245 c0 -7 414 -796 441 -839 l17 -29 76 151 c42 84 76 156 76
                            161 0 6 -65 133 -143 283 l-144 273 -161 3 c-89 1 -162 0 -162 -3z"/>
                            <path d="M420 1240 c0 -5 37 -80 81 -166 l82 -156 83 158 c46 88 84 162 84
                            167 0 4 -74 7 -165 7 -102 0 -165 -4 -165 -10z"/>
                            <path d="M1499 1035 c-57 -32 -66 -148 -14 -192 56 -48 145 -13 145 57 0 29
                            -1 30 -42 28 l-43 -1 38 -4 c31 -4 37 -8 37 -28 0 -28 -43 -65 -75 -65 -33 0
                            -71 35 -79 71 -8 42 10 106 34 119 34 18 87 12 104 -12 9 -12 18 -19 21 -16 3
                            3 -2 15 -12 27 -23 28 -80 36 -114 16z"/>
                            <path d="M2430 1043 c-29 -11 -50 -37 -60 -73 -22 -81 19 -150 89 -150 78 0
                            120 76 92 163 -16 48 -75 77 -121 60z m76 -21 c21 -14 34 -51 34 -97 0 -71
                            -53 -112 -115 -89 -24 9 -45 58 -45 102 0 56 31 92 78 92 20 0 42 -4 48 -8z"/>
                            <path d="M1712 928 c1 -62 3 -89 5 -60 l4 53 52 -3 52 -3 3 -47 c2 -27 7 -48
                            13 -48 12 0 12 83 -1 96 -8 8 -6 20 7 41 16 29 16 32 0 57 -16 23 -24 26 -77
                            26 l-60 0 2 -112z m116 90 c7 -7 12 -21 12 -33 0 -33 -20 -45 -72 -45 l-48 0
                            0 45 0 45 48 0 c26 0 53 -5 60 -12z"/>
                            <path d="M1932 954 c-2 -83 0 -92 21 -112 29 -27 77 -28 108 -3 21 17 24 29
                            27 110 3 62 0 91 -7 91 -7 0 -11 -31 -11 -87 0 -49 -4 -94 -8 -101 -13 -20
                            -74 -26 -97 -9 -17 13 -21 31 -26 109 l-5 93 -2 -91z"/>
                            <path d="M2160 936 c0 -59 4 -108 10 -111 6 -4 10 13 10 44 l0 51 40 0 c43 0
                            90 34 90 65 0 33 -38 55 -95 55 l-55 0 0 -104z m123 73 c5 -9 7 -28 3 -42 -6
                            -25 -11 -27 -56 -27 l-50 0 0 46 0 45 46 -3 c30 -2 51 -9 57 -19z"/>
                            <path d="M1457 723 c-2 -5 34 -104 81 -222 l85 -213 23 56 23 56 -55 147 c-72
                            191 -67 183 -114 183 -21 0 -41 -3 -43 -7z"/>
                            <path d="M1817 723 c-3 -5 -44 -113 -92 -242 -71 -188 -85 -235 -74 -242 20
                            -12 43 -11 62 4 18 14 199 466 191 479 -6 10 -81 11 -87 1z"/>
                            <path d="M2127 716 c-139 -50 -203 -218 -134 -353 44 -85 124 -133 222 -133
                            140 0 248 106 249 245 2 177 -170 300 -337 241z m173 -99 c98 -65 98 -209 0
                            -274 -46 -32 -124 -32 -170 0 -99 66 -99 208 0 274 46 32 124 32 170 0z"/>
                            <path d="M2683 718 c-19 -23 -194 -469 -188 -479 9 -13 71 -11 83 3 5 7 38 90
                            73 185 35 95 67 169 71 165 5 -6 68 -170 68 -179 0 -2 -27 -3 -59 -3 -59 0
                            -59 0 -74 -37 l-15 -38 90 -5 90 -5 21 -45 c19 -39 27 -45 56 -48 18 -2 37 0
                            42 5 4 4 -36 116 -89 248 -96 237 -97 240 -128 243 -17 2 -36 -3 -41 -10z"/>
                            <path d="M3035 718 c-3 -7 -4 -119 -3 -248 l3 -235 150 0 150 0 3 42 3 43
                            -110 0 -111 0 -2 203 -3 202 -38 3 c-24 2 -39 -1 -42 -10z"/>
                            <path d="M3417 724 c-4 -4 -7 -114 -7 -245 l0 -239 23 -5 c12 -3 83 -4 157 -3
                            l135 3 3 42 3 43 -110 0 -111 0 -2 203 -3 202 -40 3 c-23 2 -44 0 -48 -4z"/>
                            <path d="M3805 718 c-3 -8 -4 -119 -3 -248 l3 -235 175 0 175 0 3 43 3 42
                            -130 0 -131 0 0 65 0 65 95 0 95 0 0 40 0 40 -95 0 -95 0 0 55 0 55 126 0 125
                            0 -3 43 -3 42 -168 3 c-130 2 -169 0 -172 -10z"/>
                            <path d="M585 455 l-80 -154 71 -136 c39 -75 75 -137 80 -137 5 0 43 66 86
                            148 l77 148 -71 136 c-39 74 -74 138 -77 142 -3 4 -42 -62 -86 -147z"/>
                        </g>
                    </svg>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
