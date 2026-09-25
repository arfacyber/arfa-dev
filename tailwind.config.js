import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // <--- INI KUNCI UNTUK MENGAKTIFKAN FITUR DARK/LIGHT MODE
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    dark: '#0a0a0a',      // Background utama (Near-black)
                    surface: '#171717',   // Card / Surface (Dark gray)
                    border: '#262626',    // Garis batas subtle
                    text: '#f8fafc',      // Teks utama (Near-white)
                    muted: '#a3a3a3',     // Teks sekunder (Muted gray)
                    accent: '#06b6d4',    // Cyan / Electric Blue untuk highlight
                }
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                }
            }
        },
    },
    plugins: [],
};