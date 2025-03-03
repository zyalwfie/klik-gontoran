/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat"],
                lora: ["Lora"],
                hindMadurai: ["Hind Madurai"],
            },
            colors: {
                "primary-accent-bg": "#FFFAE9",
                "primary-accent-item": "#FFF4C2",
                "primary-accent-item-2": "#FFEB9C",
                "primary-accent-item-3": "#FFE178",
                "primary-accent-borders": "#F5D575",
                "primary-accent-solid": "#FACA08",
                "primary-accent-solid-2": "#EDC01A",
                "primary-accent-text": "#947200",
                "primary-accent-text-2": "#443A1C",
                "primary-gray-bg": "#FFF8EA",
                "primary-gray-item": "#FCEEDA",
                "primary-gray-item-2": "#FAE5C6",
                "primary-gray-item-3": "#F5DEBB",
                "primary-gray-borders": "#F3D4A7",
                "primary-gray-solid": "#A4875B",
                "primary-gray-solid-2": "#997D51",
                "primary-gray-text": "#795D32",
                "primary-gray-text-2": "#321A00",
            },
        },
    },
    plugins: [],
};
