/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./public/**/*.{html,js}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        colors: {
            hitam: "#020617",
            merah: "#E32501",
            putih: "#eff1f1",
            abu: "#858585",
            abuTua: "#3D3D3D",
            biru: "#38bdf8",
            orange: "#FFB800",
            pink: "#FFB4C2",
            pink2: "#ff6884",
            coklat: "#7F583B",

            primary: {
                100: "#E6F6FF",
                200: "#BFE8FF",
                300: "#99DBFF",
                400: "#4DC0FF",
                500: "#00A5FF",
                600: "#0096E6",
                700: "#00648C",
                800: "#004966",
                900: "#002C43",
            },

            secondary: {
                100: "#FFF5E6",
                200: "#FFE0B3",
                300: "#FFCC80",
                400: "#FFA726",
                500: "#FF9800",
                600: "#E68A00",
                700: "#8C5A00",
                800: "#664200",
                900: "#432D00",
            },

            success: {
                100: "#E6FFEC",
                200: "#B3FFD9",
                300: "#80FFC6",
                400: "#26FFA3",
                500: "#00FF80",
                600: "#00E673",
                700: "#008C49",
                800: "#006633",
                900: "#003D1A",
            },

            danger: {
                100: "#FFE6E6",
                200: "#FFB3B3",
                300: "#FF8080",
                400: "#FF2626",
                500: "#FF0000",
                600: "#E60000",
                700: "#8C0000",
                800: "#660000",
                900: "#330000",
            },

            warning: {
                100: "#FFF0E6",
                200: "#FFD9B3",
                300: "#FFC680",
                400: "#FFA726",
                500: "#FF9800",
                600: "#E68A00",
                700: "#8C5A00",
                800: "#664200",
                900: "#432D00",
            },
        },
    },
    plugins: [],
};
