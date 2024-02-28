/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                "11.5/12": "95%",
            },
            height: {
                100: "30rem",
            },
            colors: {
                deepAqua: "#003B46",
                ocean: "#07575B",
                wave: "#66A5AD",
                seaFoam: "#C4DFE6",
                blueSky: "#4CB5F5",
                sky: "#375E97",
                granite: "#B7B8B6",
                pine: "#34675C",
                forest: "#1E434C",
                sunset: "#FB6542",
            },
            inset: {
                18: "72px",
                22: "88px",
            },
        },
    },
    plugins: [],
};
