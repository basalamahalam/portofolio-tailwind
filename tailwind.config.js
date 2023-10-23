/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/index.blade.php"],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#075985",
                dark: "#0F172A",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [],
};
